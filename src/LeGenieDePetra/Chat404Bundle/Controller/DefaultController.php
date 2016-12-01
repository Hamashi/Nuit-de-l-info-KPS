<?php

namespace LeGenieDePetra\Chat404Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LeGenieDePetraChat404Bundle:Default:index.html.twig');
    }
}
