<?php

namespace AppBundle\Controller;
use AppBundle\Entity\J17JigsMonsterTypes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * @Route("/monstertypes")
 */
class MonsterTypesController extends Controller
{
    /**
     * @Route("/", name="emc23_sigs_monster_types")
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

    /**
     * @Route("/{id}",requirements={"id" = "\d+"}, defaults={"id" = 1}), name="emc23_sigs_monster_type")
     * @Method({"GET", "POST"})
     */
    public function showAction($id)
    {
        $type = 'J17JigsMonstertypes';
        $task = new J17JigsMonsterTypes();
        $record = $this->getDoctrine()
            //  ->getRepository('AcmeSigsBundle:J17JigsPlayers')
            ->getRepository("AppBundle:$type")
            ->find($id);

        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }

        $name = $record->getName();
        $health = $record->getHealth();
        $strength = $record->getStrength();
        $intelligence = $record->getIntelligence();
        $task->setHealth($health);
        $task->setStrength($strength);
        $task->setIntelligence($intelligence);

        $form = $this->createFormBuilder($task)
            ->add('name', TextType::class)
            ->add('health',TextType::class)
            ->add('strength',TextType::class)
            ->add('intelligence',TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        return $this->render("default/J17JigsMonsterTypes_page.html.twig", array('stuff' => $record, 'form' => $form->createView()));

    }
}
