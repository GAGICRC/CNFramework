<?php

namespace gagicrc\ABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('gagicrcABundle:Default:index.html.twig');
    }
}
