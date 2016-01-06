<?php

namespace Emc23\SigsBundle\Controller;
        use Symfony\Bundle\FrameworkBundle\Controller\Controller;
        use Emc23\SigsBundle\Entity\J17JigsAwards;
        use Symfony\Component\HttpFoundation\Response;
        use Emc23\SigsBundle\Model\Jigs;
        use Emc23\SigsBundle\Entity\J17JigsCharacters;
        use Emc23\SigsBundle\Entity\J17JigsMonsters;
        use Emc23\SigsBundle\Entity\Mudnames;
        use Symfony\Component\Security\Core\Exception\InvalidArgumentException;
        use Emc23\SigsBundle\JigsFactory;
        use Symfony\Component\HttpFoundation\Request;
        use Doctrine\ORM\Query;
        use Doctrine\ORM\Tools\Pagination\Paginator;
class MonstersController extends Controller
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
           // $name = Mudnames::generate_name_from($file);
            //$task->setName($name);
            $hobbit = $jigs->generateHobbit();
            $task->setFaction($hobbit['faction_number']);
            $task->setGid($hobbit['Gid']);
            $task->setHealth($hobbit['health']);
            $task->setStrength($hobbit['strength']);
            $task->setIntelligence($hobbit['intelligence']);
            $task->setOwner($hobbit['owner']);
            $task->setContentment($hobbit['contentment']);
            $form = $this->createFormBuilder($task)
             //   ->add('name')
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
           // $name = $task->getName();
            $faction = $task->getFaction();
            $contentment = $task->getContentment();
            $health = $task->getHealth();
            $intelligence = $task->getIntelligence();
            $strength = $task->getStrength();
            $gid = $task->getGid();
            $owner = $task->getOwner();
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
        return $this->render("Emc23SigsBundle:Default:" . $type . "_page.html.twig", array('form' => $form->createView(), 'type' => $type));
    }


    public function showAction($id, Request $request)
    {
        $type = 'J17JigsMonsters';
        $task = new J17JigsMonsters();
        $record = $this->getDoctrine()
            ->getRepository("Emc23SigsBundle:J17JigsMonsters")
            ->find($id);
        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $health = $record->getHealth();
        $strength = $record->getStrength();
        $intelligence = $record->getIntelligence();
        $task->setHealth($health);
        $task->setStrength($strength);
        $task->setIntelligence($intelligence);

        $form = $this->createFormBuilder($task)
            ->add('health', 'text')
            ->add('strength', 'text')
            ->add('intelligence', 'text')
            ->add('save', 'submit')
            ->getForm();

        return $this->render("Emc23SigsBundle:Default:J17JigsMonsters_page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));
    }

    public function listAction($start=0,$max=100)
    {
        $em         = $this->get('doctrine.orm.entity_manager');
        $dql        = "SELECT a, b FROM Emc23SigsBundle:J17JigsMonsters a LEFT JOIN a.type b";
        $query      = $em->createQuery($dql)
        ->setFirstResult($start)
        ->setMaxResults($max);
        $monsters = $query->getResult();

        foreach ($monsters as $monster) {
            $monster->name          = $monster->getType()->getname();
            $monster->cellwidth     = $monster->getType()->getCellwidth();
            $monster->cellheight    = $monster->getType()->getCellheight();
        }
        return $this->render('Emc23SigsBundle:Default:J17JigsMonsters.html.twig', array('pagination' => $monsters));
    }
}
