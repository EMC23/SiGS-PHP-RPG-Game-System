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
        //use Emc23\SigsBundle\Entity\J17JigsFactions;
     //   use Emc23\SigsBundle\Entity\J17JUsergroups;
        use Symfony\Component\HttpFoundation\Request;
        use Doctrine\ORM\Query;
        // src/Acme/StoreBundle/Controller/DefaultController.php
      

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
        return $this->render("Emc23SigsBundle:Default:" . $type . "_page.html.twig", array('form' => $form->createView(), 'type' => $type));
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
            ->getRepository("Emc23SigsBundle:$type")
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




        return $this->render("Emc23SigsBundle:Default:" . $type . "_page.html.twig", array('stuff' => $record, 'form' => $form->createView(), 'type' => $type));


    }

    ///////////////////////////////////////////////////////////////////


    public function showfactionsAction()
    {

        $gids = array(42, 35, 36);
        $this->faction = array();
        $em = $this->getDoctrine()->getManager();
        /*
              $query = $em->createQuery(
                  'SELECT p
                  FROM AcmeSigsBundle:J17Comprofiler p
                  WHERE p.id > :id
                  ORDER BY p.id ASC'
              )->setParameter('id', '1');

              $x = $query->getResult();
          */
        foreach ($gids as $gid) {
            //   $dql   = "           SELECT a,p FROM AcmeSigsBundle:J17Usergroups a             LEFT JOIN a.gid p WHERE a.parentId = $gid ";

            /*    $query = $em->createQuery(
                'SELECT p FROM AcmeSigsBundle:J17Usergroups p
                 WHERE p.parentId = 42'

            );  */

            $query = $em->createQuery(' SELECT p,a FROM Emc23SigsBundle:J17Usergroups a  LEFT JOIN a.gid p WHERE a.parentId =' . $gid);

            // print_r($query);

            $x = $query->getResult(Query::HYDRATE_ARRAY);

            //    $x = $query->getResult();

            $this->faction[$gid] = $x;
            //
            $this->faction[$gid]['factiontotalBank'] = 0;
            //
            foreach ($x as $group) {

                $this->faction[$gid]['factiontotalBank'] += $group['gid']['totalBank'];
            }
            $i = 0;
            foreach ($this->faction as $page) {
                //   echo $this->faction[$gid]['factiontotalBank']. '<br/>';
                //    echo $page[$i]['gid']['totalBank'] . 'tb<br/>';
                //   echo $i. '<br/>';
                //   echo $this->$gid->faction_totalMoney.'<br/>';
                // parameters to template
                //       echo '<pre>';
                // print_r ($page['gid']['totalBank'] );
                //   print_r($page);


                if ($page[$i]['parentId'] == 42) {
                    $this->faction[$gid]['fid'] = "Cyberia";
                }
                if ($page[$i]['parentId'] == 35) {
                    $this->faction[$gid]['fid'] = "Gaia";
                }

                if ($page[$i]['parentId'] == 36) {

                    $this->faction[$gid]['fid'] = "Fantasia";
                }


                $i++;
            }


//  
        }


// return $this->render('AcmeSigsBundle:Default:layout.html.php');
        return $this->render('Emc23SigsBundle:Default:layout.html.php', array('pagination' => $this->faction));

        // ... do something, like pass the $product object into a template

        // return $product;
        //   return new Response('product id '.$product->getIdUser());

        // $name = $product->getName();
        //    $image = $product->getImage();
        //  $Posx = $product->getPosx();

        //$task = new J17JigsCharacters();
        //
        //     $task->setName($name);
        //     $task->setImage($image);
        //     $task->setPosx($Posx);


        //      $form = $this->createFormBuilder($task)
        //        ->add('name', 'text')
        //        ->add('image', 'text')
        //      ->add('posx','text')
        //           ->add('save', 'submit')
        //
//            ->getForm();
        //    return $this->render("AcmeSigsBundle:Default:J17_Jigs_Factions_page.html.twig", array('stuff' => $products, 'form' => $form->createView() ));


    }

/////////////////////////////////          

            public function showallusersAction()
            {
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery(
                    'SELECT p
            FROM Emc23SigsBundle:J17JigsPlayers p
            WHERE p.id > :id
            ORDER BY p.iduser ASC'
                )->setParameter('id', '1');

                $products = $query->getResult();
                $x = 0;
                $content = '<table>';
                foreach ($products as $record) {

                    $content .= $this->renderView(
                        'Emc23SigsBundle:Hello:index.html.twig',
                        array('name' => $record->getName(), 'id' => $record->getId())
                    );
                }
                $content .= '</table>';
                return new Response($content);
            }

            ////////////////////////////////////////////////////////////////////////////////////
            public function showGroupsAction()
            {
                $content = "empty";
                return new Response($content);
            }

/////////////////////////////////

            public function showallusers2Action()
            {
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT p FROM Emc23SigsBundle:J17Comprofiler p WHERE p.id > 1 ORDER BY p.id ASC');
                //$query->setMaxResults(1);
                $thing = $query->getSql();

               // echo $thing;


                try {
                    // default action is always to return a Document

                    echo '<pre>';
                    \Doctrine\Common\Util\Debug::dump($query);
                    echo '</pre>';

                 //   $products = $query->getResult();



                    $document = $query->getResult(Query::HYDRATE_SCALAR);
                } catch (QueryException $e){
                    print_r($e);
                    // no result or non unique result
                    }





                $x = 0;
                $content = '<table>';
                foreach ($products as $record) {

                    $content .= $this->renderView(
                        'AcmeSigsBundle:Default:index3.html.twig',
                        array('image' => $record->getAvatar(), 'id' => $record->getId())
                    );
                }
                $content .= '</table>';
                return new Response($content);
            }
            ////////////////////////////////////////////////////////////////////////////////////


            // Acme\MainBundle\Controller\ArticleController.php

            public function listAction($type)
            {
                $em = $this->get('doctrine.orm.entity_manager');
                $dql = "SELECT a FROM Emc23SigsBundle:$type a";

                $query = $em->createQuery($dql);


                $paginator = $this->get('knp_paginator');
                $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*page number*/, 30/*limit per page*/);
                // $pagination ="hello";


                //  echo '<pre>';
                //  print_r ($pagination);
                //  echo '</pre>';
                // parameters to template
                return $this->render('Emc23SigsBundle:Default:' . $type . '.html.twig', array('pagination' => $pagination, 'type' => $type));
            }
        }
