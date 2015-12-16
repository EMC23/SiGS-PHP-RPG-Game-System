<?php

// src/Acme/SigsBundle/Controller/HelloController.php
namespace Emc23\SigsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($name)
    {
       /* return $this->render(
            'AcmeSigsBundle:Hello:index.html.twig',
            array('name' => $name)
        );
*/
        // render a PHP template instead
        // return $this->render(
        //     'AcmeSigsBundle:Hello:index.html.php',
        //     array('name' => $name)
        // );
    }
}
