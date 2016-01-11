<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HobbitsController extends Controller
{
    /**
     * @Route("/hobbits", name="emc23_sigs_hobbits")
     */
    public function indexAction($start=0,$max=100)
    {
        $em         = $this->get('doctrine.orm.entity_manager');
        $dql        = "SELECT a FROM AppBundle:J17JigsHobbits a";
        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);
        $hobbits    = $query->getResult();

        foreach ($hobbits as $hobbit) {
            $hobbit->cellwidth     = $hobbit->getType()->getCellwidth();
            $hobbit->cellheight    = $hobbit->getType()->getCellheight();
        }

        return $this->render('default/J17JigsHobbits.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'pagination' => $hobbits
        ]);
    }
}
