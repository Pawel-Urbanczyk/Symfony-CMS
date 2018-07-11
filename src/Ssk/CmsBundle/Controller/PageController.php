<?php

namespace Ssk\CmsBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller{

    public function indexAction(){

        return $this->render('SskCmsBundle:Page:index.html.twig');

    }

    public function aboutAction(){

        return $this->render('SskCmsBundle:Page:about.html.twig');

    }

}

?>