<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\J17JigsAwards;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Model\Jigs;
use AppBundle\Entity\J17JigsCharacters;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\J17JigsPlayers;
use AppBundle\Entity\J17JigsBuildings;
use AppBundle\Entity\J17JigsHobbits;       
use AppBundle\Entity\Mudnames;       
use Symfony\Component\Security\Core\Exception\InvalidArgumentException;
use AppBundle\JigsFactory;
//  use AppBundle\Entity\J17JigsFactions;
//  use AppBundle\Entity\J17JUsergroups;
use Doctrine\ORM\Query;


class BuildingController extends Controller
{
    public function __get($var)
    {
        return $this->var;
    }
    /**
     * @param Request $request
     * @Route("/buildings", name="buildings")
     * @Method("GET")
     * @return Response
     */
    public function listAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:J17JigsBuildings a";
        $query = $em->createQuery($dql);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('AppBundle:Default:J17JigsBuildings.html.twig', array('pagination' => $pagination, 'type' => 'J17JigsBuildings'));
    }

    /**
     * @Route("/building", name="building")
     * @Method("GET")
     */
    public function showAction( Request $request)
    {
        $id = $request->get('id');
        $task = new J17JigsBuildings();
        $record = $this->getDoctrine()
            //  ->getRepository('AcmeHelloBundle:J17JigsPlayers')
            ->getRepository("AppBundle:J17JigsBuildings")
            ->find($id);
        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $name = $record->getName();
        $grid = $record->getGrid();
        $posX = $record->getPosX();
        $posY = $record->getPosY();
        $level = $record->getLevel();
        $comment = $record->getComment();
        $protection = $record->getProtection();
        $cash = $record->getCash();

        $task->setName($name);
        $task->setGrid($grid);
        $task->setPosX($posX);
        $task->setPosY($posY);
        $task->setLevel($level);
        $task->setComment($comment);
        $task->setProtection($protection);
        $task->setCash($cash);

        $form = $this->createFormBuilder($task)
            ->add('name', TextType::class)
            ->add('grid', TextType::class)
            ->add('posX', TextType::class)
            ->add('posY', TextType::class)
            ->add('level', TextType::class)
            ->add('comment', TextType::class)
            ->add('protection', TextType::class)
            ->add('cash', TextType::class)

            ->add('save', SubmitType::class)
            ->getForm();


        return $this->render("AppBundle:Default:J17JigsBuildings_page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => 'J17JigsBuildings'));

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

        if ($type == 'J17JigsPlayers') {

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
