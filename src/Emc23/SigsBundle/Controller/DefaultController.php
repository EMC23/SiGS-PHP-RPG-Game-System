<?php
namespace Emc23\SigsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query;

class DefaultController extends Controller
{
    public function __get($var)
    {
        return $this->var;
    }

    public function indexAction()
    {
        $name = "stuff";
        return $this->render('Emc23SigsBundle:Default:index.html.twig', array('name' => $name));
    }

    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
