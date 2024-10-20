<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class LocationController extends Controller
{
    public function indexAction()
    {
        // replace this example code with whatever you need
        $this->addFlash('location','Tu estas localizado en Zamora, Spain');
        return $this->render('location/index.html.twig');
            
    }
    public function indexJsonAction()
    {
        // replace this example code with whatever you need
        $response= new Response(json_encode(array('location' =>
            'Tu estas localizado en Valladolid, Spain')));
        $response->headers->set('Content-type', 'application/json');
        return $response;        
    }

    
}