<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class MainController extends Controller
{
    /**
    * @Route("/")
    */
    public function homePage()
    {

        return $this->render('home.html.twig', array());
    }
}
