<?php

// src/Acme/HelloBundle/Controller/HelloController.php
namespace AppBundle\Controller;

use AppBundle\Entity\J17JigsHobbits;
use AppBundle\Entity\J17JigsMonsters;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;

class HobbitController extends Controller
{
    /**
     * @param Request $request
     * @Route("/hobbits/", name="hobbits")
     * @Method("GET")
     * @return Response
     */

    public function listAction(Request $request)
    {
        $type='J17JigsHobbits';

            $em = $this->get('doctrine.orm.entity_manager');
            $dql = "SELECT a FROM AppBundle:J17JigsHobbits a";
            $query = $em->createQuery($dql);
            //$paginator = $this->get('knp_paginator');
            //$pagination = $paginator->paginate($query, $this->get($request)->query->get('page', 1)/*page number*/, 30/*limit per page*/);
            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                20/*limit per page*/
            );

        return $this->render('AppBundle:Default:' . $type . '.html.twig', array('pagination' => $pagination, 'type' => $type));
    }

    /**
     * @Route("/hobbit/", name="showHobbit")
     * @Method("GET")
     *
     */
    public function showAction(Request $request)
    {
        //  $task = new J17JigsMonsters();
        $type = 'J17JigsHobbits';
        $id = $request->get('id');
        $record = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsHobbits")
            ->find($id);

        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $health = $record->getHealth();
        $strength = $record->getStrength();
        $intelligence = $record->getIntelligence();
        $xp = $record->getXp();
        $contentment = $record->getContentment();
        $birth = $record->getBirth();
        $faction = $record->getFaction();
        $gid = $record->getGid();
        $owner = $record->getOwner();
        $owner_type = $record->getOwnerType();
        $section = $record->getSection();
        $x = $record->getX();
        $y = $record->getY();
        $grid = $record->getGrid();
        $map = $record->getMap( );
        $status = $record->getStatus();

        $task = new J17JigsHobbits();
        $task->setHealth($health);
        $task->setStrength($strength);
        $task->setIntelligence($intelligence);
        $task->setXp($xp);
        $task->setContentment($contentment);
        $task->setBirth($birth);
        $task->setFaction($faction);
        $task->setGid($gid);
        $task->setOwner($owner);
        $task->setOwnerType($owner_type);
        $task->setSection($section);
        $task->setX($x);
        $task->setY($y);
        $task->setGrid($grid);
        $task->setMap($map);
        $task->setStatus($status);

        $form = $this->createFormBuilder($task)
            ->add('health', TextType::class)
            ->add('strength', TextType::class)
            ->add('intelligence', TextType::class)
            ->add('xp', TextType::class)
            ->add('contentment', TextType::class)
            ->add('birth', TextType::class)
            ->add('faction', TextType::class)
            ->add('gid', TextType::class)
            ->add('owner', TextType::class)
            ->add('owner_type', TextType::class)
            ->add('birth', TextType::class)
            ->add('section', TextType::class)
            ->add('x', TextType::class)
            ->add('y', TextType::class)
            ->add('grid', TextType::class)
            ->add('map', TextType::class)
            ->add('status', TextType::class)
            ->add('save', SubmitType::class)
            ->getForm();
        //     return $this->render("AppBundle:Default:J17JigsMonsters_page.html.twig", array('stuff' => $record));
        return $this->render("AppBundle:Default:page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));
    }

    public function addAction()
    {
        $task = new J17JigsHobbits();
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
