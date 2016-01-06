<?php

namespace Emc23\SigsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Emc23\SigsBundle\Entity\J17JigsAwards;
use Symfony\Component\HttpFoundation\Response;
use Emc23\SigsBundle\Model\Jigs;
use Emc23\SigsBundle\Entity\J17JigsCharacters;
use Emc23\SigsBundle\Entity\J17JigsPlayers;
use Emc23\SigsBundle\Entity\J17JigsBuildings;
use Emc23\SigsBundle\Entity\J17JigsHobbits;
use Emc23\SigsBundle\Entity\Mudnames;
use Symfony\Component\Security\Core\Exception\InvalidArgumentException;
use Emc23\SigsBundle\JigsFactory;


use Doctrine\ORM\Tools\Pagination\Paginator;

//use Emc23\SigsBundle\Entity\J17JigsFactions;
//   use Emc23\SigsBundle\Entity\J17JUsergroups;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;

// src/Acme/StoreBundle/Controller/DefaultController.php

class HobbitsController extends Controller
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
        // $product->setNameId('1');
        // $product->setPublished('1');
        // $em             = $this->getDoctrine()->getManager();
        // $em->persist($product);
        // $em->flush();
        return new Response('Created product id ' . $product->getId());
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function newAction($type, Request $request)
    {
        $em     = $this->getDoctrine()->getManager();
        $jigs   = $this->get('my_JigsFactory');

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
            $name           = $task->getName();
            $faction        = $task->getFaction();
            $contentment    = $task->getContentment();
            $health         = $task->getHealth();
            $intelligence   = $task->getIntelligence();
            $strength       = $task->getStrength();
            $gid            = $task->getGid();
            $owner          = $task->getOwner();

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

    public function showAction($id,  Request $request)
    {
        $task       = new J17JigsHobbits();
        $record     = $this->getDoctrine()
            ->getRepository("Emc23SigsBundle:J17JigsHobbits")
            ->find($id);

        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $name           = $record->getName();
        $faction        = $record->getFaction();
        $health         = $record->getHealth();
        $strength       = $record->getStrength();
        $intelligence   = $record->getIntelligence();
        $owner          = $record->getOwner();
        $contentment    = $record->getContentment();
        $typeName       = $record->getType()->getTypeName();
        $task->setName($name);
        $task->setFaction($faction);
        $task->setHealth($health);
        $task->setStrength($strength);
        $task->setIntelligence($intelligence);
        $task->setOwner($owner);
        $task->setContentment($contentment);
        $form = $this->createFormBuilder($task)
            ->add('name', 'text')
            ->add('faction', 'text')
            ->add('health', 'text')
            ->add('strength', 'text')
            ->add('intelligence', 'text')
            ->add('contentment', 'text')
            ->add('save', 'submit')
            ->getForm();
        return $this->render("Emc23SigsBundle:Default:J17JigsHobbits_page.html.twig", array('typename' => $typeName, 'form' => $form->createView()));
    }

    public function listAction($start=0,$max=100)
    {
        $em         = $this->get('doctrine.orm.entity_manager');
        $dql        = "SELECT a,b FROM Emc23SigsBundle:J17JigsHobbits a JOIN a.type b";
        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);
        $hobbits    = $query->getResult();
        return $this->render('Emc23SigsBundle:Default:J17JigsHobbits.html.twig', array('pagination' => $hobbits));
    }
}
