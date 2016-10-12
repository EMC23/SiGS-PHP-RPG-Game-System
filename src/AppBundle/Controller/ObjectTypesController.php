<?php

namespace AppBundle\Controller;
use AppBundle\Entity\J17JigsMonsterTypes;
use AppBundle\Entity\J17JigsObjectTypes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ObjectTypesController extends Controller
{
    /**
     * @Route("/object_types/", name="object_types")
     */
    public function listAction($start=0,$max=100,Request $request)
    {
        $em         = $this->get('doctrine.orm.entity_manager');
        $dql        = "SELECT a FROM AppBundle:J17JigsObjectTypes a";
        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );
        return $this->render('AppBundle:Default:J17JigsObjectTypes.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/object_type", name="object_type")
     * @Method({"GET", "POST"})
     */
    public function showAction(Request $request)
    {
        $task           = new J17JigsObjectTypes();
        $id             = $request->get('id');
        $record         = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsObjectTypes")
            ->find($id);

        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $name           = $record->getName();
        $category       = $record->getCategory();
        $description    = $record->getDescription();
        $manTime        = $record->getMantime();
        $level          = $record->getLevel();
        $cellWidth      = $record->getCellWidth();
        $cellHeight     = $record->getCellHeight();
        $numberOfCells  = $record->getNumberOfCells();

        $task->setName($name);
        $task->setCategory($category);
        $task->setDescription($description);
        $task->setManTime($manTime);
        $task->setLevel($level);
        $task->setCellWidth($cellWidth);
        $task->setCellHeight($cellHeight);
        $task->setNumberOfCells($numberOfCells);

        $form = $this->createFormBuilder($task)
            ->add('name', TextType::class)
            ->add('category', TextType::class)
            ->add('description', TextType::class)
            ->add('mantime', TextType::class)
            ->add('level', TextType::class)
            ->add('cellwidth', TextType::class)
            ->add('cellheight', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create ObjectType'))
            ->getForm();
        return $this->render("AppBundle:Default:page.html.twig", array('stuff' => $record, 'form' => $form->createView()));
    }

    /**
     * @Route("/api/update")
     */
    public function saveAction(Request $request)
    {
        foreach ($request->get('data') as $key=>$value){
            $id         = $key;
        }
        $em         = $this->getDoctrine()->getManager();
        $model      = $this->get('objectTypesModel');
        $task       = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsObjectTypes")
            ->find($id);
        if (!$task) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $model->save($request, $task, $em);
        $record = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsObjectTypes")
            ->find($id);
        $response = new Response(json_encode(array('data' => $model->repopulate($record))));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    /**
     * @Route("/api/list", name="emc23_sigs_objectTypes_api")
     */
    public function apiListAction($start=0,$max=1000)
    {
        $em         = $this->get('doctrine.orm.entity_manager');
        $dql        = "SELECT a FROM AppBundle:J17JigsMonsterTypes a";
        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);
        $resource   = $query->getResult();
        $model      = $this->get('MonsterTypesModel');
        $result     = $model->repopulate($resource);

        // create a JSON-response with a 200 status code
        $response   = new Response(json_encode(array('data' => $result)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
