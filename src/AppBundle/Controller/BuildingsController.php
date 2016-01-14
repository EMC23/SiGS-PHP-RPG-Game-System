<?php

namespace AppBundle\Controller;
use AppBundle\Entity\J17JigsBuildings;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * @Route("/buildings")
 */
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

    /**
     * @Route("/{id}",requirements={"id" = "\d+"}, name="emc23_sigs_building")
     * @Method({"GET", "POST"})
     */
    public function showAction($id, Request $request)
    {

        $type = 'J17JigsBuildings';
        $task = new J17JigsBuildings();
        $record = $this->getDoctrine()
            //  ->getRepository('AcmeSigsBundle:J17JigsPlayers')
            ->getRepository("AppBundle:$type")
            ->find($id);
        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
            $name = $record->getName();

            $health = $record->getHealth();


           // $gid = $record->getGid();
            $owner = $record->getOwner();


            $task->setName($name);

            $task->setHealth($health);


           // $task->setGid($gid);
            $task->setOwner($owner);


            $form = $this->createFormBuilder($task)
                ->add('name',  TextType::class)

                ->add('health',  TextType::class)

             //   ->add('group', 'text')

             ->add('save', SubmitType::class, array('label' => 'Create Task'))
                ->getForm();

        return $this->render("default/J17JigsBuildings_page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));
    }

    /**
     * @Route("/", name="emc23_sigs_buildings")
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
