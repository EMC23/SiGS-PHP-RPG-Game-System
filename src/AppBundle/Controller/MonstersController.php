<?php

namespace AppBundle\Controller;
use AppBundle\Entity\J17JigsMonsterTypes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * @Route("/monsters")
 */

class MonstersController extends Controller
{
    /**
     * @Route("/", name="emc23_sigs_monsters")
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



    /**
     * @Route("/{id}",requirements={"id" = "\d+"}, defaults={"id" = 1}), name="emc23_sigs_monster")
     * @Method({"GET", "POST"})
     */
    public function showAction($id, Request $request)
    {
        $type = 'J17JigsMonsters';
        $task = new J17JigsMonsterTypes();
        $record = $this->getDoctrine()
            //  ->getRepository('AcmeSigsBundle:J17JigsPlayers')
            ->getRepository("AppBundle:$type")
            ->find($id);

        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $name = $record->getType()->getname();
        $health = $record->getHealth();
        $strength = $record->getStrength();
        $intelligence = $record->getIntelligence();
        //$gid = $record->getGid();

        $task->setName($name);

        $task->setHealth($health);
        $task->setStrength($strength);
        $task->setIntelligence($intelligence);

        $form = $this->createFormBuilder($task)
            ->add('name', TextType::class)

            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        return $this->render("default/J17JigsMonsters_page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));

    }






}
