<?php

namespace Emc23\SigsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Emc23\SigsBundle\Entity\J17JigsHobbitTypes;

use Symfony\Component\Security\Core\Exception\InvalidArgumentException;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;

// src/Acme/StoreBundle/Controller/DefaultController.php


class HobbitTypesController extends Controller
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
        return $this->render("Emc23SigsBundle:Default:" . $type . "_page.html.twig", array('form' => $form->createView(), 'type' => $type));
    }

    public function showAction($id, Request $request)
    {
        $task = new J17JigsHobbitTypes();
        $record = $this->getDoctrine()
            //  ->getRepository('AcmeSigsBundle:J17JigsPlayers')
            ->getRepository("Emc23SigsBundle:J17JigsHobbitTypes")
            ->find($id);
        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $id                     = $record->getId();
        $type                   = $record->getTypeName();
        $avatar                 = $record->getAvatar();
        $cellWidth              = $record->getCellwidth();
        $cellHeight             = $record->getCellheight();
        $numberOfCells          = $record->getNumberofcells();

        $task->setTypeName($type);
        $task->setAvatar($avatar);
        $task->setCellWidth($cellWidth);
        $task->setCellHeight($avatar);
        $task->setCellHeight($cellHeight);
        $task->setNumberOfCells($numberOfCells);
        //);
        $form = $this->createFormBuilder($task)
            ->add('typename', 'text')
            ->add('avatar', 'text')
            ->add('cellwidth', 'text')
            ->add('cellheight', 'text')
            ->add('NumberOfCells', 'text')
            ->add('save', 'submit')
            ->getForm();
       return $this->render("Emc23SigsBundle:Default:J17JigsHobbitTypes_page.html.twig", array('stuff' => $record, 'form' => $form->createView()));
       }

        // Acme\MainBundle\Controller\ArticleController.php

    public function listAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM Emc23SigsBundle:J17JigsHobbitTypes a";
        $query = $em->createQuery($dql);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*page number*/, 30/*limit per page*/);
        return $this->render('Emc23SigsBundle:Default:J17JigsHobbitTypes.html.twig', array('pagination' => $pagination));
    }
}
