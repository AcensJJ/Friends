<?php

namespace App\Controller;

use App\Entity\Civility;
use App\Form\CivilityType;
use App\Entity\DataUser;
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
    public function social(UserInterface $user, ObjectManager $manager)
    {   
        // Test si la civilité est config - Add in all controller fnct
        $civility = $user->getCivility();
        if($civility == null){
        return $this->redirectToRoute('civility');
        }

        $userPP=$user->getId();

      
        if($userPP != NULL){
            $rawSql ="SELECT data_user.link , civility.first_name , civility.name , follow.follower_id  FROM  follow , data_user , civility where follow.following_id = :id and data_user.user_id = :id and civility.user_id = follow.follower_id  ";
            $stmt = $manager->getConnection()->prepare($rawSql);
            $stmt->bindValue('id', $userPP);
            $stmt->execute();
            $following = $stmt->fetchAll();
        }
  
        if($userPP != NULL){
        $rawSql ="SELECT data_user.link , civility.first_name , civility.name , follow.following_id  FROM  follow , data_user , civility where follow.follower_id = :id and data_user.user_id = :id and civility.user_id = follow.following_id ";
        $stmt = $manager->getConnection()->prepare($rawSql);
        $stmt->bindValue('id', $userPP);
        $stmt->execute();
        $follower = $stmt->fetchAll();
        }
           

        return $this->render('default/index.html.twig', [
            'controller_name' => 'Social',
            'followings' => $following ,
            'followers'=>$follower
        ]);
    }

    /**
     * @Route("/social/civilité", name="civility")
     */
    public function civility(UserInterface $user, ObjectManager $manager, Request $request)
    {
        // ajouter les photos de profil de base et background
        $userPP = $user->getDataUser();
        if($userPP == null){
            $userPP = new DataUser;
            $userPP->setLink("images/resources/pf-img4.jpg")
                   ->setBgLink("images/resources/cover-img.jpg")
                   ->setUser($user);
            $manager->persist($userPP);
            $manager->flush();
            return $this->redirectToRoute('civility');
        }

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
            $civil->setUser($user);
            $manager->persist($civil);
            $manager->flush();
            $this->addFlash('success', 'Vos informations ont bien été enregistré !');
            return $this->redirectToRoute('social');
        }

        return $this->render('default/civility.html.twig', [
            'controller_name' => 'Civilité',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/social/Conditions", name="conditions")
     */
    public function conditions()
    {
        // Test si la civilité est config - Add in all controller fnct
        $civility = $user->getCivility();
        if($civility == null){
        return $this->redirectToRoute('civility');
        }
        
        return $this->render('default/conditions.html.twig', [
            'controller_name' => 'Conditions'
        ]);
    }

}
