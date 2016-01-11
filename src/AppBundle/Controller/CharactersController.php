<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

// src/Acme/StoreBundle/Controller/DefaultController.php

class CharactersController extends Controller
{
    public function __get($var)
    {
        return $this->var;
    }

    public function indexAction()
    {
        $name = "stuff";

        return $this->render('AppBundle:Default:index.html.twig', array('name' => $name));
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
            //$faction    = $task->getFaction();
            //$gid        = $task->getGid();
            //$task->setName($name);
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

    public function showAction($id,  Request $request)
    {

        $task = new J17JigsCharactors();

        echo $id;

        $record = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsHobbits")
            ->find($id);

        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $name = $record->getName();
        $faction = $record->getFaction();
        $health = $record->getHealth();
        $strength = $record->getStrength();
        $intelligence = $record->getIntelligence();
        // $gid = $record->getGid();
        $owner = $record->getOwner();
        $contentment = $record->getContentment();
        $typeName = $record->getType()->getTypeName();
        //$typeType = $record->getHobbitTypes();
        $task->setName($name);
        $task->setFaction($faction);
        $task->setHealth($health);
        $task->setStrength($strength);
        $task->setIntelligence($intelligence);
        // $task->setGid($gid);
        $task->setOwner($owner);
        $task->setContentment($contentment);
        $form = $this->createFormBuilder($task)
            ->add('name', 'text')
            ->add('faction', 'text')
            ->add('health', 'text')
            ->add('strength', 'text')
            ->add('intelligence', 'text')
            //   ->add('group', 'text')
            ->add('contentment', 'text')
            ->add('save', 'submit')
            ->getForm();
        return $this->render("AppBundle:Default:J17JigsHobbits_page.html.twig", array('typename' => $typeName, 'form' => $form->createView()));
    }

    /**
     * @Route("/characters", name="emc23_sigs_characters")
     */
    public function listAction($start=0,$max=100)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:J17JigsCharacters a";

        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);

        $char    = $query->getResult();

        //$pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*page number*/, 30/*limit per page*/);
         $pagination ="hello";
        //  echo '<pre>';
        //  print_r ($pagination);
        //  echo '</pre>';
        // parameters to template
        return $this->render('default/J17JigsCharacters.html.twig', array('pagination' => $char));
    }
}
