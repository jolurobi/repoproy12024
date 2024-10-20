<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class TemperatureController extends Controller
{
    public function getAction($id) {
        if ($id == null || $id != 1) {
            throw $this->createNotFoundException ('El registro buscado no existe');
        } else {
            return new Response('Register ' . $id);
        }
    }
}