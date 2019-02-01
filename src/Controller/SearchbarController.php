<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ActivityRepository;
use App\Entity\Civility;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

class SearchbarController extends AbstractController
{
    /**
     * @Route("social/search/", name="search")
     */
    public function search(Request $request , ObjectManager $manager )
    { 
        $search = $request->query->get('word');
        $req = " '$search%'  ";
        $rawSql ="SELECT name ,first_name ,link FROM civility , data_user  WHERE  data_user.id = civility.id AND name like " .$req. " or first_name like " .$req. " order by name asc ";   
        $stmt = $manager->getConnection()->prepare($rawSql);
        $stmt->execute();
        $research = $stmt->fetchAll();

        return $this->render('searchbar/index.html.twig', [
            'controller_name' => 'search',
            'research' => $research,
            'search' => $search,
            'request' => $request,
        ]);
    }

}
