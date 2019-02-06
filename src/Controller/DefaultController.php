<?php

namespace App\Controller;

use App\Form\PostType;
use App\Entity\Content;
use App\Entity\Civility;
use App\Entity\DataUser;
use App\Entity\ImgContent;
use App\Form\CivilityType;
use App\Form\ImgContentType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(UserInterface $user = null)
    { 
        return $this->redirectToRoute('social');
    }
    /**
     * @Route("/social", name="social")
     */
    public function social(UserInterface $user, ObjectManager $manager, Request $request)
    {   
        // Test si la civilité est config - Add in all controller fnct
        $civility = $user->getCivility();
        if($civility == null){
        return $this->redirectToRoute('civility');        
        }

        // Publication
        $post = new Content();    
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // test si il y a au moins une valeur remplie (n'est pas vide)
            dump($request);
            $image = $request->files->get('post')['my_files'];
            $text = $request->request->get('post')['text'];
            if ($image != null OR $text != null) {
                $post->setUser($user)
                    ->setCreateAt(new \DateTime())
                    ->setEnable('1');
                
                $manager->persist($post);
                $manager->flush();

                // Les images

                // upload
                $files = $request->files->get('post')['my_files'];
                foreach ($files as $file) {
                    $upload_directory = $this->getParameter('upload_directory_post');
                    $filename = md5(uniqid()) . '.' . $file->guessExtension();
                    $file->move(
                        $upload_directory,
                        $filename
                    );
                    // associé l'image au post
                    $images = new ImgContent(); 
                    $images->setImg("assets/images/ressources/post/$filename")
                        ->setContent($post);
                    $manager->persist($images);
                    $manager->flush();
                }
            }
            
        }

        $userPP = $user->getId();
        if($userPP != NULL){
            $rawSql ="SELECT data_user.link , civility.first_name , civility.name , follow.follower_id  FROM  follow , data_user , civility where follow.following_id = :id and data_user.user_id = :id and civility.user_id = follow.follower_id  ";
            $stmt = $manager->getConnection()->prepare($rawSql);
            $stmt->bindValue('id', $userPP);
            $stmt->execute();
            $follower = $stmt->fetchAll();
        }
  
        if($userPP != NULL){
        $rawSql ="SELECT data_user.link , civility.first_name , civility.name , follow.following_id  FROM  follow , data_user , civility where follow.follower_id = :id and data_user.user_id = :id and civility.user_id = follow.following_id ";
        $stmt = $manager->getConnection()->prepare($rawSql);
        $stmt->bindValue('id', $userPP);
        $stmt->execute();
        $following = $stmt->fetchAll();
        }
           

        return $this->render('default/index.html.twig', [
            'controller_name' => 'Social',
            'followings' => $following ,
            'form' => $form->createView(),
            'followers'=>$follower,
        ]);
    }

    /**
     * @Route("/social/civilite", name="civility")
     */
    public function civility(UserInterface $user, ObjectManager $manager, Request $request)
    {
        // form
        // voir si l' entité existe
        $civil = $user->getCivility();
        if($civil == null){
            // si il est inexistant, créer le form
            $civil = new Civility();
        }
        $form = $this->createForm(CivilityType::class, $civil);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // ajouter les photos de profil de base et background
            $userPP = $user->getDataUser();
            if($userPP == null){
                $userPP = new DataUser;
                $userPP->setLink("assets/images/resources/pf-img4.jpg")
                        ->setBgLink("assets/images/resources/cover-img.jpg")
                        ->setUser($user);
                $manager->persist($userPP);
                $manager->flush();
            }
            $civil->setUser($user);
            $manager->persist($civil);
            $manager->flush();
            $this->addFlash('success', 'Vos informations ont bien été enregistré !');
            return $this->redirectToRoute('social');
        }

        return $this->render('default/civility.html.twig', [
            'controller_name' => 'Civilité',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/social/Conditions", name="conditions")
     */
    public function conditions(UserInterFace $user)
    {
        // Test si la civilité est config - Add in all controller fnct
        $civility = $user->getCivility();
        if($civility == null){
        return $this->redirectToRoute('civility');
        }
        
        return $this->render('default/conditions.html.twig', [
            'controller_name' => 'Conditions',
        ]);
    }

}
