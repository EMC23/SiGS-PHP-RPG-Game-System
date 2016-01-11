<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BuildingsController extends Controller
{
    public function indexAction()
    {
        $name = "stuff";

        return $this->render('AppBundle:Default:index.html.twig', array('name' => $name));
    }

    public function addAction()
    {
        $task = new J17JigsCharacters();
        $product = new J17JigsAwards();
        return new Response('Created product id ' . $product->getId());
    }

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
        return $this->render("AppBundle:Default:" . $type . "_page.html.twig", array('form' => $form->createView(), 'type' => $type));
    }


    public function showAction($id, $type, Request $request)
    {

        if ($type == 'J17JigsCharacters') {
            $task = new J17JigsCharacters();
        }
        if ($type == 'J17JigsPlayers') {
            $task = new J17JigsPlayers();
        }
        if ($type == 'J17JigsBuildings') {
            $task = new J17JigsBuildings();
        }
        if ($type == 'J17JigsHobbits') {
            $task = new J17JigsHobbits();
        }
        $record = $this->getDoctrine()
            //  ->getRepository('AcmeSigsBundle:J17JigsPlayers')
            ->getRepository("AppBundle:$type")
            ->find($id);
        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        if ($type == 'J17JigsHobbits') {
            $name = $record->getName();
            $faction = $record->getFaction();
            $health = $record->getHealth();
            $strength = $record->getStrength();
            $intelligence = $record->getIntelligence();
           // $gid = $record->getGid();
            $owner = $record->getOwner();
            $contentment = $record->getContentment();

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

        }
        return $this->render("AppBundle:Default:" . $type . "_page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));
    }

    /**
     * @Route("/buildings", name="emc23_sigs_buildings")
     */

    public function listAction($start=0,$max=100)
    {

        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:J17JigsBuildings a";
        $query = $em->createQuery($dql);
        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);
        $buildings    = $query->getResult();
        //$pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*page number*/, 30/*limit per page*/);
        // $pagination ="hello";

        return $this->render('default/J17JigsBuildings.html.twig', array('pagination' => $buildings));
    }
}
