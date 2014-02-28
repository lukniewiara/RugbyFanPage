<?php

namespace lukniewiara\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('lukniewiaraNewsBundle:Default:index.html.twig', array('name' => $name));
    }
}
