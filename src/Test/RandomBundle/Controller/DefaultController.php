<?php

namespace Test\RandomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestRandomBundle:Default:index.html.twig');
    }
}
