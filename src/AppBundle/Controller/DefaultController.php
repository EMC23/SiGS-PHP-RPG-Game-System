<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\J17JigsAwards;
use Symfony\Component\HttpFoundation\Response;
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
//use AppBundle\Entity\J17JigsFactions;
//   use AppBundle\Entity\J17JUsergroups;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;
// src/Acme/StoreBundle/Controller/DefaultController.php

class DefaultController extends Controller
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
    
            $name   = "stuff";

            return $this->render('AppBundle:Hello:index.html.twig', array('name' => $name));
    }

    public function addAction()
    {
            $task           = new J17JigsCharacters();
            $product        = new J17JigsAwards();
       // $product->setId('19');
      //  $product->setNameId('1');
      //  $product->setPublished('1');
    //    $em             = $this->getDoctrine()->getManager();
    //    $em->persist($product);
    //    $em->flush();

        return new Response('Created product id '.$product->getId());
    }
      
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////      
	public function newAction($type, Request $request)
	{
    
	$em		= $this->getDoctrine()->getManager();
	$jigs		= $this->get('my_JigsFactory');
      
	if ($type == 'J17JigsHobbits')
        {
   
		$task           = new J17JigsHobbits();
		//$jigs           = new Jigs();
		$file			= (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random' ;    
		$name           	= Mudnames::generate_name_from($file);
		$task->setName($name);
     
		$hobbit			= $jigs->generateHobbit();
	     
		$task->setFaction($hobbit['faction_number']);
		$task->setGid($hobbit['Gid'] ); 
		$task->setHealth($hobbit['health']);     
		$task->setStrength($hobbit['strength'] );         
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
    	
    	if ($type == 'J17JigsPLayers')
        {
    
		$task           = new J17JigsHobbits();
		//$jigs           = new Jigs();
		$file			= (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random' ;    
		$name           	= Mudnames::generate_name_from($file);
		$task->setName($name);
     
		$hobbit			= $jigs->generateHobbit();
	     
		$task->setFaction($hobbit['faction_number']);
		$task->setGid($hobbit['Gid'] ); 
		$task->setHealth($hobbit['health']);     
		$task->setStrength($hobbit['strength'] );         
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
                    $strength        = $task->getStrength();
                    $gid          = $task->getGid();
                    $owner          = $task->getOwner();
               
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


    
    return $this->render("AppBundle:Default:".$type."_page.html.twig", array( 'form' => $form->createView(),'type'=>$type ));
    
    }
       
        
    public function showAction($id,$type, Request $request)
    {
    
        if ($type == 'J17JigsCharacters')
        {
            $task           = new J17JigsCharacters();
        }
        if ($type == 'J17JigsPlayers')
        {
            $task           = new J17JigsPlayers();
        }    
        if ($type == 'J17JigsBuildings')
        {
            $task           = new J17JigsBuildings();
        }
        if ($type == 'J17JigsHobbits')
        {
            $task           = new J17JigsHobbits();
        }
     
        $record = $this->getDoctrine()
        
          //  ->getRepository('AcmeHelloBundle:J17JigsPlayers')
          ->getRepository("AppBundle:$type")
            ->find($id);

        if (!$record) {
            throw $this->createNotFoundException('No record found for id '.$id);
        }
        // ... do something, like pass the $product object into a template
   
   // return $product;
  //   return new Response('product id '.$product->getIdUser());
     

    //    $faction = $record->getFaction();
    // $image = $product->getImage();
 //    $Posx = $product->getPosx();
     
   //  $task = new J17JigsCharacters();
   
//   $task = new $type();
      
            if ($type == 'J17JigsHobbits')
                {        
                    $name           = $record->getName();
                    $faction        = $record->getFaction();
                    $health         = $record->getHealth();
                    $strength       = $record->getStrength();
                    $intelligence   = $record->getIntelligence();
                //    $group          = $record->getGroup();
                    $owner          = $record->getOwner();
                    $contentment    = $record->getContentment();
                
                    $task->setName($name);
                    $task->setFaction($faction);        
                    $task->setHealth($health);
                    $task->setStrength($strength);
                    $task->setIntelligence($intelligence);
                   // $task->setGroup($group);
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
            
            
                       if ($type == 'J17JigsPlayers')
                {        
                    $name           = $record->getName();
               //     $faction        = $record->getFaction();
                    $health         = $record->getHealth();
                    $strength       = $record->getStrength();
                    $intelligence   = $record->getIntelligence();
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
            ->add('name', 'text')
            //->add('faction', 'text')
             ->add('health', 'text')           
              ->add('strength', 'text')          
            ->add('intelligence', 'text')            
          //   ->add('group', 'text')           
           //    ->add('contentment', 'text')           

            ->add('save', 'submit')
            
            ->getForm();
            
      }  
            
                               if ($type == 'J17JigsBuildings')
                {        
                    $name           = $record->getName();
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
            ->add('name', 'text')
            //->add('faction', 'text')
        //     ->add('health', 'text')           
       //       ->add('strength', 'text')          
        //    ->add('intelligence', 'text')            
          //   ->add('group', 'text')           
           //    ->add('contentment', 'text')           

            ->add('save', 'submit')
            
            ->getForm();
            
      }      
            
                                     if ($type == 'J17JigsCharacters')
                {        
                    $name           = $record->getName();
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
            ->add('name', 'text')
            //->add('faction', 'text')
        //     ->add('health', 'text')           
       //       ->add('strength', 'text')          
        //    ->add('intelligence', 'text')            
          //   ->add('group', 'text')           
           //    ->add('contentment', 'text')           

            ->add('save', 'submit')
            
            ->getForm();
            
      }  
           
      return $this->render("AppBundle:Default:".$type."_page.html.twig", array('stuff' => $record, 'form' => $form->createView(),'type'=>$type ));
   
    } 
    


    
/////////////////////////////////          
        
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
        $x=0;
        $content ='<table>';
        foreach ($products as $record) 
        {
               
            $content .= $this->renderView(
            'AppBundle:Hello:index.html.twig',
            array('name' => $record->getName(),'id' => $record->getId())
            );      
        }
        $content .='</table>';
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
		$em		= $this->getDoctrine()->getManager();
		$query		= $em->createQuery(
						    'SELECT p
						    FROM AppBundle:J17Comprofiler p
						    WHERE p.id > :id
						    ORDER BY p.id ASC'
						)->setParameter('id', '1');

		$products	= $query->getResult(); 
		$x		= 0;
		$content	='<table>';
		foreach ($products as $record) 
		{
		       
		    $content .= $this->renderView(
		    'AppBundle:Default:index3.html.twig',
		    array('image' => $record->getAvatar(),'id' => $record->getId())
		    );      
		}
		$content .='</table>';
		return new Response($content);
	} 
 ////////////////////////////////////////////////////////////////////////////////////    


	public function listAction($type)
	{
	
		if ($type=="J17JigsFactions")
		{
		
			$gids	= array(42,35,36);
			$this->faction =array();
			$em	= $this->getDoctrine()->getManager();
			foreach ($gids as $gid)
			{
				$query	= $em->createQuery("SELECT u,a FROM AppBundle:J17Usergroups u LEFT JOIN u.gid a WHERE u.parentId = ".$gid);
				$array	= $query->getArrayResult(Query::HYDRATE_OBJECT);
				
				
				//$scalar = $query->getScalarResult();
				
				
				/*
				$qb->select(array('e','u'))
				->from('AcmeHelloBundle:J17Usergroups', 'e')
				->select("e")
				->leftJoin("J17JigsGroups", "u", "WITH", "e.gid=u.id")
				->where("e.parentId = $gid ");
				$query = $qb->getQuery();
				$results = $query->getResult(); 
				
				*/
			        
				$this->faction[$gid]['factiontotalBank'] = 0;
				foreach ($array as $group)
				{
					$this->faction[$gid]['factiontotalBank'] += $group['gid']['totalBank'];
				}
				$i=0;
				foreach ($array as $page)
				{
					if( $page['parentId'] == 42)
					{
					    $this->faction[$gid]['fid']="Cyberia";
					}      
					if( $page['parentId'] == 35) 
					{
					     $this->faction[$gid]['fid']="Gaia";
					}
					if( $page['parentId'] == 36) 
					{
					    $this->faction[$gid]['fid']="Fantasia";
					}
				$i++;
				
				 $this->faction[$gid]['id'] = $i;
				
			    }
			}
			
			$pagination = $this->faction;
		}
		else
		{
	
		    $em   	= $this->get('doctrine.orm.entity_manager');
		    $dql   	= "SELECT a FROM Appbundle:$type a";
		    $query	= $em->createQuery($dql);
		    $paginator  = $this->get('knp_paginator');
		    $pagination = $paginator->paginate( $query, $this->get('request')->query->get('page', 1)/*page number*/, 30/*limit per page*/);

		}

print_r($pagination );
//exit();

	    return $this->render('AppBundle:Default:'.$type.'.html.twig', array('pagination' => $pagination,'type'=>$type));
	}
	 ///////////////////////////////////////////////////////////////////   

    public function showfactionsAction()
    {
    
	
	
	return $this->render('AppBundle:Default:J17JigsFactions_page.html.twig', array('pagination' => $this->faction));
    } 
    
 /////////////////////////////////    
	    
}
