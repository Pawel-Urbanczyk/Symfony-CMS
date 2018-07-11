<?php

namespace Ssk\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SskCmsBundle:Default:index.html.twig', array('name' => $name));
    }
}
