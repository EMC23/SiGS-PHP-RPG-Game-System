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
// src/Acme/StoreBundle/Controller/DefaultController.php

class CharacterController extends Controller
{
    public function __get($var)
    {
        return $this->var;
    }

    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function indexAction()
    {
        $name = "stuff";
        $this->user = $this->getUser();

        if ($this->user != null) {
            return $this->render('AppBundle:Default:index.html.twig', array('name' => $name));
        } else {
            return $this->render('default/home.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            ]);
        }

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
    
    /**
     * @Route("/character", name="character")
     * @Method("GET")
     */
    public function showAction( Request $request)
    {
       // $type=$request->get('type');
        $id=$request->get('id');
        $type = 'J17JigsCharacters';
        $task = new J17JigsCharacters();



        $record = $this->getDoctrine()
            //  ->getRepository('AcmeHelloBundle:J17JigsPlayers')
            ->getRepository("AppBundle:$type")
            ->find($id);

        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        // ... do something, like pass the $product object into a template
        // return $product;
        //   return new Response('product id '.$product->getIdUser());
        //    $faction = $record->getFaction();
        // $image = $product->getImage();
        //    $Posx = $product->getPosx();
        //  $task = new J17JigsCharacters();
//   $task = new $type();

        if ($type == 'J17JigsHobbits') {
            $name = $record->getName();
            $faction = $record->getFaction();
            $health = $record->getHealth();
            $strength = $record->getStrength();
            $intelligence = $record->getIntelligence();
            //    $group          = $record->getGroup();
            $owner = $record->getOwner();
            $contentment = $record->getContentment();

            $task->setName($name);
            $task->setFaction($faction);
            $task->setHealth($health);
            $task->setStrength($strength);
            $task->setIntelligence($intelligence);
            // $task->setGroup($group);
            $task->setOwner($owner);
            $task->setContentment($contentment);

            $form = $this->createFormBuilder($task)
                ->add('name', TextType::class)
                ->add('faction', TextType::class)
                ->add('health', TextType::class)
                ->add('strength', TextType::class)
                ->add('intelligence', TextType::class)
                //   ->add('group', 'text')           
                ->add('contentment', TextType::class)
                ->add('save', SubmitType::class)
                ->getForm();

        }


        if ($type == 'J17JigsPlayers') {
            $name = $record->getName();
            //     $faction        = $record->getFaction();
            $health = $record->getHealth();
            $strength = $record->getStrength();
            $intelligence = $record->getIntelligence();
            //   $group          = $record->getGroup();
            //  $owner          = $record->getOwner();
            //   $contentment    = $record->getContentment();

            $task->setName($name);
            //   $task->setFaction($faction);        
            $task->setHealth($health);
            $task->setStrength($strength);
            $task->setIntelligence($intelligence);
            //  $task->setGroup($group);
            //  $task->setOwner($owner);
            // $task->setContentment($contentment);

            $form = $this->createFormBuilder($task)
                ->add('name', TextType::class)
                //->add('faction', 'text')
                ->add('health', TextType::class)
                ->add('strength', TextType::class)
                ->add('intelligence', TextType::class)
                //   ->add('group', 'text')           
                //    ->add('contentment', 'text')           

                ->add('save', SubmitType::class)
                ->getForm();

        }

        if ($type == 'J17JigsBuildings') {
            $name = $record->getName();
            //     $faction        = $record->getFaction();
            // $health         = $record->getHealth();
            //  $strength       = $record->getStrength();
            //   $intelligence   = $record->getIntelligence();
            //   $group          = $record->getGroup();
            //  $owner          = $record->getOwner();
            //   $contentment    = $record->getContentment();

            $task->setName($name);
            //   $task->setFaction($faction);        
            //       $task->setHealth($health);
            //      $task->setStrength($strength);
            //      $task->setIntelligence($intelligence);
            //  $task->setGroup($group);
            //  $task->setOwner($owner);
            // $task->setContentment($contentment);

            $form = $this->createFormBuilder($task)
                ->add('name', TextType::class)
                //->add('faction', 'text')
                //     ->add('health', 'text')           
                //       ->add('strength', 'text')          
                //    ->add('intelligence', 'text')            
                //   ->add('group', 'text')           
                //    ->add('contentment', 'text')           

                ->add('save', SubmitType::class)
                ->getForm();

        }

        if ($type == 'J17JigsCharacters') {
            $name = $record->getName();
            //     $faction        = $record->getFaction();
            // $health         = $record->getHealth();
            //  $strength       = $record->getStrength();
            //   $intelligence   = $record->getIntelligence();
            //   $group          = $record->getGroup();
            //  $owner          = $record->getOwner();
            //   $contentment    = $record->getContentment();

            $task->setName($name);
            //   $task->setFaction($faction);        
            //       $task->setHealth($health);
            //      $task->setStrength($strength);
            //      $task->setIntelligence($intelligence);
            //  $task->setGroup($group);
            //  $task->setOwner($owner);
            // $task->setContentment($contentment);

            $form = $this->createFormBuilder($task)
                ->add('name', TextType::class)
                //->add('faction', 'text')
                //     ->add('health', 'text')           
                //       ->add('strength', 'text')          
                //    ->add('intelligence', 'text')            
                //   ->add('group', 'text')           
                //    ->add('contentment', 'text')           

                ->add('save', SubmitType::class)
                ->getForm();
        }

        return $this->render("AppBundle:Default:" . $type . "_page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));

    }
////////////////////////////////          

    public function showallusersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p
            FROM AppHelloBundle:J17JigsPlayers p
            WHERE p.id > :id
            ORDER BY p.iduser ASC'
        )->setParameter('id', '1');

        $products = $query->getResult();
        $x = 0;
        $content = '<table>';
        foreach ($products as $record) {

            $content .= $this->renderView(
                'AppBundle:Hello:index.html.twig',
                array('name' => $record->getName(), 'id' => $record->getId())
            );
        }
        $content .= '</table>';
        return new Response($content);
    }

    ///////////////////////////////////////
    public function showGroupsAction()
    {
        $content = "empty";
        return new Response($content);

    }
/////////////////////////////////          

    public function showallusers2Action()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p
						    FROM AppBundle:J17Comprofiler p
						    WHERE p.id > :id
						    ORDER BY p.id ASC'
        )->setParameter('id', '1');

        $products = $query->getResult();
        $x = 0;
        $content = '<table>';
        foreach ($products as $record) {

            $content .= $this->renderView(
                'AppBundle:Default:index3.html.twig',
                array('image' => $record->getAvatar(), 'id' => $record->getId())
            );
        }
        $content .= '</table>';
        return new Response($content);
    }

    ////////////////////////////////////////////////////////////////////////////////////    


    /**
     * @param Request $request
     * @param $type
     * @Route("/characters", name="characters")
     * @Method("GET")
     * @return Response
     */

    public function listAction(Request $request)
    {
        $type = 'J17JigsCharacters';
        print_r($type);
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:J17JigsCharacters a";
        $query = $em->createQuery($dql);
        //$paginator = $this->get('knp_paginator');
        //$pagination = $paginator->paginate($query, $this->get($request)->query->get('page', 1)/*page number*/, 30/*limit per page*/);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('AppBundle:Default:' . $type . '.html.twig', array('pagination' => $pagination, 'type' => $type));
    }
    ///////////////////////////////////////////////////////////////////
    public function showfactionsAction()
    {
        return $this->render('AppBundle:Default:J17JigsFactions_page.html.twig', array('pagination' => $this->faction));
    }
 }