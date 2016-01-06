<?php

namespace Emc23\SigsBundle\Controller;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Emc23\SigsBundle\Entity\J17JigsAwards;
use Symfony\Component\HttpFoundation\Response;
use Emc23\SigsBundle\Model\Jigs;
use Emc23\SigsBundle\Entity\J17JigsCharacters;
use Emc23\SigsBundle\Entity\J17JigsGroups;
use Emc23\SigsBundle\Entity\J17JigsHobbits;
use Emc23\SigsBundle\Entity\Mudnames;
use Symfony\Component\Security\Core\Exception\InvalidArgumentException;
use Emc23\SigsBundle\JigsFactory;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;


class GroupsController extends Controller
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
        $task = new J17JigsCharacters();
        $product = new J17JigsAwards();
        // $product->setId('19');
        //  $product->setNameId('1');
        //  $product->setPublished('1');
        //    $em             = $this->getDoctrine()->getManager();
        //    $em->persist($product);
        //    $em->flush();

        return new Response('Created product id ' . $product->getId());
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function newAction($type, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $jigs = $this->get('my_JigsFactory');

        if ($type == 'J17JigsHobbits') {

            $task = new J17JigsHobbits();
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
        }

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
        $type = 'J17JigsGroups';
        $task = new J17JigsGroups();
        $record = $this->getDoctrine()
            ->getRepository("Emc23SigsBundle:J17JigsGroups")
            ->find($id);
        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $captain = $record->getCaptain();
        // $task->setGid($gid);
        $task->setCaptain($captain);
        $form = $this->createFormBuilder($task)
                ->add('captain', 'text')
                ->add('save', 'submit')
                ->getForm();

        return $this->render("Emc23SigsBundle:Default:J17JigsGroups_page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));
    }

    public function listAction()
    {
        $em         = $this->get('doctrine.orm.entity_manager');
        $dql        = "SELECT a FROM Emc23SigsBundle:J17JigsGroups a";
        $query      = $em->createQuery($dql);
        $other      = new Paginator($query, $fetchJoinCollection = true);
        $other->setUseOutputWalkers(true);
        //$paginator = $this->get('knp_paginator');
       // $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*page number*/, 30/*limit per page*/);
        $c          = count($other);

        return $this->render('Emc23SigsBundle:Default:J17JigsGroups.html.twig', array('pagination' => $other));
    }
    /**
     * (Add this method into your class)
     *
     * @return string String representation of this class
     */
    public function __toString()
    {
        return $this->name;
    }
}
