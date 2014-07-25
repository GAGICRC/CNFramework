<?php

namespace gagicrc\BBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('gagicrcBBundle:Default:index.html.twig');
    }
}
