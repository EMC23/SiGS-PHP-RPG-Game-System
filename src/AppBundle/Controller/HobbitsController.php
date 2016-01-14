<?php

namespace AppBundle\Controller;
use AppBundle\Entity\J17JigsHobbitTypes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * @Route("/hobbits")
 */
class HobbitsController extends Controller
{
    /**
     * @Route("/", name="emc23_sigs_hobbits")
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

    /**
     * @Route("/{id}",requirements={"id" = "\d+"}, name="emc23_sigs_hobbit")
     * @Method({"GET", "POST"})
     */
    public function showAction($id, Request $request)
    {
        $task = new J17JigsHobbitTypes();
        $record = $this->getDoctrine()
            //  ->getRepository('AcmeSigsBundle:J17JigsPlayers')
            ->getRepository("AppBundle:J17JigsHobbits")
            ->find($id);
        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $id                     = $record->getId();
        $type                   = $record->getType()->getTypeName();

        $cellWidth              = $record->getType()->getCellwidth();
        $cellHeight             = $record->getType()->getCellheight();
        $numberOfCells          = $record->getType()->getNumberofcells();

        $task->setTypeName($type);
        //$task->setAvatar($avatar);
        $task->setCellWidth($cellWidth);
        $task->setCellHeight($cellHeight);
        $task->setNumberOfCells($numberOfCells);
        //);
        $form = $this->createFormBuilder($task)
            ->add('typename', TextType::class)
            ->add('avatar', TextType::class)
            ->add('cellwidth', TextType::class)
            ->add('cellheight', TextType::class)
            ->add('NumberOfCells', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();
        return $this->render("default/J17JigsHobbits_page.html.twig", array('stuff' => $record, 'form' => $form->createView()));
    }
}
