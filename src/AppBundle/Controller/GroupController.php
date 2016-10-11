<?php

// src/Acme/HelloBundle/Controller/HelloController.php
namespace AppBundle\Controller;

use AppBundle\Entity\J17JigsGroups;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;

class GroupController extends Controller
{
    /**
     * @param Request $request
     * @Route("/groups/", name="groups")
     * @Method("GET")
     * @return Response
     */

    public function listAction(Request $request)
    {
            $gids = array(42, 35, 36);
            $this->faction = array();
            $em = $this->getDoctrine()->getManager();
            $qb = $em->createQueryBuilder();
            foreach ($gids as $gid) {
                $qb->select("u_".$gid, "p_".$gid)
                    ->from("AppBundle:J17Usergroups", "u_".$gid)
                    ->leftJoin("u_".$gid.".group", "p_".$gid)
                    ->where("u_".$gid.".parentId = ".$gid)
                ;
                // $qb instanceof QueryBuilder
                $query = $qb->getQuery();
                $array = $query->getArrayResult(Query::HYDRATE_OBJECT);
                $this->faction[$gid]=[];
                $this->faction[$gid]['factiontotalBank'] = 0;

                foreach ($array as $group) {
                    $this->faction[$gid]['factiontotalBank'] += $group['group']['totalBank'];
                }
                $i = 0;
                foreach ($array as $page) {
                    $page['faction'] = "Unknown";
                    if ($page['parentId'] == 42) {
                        $page['faction'] = "Cyberia";
                    }
                    if ($page['parentId'] = 35) {
                        $page['faction'] = "Gaia";
                    }
                    if ($page['parentId'] == 36) {
                        $page['faction'] = "Fantasia";
                    }
                    $i++;
                }
                $cacheDriver = new \Doctrine\Common\Cache\ArrayCache();
                $deleted = $cacheDriver->deleteAll();
                $pagination[]= $array;
            }
        return $this->render('AppBundle:Default:J17Usergroups.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/group/", name="group")
     * @Method("GET")
     *
     */
    public function showAction( Request $request)
    {
        $type = 'J17JigsGroups';
        $id = $request->get('id');
        $task = new J17JigsGroups();

        $record = $this->getDoctrine()
            ->getRepository("AppBundle:J17JigsGroups")
            ->find($id);

        if (!$record) {
            throw $this->createNotFoundException('No record found for id ' . $id);
        }
        $totalMembers = $record->getTotalMembers();
        $totalBank = $record->getTotalBank();
        $totalXp = $record->getTotalXp();

        $task->setTotalMembers($totalMembers);
        $task->setTotalBank($totalBank);
        $task->setTotalXp($totalXp);

        $form = $this->createFormBuilder($task)
            ->add('totalMembers', TextType::class)
            ->add('totalBank', TextType::class)
            ->add('totalXp', TextType::class)

            ->add('save', SubmitType::class)
            ->getForm();
        //     return $this->render("AppBundle:Default:J17JigsMonsters_page.html.twig", array('stuff' => $record));
        return $this->render("AppBundle:Default:J17JigsHobbits_page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));
    }

    public function addAction()
    {
        $task = new J17JigsGroups();
        // $product->setId('19');
        //  $product->setNameId('1');
        //  $product->setPublished('1');
        //    $em             = $this->getDoctrine()->getManager();
        //    $em->persist($product);
        //    $em->flush();
        return new Response('Created product id ' . $product->getId());
    }

    public function newAction($type, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jigs = $this->get('my_JigsFactory');
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

        $form->handleRequest($request);
        if ($form->isValid()) {
            //$record = $form->getData();
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
}
