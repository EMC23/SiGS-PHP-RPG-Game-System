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
         $id=$key;
        }
        $em = $this->getDoctrine()->getManager();
        // $jigs = $this->get('my_JigsFactory');
        //$type = 'J17JigsPlayers';
        //$task = new J17JigsPlayers();
        //$jigs = new Jigs();
        $task = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsPlayers")
            ->find($id);
        if (!$task) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        //  $all = $request->request->all();
        //  $data_array = $request->query->get('data');
        $data_array = $request->request->all();
        //print_r($data_array);
        foreach($data_array as $key=>$value) {
            if (is_array($value)) {
                $return_data = $value;
                foreach ($value as $person) {
                    foreach ($person as $fieldName => $fieldValue) {
                        if ($fieldName == 'name') {
                            //   echo $fieldName;
                            $task->setName($fieldValue);
                        }
                    }
                }
            }
        }
        $em->persist($task);
        $em->flush();
        $record = $this->getDoctrine()
            //  ->getRepository('AcmeSigsBundle:J17JigsPlayers')
            ->getRepository("AppBundle:J17JigsPlayers")
            ->find($id);

        $row = array();
        if ($record instanceof \AppBundle\Entity\J17JigsPlayers ) {
            $row[0]['id'] = $record->getId();
            $row[0]['DT_RowId'] = $record->getId();
            $row[0]['name'] = $record->getName();
            $row[0]['posX']  = $record->getPosx();
            $row[0]['posY']  = $record->getPosy();
            $row[0]['action']  = 'edit';
        }

        $response = new Response(json_encode(array('data' => $row)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
       //     return $this->redirect($this->generateUrl('task_success'));
       // }
   //     return $this->render("AppBundle:Default:" . $type . "_page.html.twig", array('form' => $form->createView(), 'type' => $type));
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
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:J17JigsPlayers a";

        $query      = $em->createQuery($dql)
            ->setFirstResult($start)
            ->setMaxResults($max);
        $resource = $query->getResult();
        //$result= new \stdClass();
        $result= array();
        $i = 0 ;
        foreach( $resource as $row){
        //    print_r($row);

            if ($row instanceof \AppBundle\Entity\J17JigsPlayers ) {
                $result[$i]['DT_RowId'] = $row->getId();

                $result[$i]['name'] = $row->getName();
                $result[$i]['posX']  = $row->getPosx();
                $result[$i]['posY']  = $row->getPosy();
                $i++;
            }

    }

        foreach ($result as $player){

            $playerList[]    = $player;

        }


        //$players    = json_encode($result);
        // create a JSON-response with a 200 status code
        $response = new Response(json_encode(array('data' => $playerList)));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
