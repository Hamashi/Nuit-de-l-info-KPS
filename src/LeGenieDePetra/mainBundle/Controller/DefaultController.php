<?php

namespace LeGenieDePetra\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LeGenieDePetramainBundle:Default:index.html.twig');
    }
}
