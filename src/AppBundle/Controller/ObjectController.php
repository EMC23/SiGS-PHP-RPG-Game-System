<?php

// src/Acme/HelloBundle/Controller/HelloController.php
namespace AppBundle\Controller;

use AppBundle\Entity\J17JigsObjects;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;

class ObjectController extends Controller
{
    /**
     * @param Request $request
     * @Route("/objects/", name="objects")
     * @Method("GET")
     * @return Response
     */
    public function listAction(Request $request)
    {
        $type = 'J17JigsObjects';
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:J17JigsObjects a";
        $query = $em->createQuery($dql);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );
        return $this->render('AppBundle:Default:' . $type . '.html.twig', array('pagination' => $pagination, 'type' => $type));
    }

    /**
     * @Route("/object/", name="showObject")
     * @Method("GET")
     *
     */
    public function showAction(Request $request)
    {
        $type = 'J17JigsObjects';
        $id = $request->get('id');
        $record = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsObjects")
            ->find($id);
        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $task = new J17JigsObjects();
        $player_id = $record->getPlayerId();
        $type = $record->getType();
        $location = $record->getLocation();
        $task->setId($id);
        $task->setPlayerId($player_id);
        //$task->setType($type);
        $task->setLocation($location);

        $form = $this->createFormBuilder($task)
            ->add('id', TextType::class)
            ->add('playerId', TextType::class)
            ->add('type', TextType::class)
            ->add('location', TextType::class)
            ->add('save', SubmitType::class)
            ->getForm();
        return $this->render("AppBundle:Default:page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));
    }

    public function addAction()
    {
        $task = new J17JigsObjects();
        return new Response('Created product id ' . $product->getId());
    }

    public function newAction($type, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jigs = $this->get('my_JigsFactory');

        $task = new J17JigsHobbits();
        //$jigs           = new Jigs();
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
            $faction = $task->getFaction();
            $contentment = $task->getContentment();
            $health = $task->getHealth();
            $intelligence = $task->getIntelligence();
            $strength = $task->getStrength();
            $gid = $task->getGid();
            $owner = $task->getOwner();
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
