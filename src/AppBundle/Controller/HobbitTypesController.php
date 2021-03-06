<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\J17JigsHobbitTypes;
use Symfony\Component\Security\Core\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class HobbitTypesController extends Controller
{
     /**
     * @Route("/hobbit_types", name="hobbit_types")
     * @Method({"GET", "POST"})
     */
    public function listAction($start=0, $max=100, Request $request)
    {
        $em         = $this->get('doctrine.orm.entity_manager');
        $dql        = "SELECT a FROM AppBundle:J17JigsHobbitTypes a";
        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );
        return $this->render('AppBundle:Default:J17JigsHobbitTypes.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/hobbit_type",name="hobbit_type")
     * @Method({"GET", "POST"})
     */
    public function showAction(Request $request)
    {
        $task = new J17JigsHobbitTypes();
        $id = $request->get('id');
        $record = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsHobbitTypes")
            ->find($id);
        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $id                     = $record->getId();
        $type                   = $record->getTypeName();
        $avatar                 = $record->getAvatar();
        $cellWidth              = $record->getCellwidth();
        $cellHeight             = $record->getCellheight();
        $numberOfCells          = $record->getNumberOfCells();

        $task->setTypeName($type);
        $task->setAvatar($avatar);
        $task->setCellWidth($cellWidth);
        $task->setCellHeight($avatar);
        $task->setCellHeight($cellHeight);
        $task->setNumberOfCells($numberOfCells);
        //);
        $form = $this->createFormBuilder($task)
            ->add('typename', TextType::class)
            ->add('avatar', TextType::class)
            ->add('cellWidth', TextType::class)
            ->add('cellHeight', TextType::class)
            ->add('numberOfCells', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();
        return $this->render("AppBundle:Default:page.html.twig", array('stuff' => $record, 'form' => $form->createView()));
    }


    public function addAction()
    {
        $task = new J17JigsHobbitType();
        //$product = new J17JigsAwards();
        // $product->setId('19');
        // $product->setNameId('1');
        // $product->setPublished('1');
        // $em             = $this->getDoctrine()->getManager();
        // $em->persist($product);
        // $em->flush();
        return new Response('Created product id ' . $task->getId());
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function newAction($type, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jigs = $this->get('my_JigsFactory');

            $task = new J17JigsHobbitType();
            //    $jigs           = new Jigs();
            $file = (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random';
            $name = Mudnames::generate_name_from($file);
            $task->setName($name);
            $hobbit = $jigs->generateHobbit();
            $task->setFaction($hobbit['faction_number']);
            $task->setGid($hobbit['Gid']);
            $task->setHealth($hobbit['health']);
            $task->setStrength($hobbit['strength']);
            $task->setIntelligence($hobbit['intelligence']);
            $task->setOwner($hobbit['owner']);
            $task->setContentment($hobbit['contentment']);
            $form = $this->createFormBuilder($task)
                ->add('name')
                ->add('faction')
                ->add('health')
                ->add('strength')
                ->add('intelligence')
                ->add('gid')
                ->add('owner')
                ->add('contentment')
                ->add('save', 'submit')
                ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {

            //$record = $form->getData();
            $name = $task->getName();
            $faction = $task->getFaction();
            $contentment = $task->getContentment();
            $health = $task->getHealth();
            $intelligence = $task->getIntelligence();
            $strength = $task->getStrength();
            $gid = $task->getGid();
            $owner = $task->getOwner();
            //$faction    = $task->getFaction();
            //$gid        = $task->getGid();
            $task->setName($name);
            $task->setFaction($faction);
            $task->setHealth($health);
            $task->setStrength($strength);
            $task->setIntelligence($intelligence);
            $task->setContentment($contentment);
            $task->setGid($gid);
            $task->setOwner($owner);
            $em->persist($task);
            $em->flush();

            return $this->redirect($this->generateUrl('task_success'));
        }
        return $this->render("AppBundle:Default:" . $type . "_page.html.twig", array('form' => $form->createView(), 'type' => $type));
    }

}
