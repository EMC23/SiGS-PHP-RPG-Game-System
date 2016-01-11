<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MonstersController extends Controller
{
    /**
     * @Route("/monsters", name="emc23_sigs_monsters")
     */
    public function indexAction($start=0,$max=100)
    {
        $em         = $this->get('doctrine.orm.entity_manager');
        $dql        = "SELECT a FROM AppBundle:J17JigsMonsters a ";
        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);

        $monsters = $query->getResult();

        foreach ($monsters as $monster) {
            $monster->name          = $monster->getType()->getname();
            $monster->cellwidth     = $monster->getType()->getCellwidth();
            $monster->cellheight    = $monster->getType()->getCellheight();
        }
        return $this->render('default/J17JigsMonsters.html.twig', array('pagination' => $monsters));
    }
}
