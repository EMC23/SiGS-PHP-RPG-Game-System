<?php

// src/Acme/HelloBundle/Controller/HelloController.php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    /**
 * @Route("/more", name="more")
 * @Method("GET")
 */
    public function indexAction($name)
    {
       /* return $this->render(
            'AcmeHelloBundle:Hello:index.html.twig',
            array('name' => $name)
        );
*/
        // render a PHP template instead
         return $this->render(
             'AcmeHelloBundle:Hello:index.html.php',
             array('name' => $name)
         );
    }
}
