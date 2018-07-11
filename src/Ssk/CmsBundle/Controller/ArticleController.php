<?php

namespace Ssk\CmsBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller{

    public function displayAction($id){

        return $this->render('SskCmsBundle:Article:display.html.twig')

    }

}

?>