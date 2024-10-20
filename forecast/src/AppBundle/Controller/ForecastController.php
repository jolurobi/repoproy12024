<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



class ForecastController extends Controller
{
    public function indexAction()
    {
        // replace this example code with whatever you need
        return new Response('It\'s freezing cold');
        
    }  
    public function indexParamAction($weather)
    {
        // replace this example code with whatever you need
        return new Response('<html><body>Weather info: It\'s ' . $weather .
                '</body></html>');
        
    } 
    public function index2ParamsAction($weather,$temperature)
    {
        // replace this example code with whatever you need
        return new Response('<html><body>Weather info: It\'s ' . $weather .
                ' and the current temperature is: ' . $temperature . 'ºC</body></html>');
        
    }
    public function indexRequestAction($weather,$temperature,Request $request)
    {
        // replace this example code with whatever you need
        return new Response('<html><body>Weather info in ' .
                $request->query->get("city") . ': It\'s ' . $weather .
                ' and the current temperature is: ' . $temperature . 'ºC</body></html>');
        
    }
}