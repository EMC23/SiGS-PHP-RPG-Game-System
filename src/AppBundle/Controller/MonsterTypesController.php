<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\Tools\Pagination\Paginator;

class MonsterTypesController extends Controller
{
    /**
     * @Route("/monstertypes", name="emc23_sigs_monster_types")
     */
    public function indexAction($start=0,$max=100)
    {
        $em             = $this->get('doctrine.orm.entity_manager');
        $dql            = "SELECT a FROM AppBundle:J17JigsMonsterTypes a";
        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);
        $paginator ='';
        $paginator = new Paginator($query, $fetchJoinCollection = true);



        //$monsterTypes = $query->getResult();

        return $this->render('default/J17JigsMonsterTypes.html.twig', array('pagination' => $paginator));
    }
}
