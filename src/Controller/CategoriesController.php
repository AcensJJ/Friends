<?php

namespace App\Controller;

use App\Entity\Hobbies;
use App\Entity\Activity;
use App\Entity\Category;
use App\Repository\HobbiesRepository;
use App\Repository\ActivityRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoriesController extends AbstractController
{
    /**
     * @Route("/social/categories", name="categories")
     */
    public function categories(ObjectManager $manager , Request $request)
    {

        $repo = $this->getDoctrine()->getRepository(Category::class);
        $categories = $repo->findAll();
        $i = 1;

        return $this->render('categories/categories.html.twig', [
            'controller_name' => 'Categories',
            'categories' => $categories,
            'i' => $i
        ]);
    }


    /**
     * @Route("/social/categories/{id}", name="souscategories")
     */
    public function souscategories($id = null ,ObjectManager $manager , Request $request, UserInterface $user, ActivityRepository $repo)
    {  
        $activity = $repo->findBy(array('category' => $id), array('name' => 'ASC'));

        return $this->render('categories/activity.html.twig', [
            'controller_name' => 'Activités',
            'activity' => $activity,
            'i' => '0',
        ]);
    }

    /**
     * Permet d'avoir ou ne plus avoir l'activité
     *
     * @Route("/social/jquery/activity/{id}", name="activity_change")
     * 
     * @param Activity $activity
     * @param ObjectManager $manager
     * @param UserInterface $user
     * @return Response
     */
    public function activity(Activity $activity, ObjectManager $manager, UserInterface $user) : Response
    {
        if($activity->isHobbyByUser($user)) {
            $idAct = $activity->getId();
            $idUser = $user->getId();
            $rawSql ="DELETE FROM hobbies WHERE user_id = " .$idUser. " and activity_id = " .$idAct. "";
            $stmt = $manager->getConnection()->prepare($rawSql);
            $stmt->execute();

            return $this->json([
                'code' => 200, 
                'message' => 'Activité enlevée'
                ], 200);
        }
        
        $hobby = new Hobbies();
        $hobby->setActivity($activity)
              ->setUser($user);
        
        $manager->persist($hobby);
        $manager->flush();
        return $this->json([
            'code' => 200, 
            'message' => 'Activité ajoutée']
            , 200);
    }

}
