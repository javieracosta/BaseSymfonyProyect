<?php

namespace MyCom\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MyComPlatformBundle:Default:index.html.twig', array('name' => $name));
    }
}
