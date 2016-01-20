<?php

namespace AppBundle\Controller;
use AppBundle\Entity\J17JigsCharacters;
use AppBundle\Entity\J17JigsPlayers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\Query;


/**
 * @Route("/players")
 */
class PlayersController extends Controller
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
        return new Response('Created product id ' . $product->getId());
    }

    /**
     * @Route("/api/update")
     */
    public function saveAction(Request $request)
    {
        foreach ($request->get('data') as $key=>$value){
            $id         = $key;
        }
        $em         = $this->getDoctrine()->getManager();
        $model      = $this->get('playerModel');
        $task       = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsPlayers")
            ->find($id);
        if (!$task) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $model->save($request, $task, $em);

        $record = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsPlayers")
            ->find($id);

        $response = new Response(json_encode(array('data' => $model->repopulate($record))));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/{id}",requirements={"id" = "\d+"}, name="emc23_sigs_player")
     * @Method({"GET", "POST"})
     */
    public function showAction($id, Request $request)
    {
        $type = 'J17JigsPlayers';
        $task = new J17JigsPlayers();
        $record = $this->getDoctrine()
            //  ->getRepository('AcmeSigsBundle:J17JigsPlayers')
            ->getRepository("AppBundle:$type")
            ->find($id);

        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
            $name = $record->getName();
            //$faction = $record->getFaction();
            $health = $record->getHealth();
            $strength = $record->getStrength();
            $intelligence = $record->getIntelligence();
            //$gid = $record->getGid();

            $task->setName($name);
            //$task->setFaction($faction);
            $task->setHealth($health);
            $task->setStrength($strength);
            $task->setIntelligence($intelligence);
           // $task->setGid($gid);

            $form = $this->createFormBuilder($task)
                ->add('name', TextType::class)

                ->add('save', SubmitType::class, array('label' => 'Create Task'))
                ->getForm();

             return $this->render("default/J17JigsPlayers_page.html.twig", array('stuff' => $record, 'form' => $form->createView()));

    }

    /**
     * @Route("/", name="emc23_sigs_players")
     */
    public function listAction($start=0,$max=100)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:J17JigsPlayers a";

        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);
        $Players    = $query->getResult();

        return $this->render('default/J17JigsPlayers.html.twig', array('pagination' => $Players));
    }

    /**
     * @Route("/api/list", name="emc23_sigs_players_api")
     */
    public function apiListAction($start=0,$max=100)
    {
        $em         = $this->get('doctrine.orm.entity_manager');
        $dql        = "SELECT a FROM AppBundle:J17JigsPlayers a";
        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);
        $resource = $query->getResult();

        $model      = $this->get('playerModel');
        $result     = $model->repopulate($resource);

        foreach ($result as $player){
            $playerList[]    = $player;
        }
        // create a JSON-response with a 200 status code
        $response = new Response(json_encode(array('data' => $playerList)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
