<?php

namespace StudentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
	public function welcomeAction()

    { 
   return $this->render('StudentBundle:Default:welcome.html.twig');
    }
}
