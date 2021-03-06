<?php

// src/Acme/HelloBundle/Controller/HelloController.php
namespace AppBundle\Controller;

use AppBundle\Entity\J17JigsMonsters;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;

class MonsterController extends Controller
{
    /**
     * @param Request $request
     * @Route("/monsters/", name="monsters")
     * @Method("GET")
     * @return Response
     */
    public function listAction(Request $request)
    {
        $type='J17JigsMonsters';
            $em = $this->get('doctrine.orm.entity_manager');
            $dql = "SELECT a FROM AppBundle:J17JigsMonsters a";
            $query = $em->createQuery($dql);
            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                10/*limit per page*/
            );
        return $this->render('AppBundle:Default:' . $type . '.html.twig', array('pagination' => $pagination, 'type' => $type));
    }

    /**
     * @Route("/monster/", name="showMonster")
     * @Method("GET")
     *
     */
    public function showAction(Request $request)
    {
        $type = 'J17JigsMonsters';
        $id = $request->get('id');
        $record = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsMonsters")
            ->find($id);
        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }

        $status = $record->getStatus();
        $health = $record->getHealth();
        $strength= $record->getStrength();
        $intelligence = $record->getIntelligence();
        $attack = $record->getAttack();
        $defence = $record->getDefence();
        $map = $record->getMap();
        $grid = $record->getGrid();
        $x = $record->getX();
        $y = $record->getY();
        $task = new J17JigsMonsters();

        $task->setStatus($status);
        $task->setHealth($health);
        $task->setStrength($strength);
        $task->setIntelligence($intelligence);
        $task->setAttack($attack);
        $task->setDefence($defence);
        $task->setMap($map);
        $task->setGrid($grid);
        $task->setX($x);
        $task->setY($y);

        $form = $this->createFormBuilder($task)
            ->add('health', TextType::class)
            ->add('strength', TextType::class)
            ->add('intelligence', TextType::class)
            ->add('attack', TextType::class)
            ->add('defence', TextType::class)
            ->add('map', TextType::class)
            ->add('grid', TextType::class)
            ->add('x', TextType::class)
            ->add('y', TextType::class)
            ->add('save', SubmitType::class)
            ->getForm();
        //     return $this->render("AppBundle:Default:J17JigsMonsters_page.html.twig", array('stuff' => $record));
        return $this->render("AppBundle:Default:page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));
    }


    public function addAction()
    {
        $task = new J17JigsMonsters();
        // $product->setId('19');
        //  $product->setNameId('1');
        //  $product->setPublished('1');
        //    $em             = $this->getDoctrine()->getManager();
        //    $em->persist($product);
        //    $em->flush();

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
