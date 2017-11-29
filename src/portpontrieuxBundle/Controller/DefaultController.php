<?php

namespace portpontrieuxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('portpontrieuxBundle:Default:index.html.twig');
    }

    
}
