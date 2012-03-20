<?php

namespace MyCom\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MyComPlatformBundle:Default:index.html.twig');
    }
}
