<?php

namespace MyCom\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        //, array('name' => $name)
        return $this->render('MyComAdminBundle:Default:index.html.php');
    }
}
