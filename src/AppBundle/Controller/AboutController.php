<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    /**
     * @Route("/about")
     */
    public function showAction()
    {
    //     return new Response("<h1> Home Page</h1>");
    return $this->render('default/about.html.twig');
    }

}

?>