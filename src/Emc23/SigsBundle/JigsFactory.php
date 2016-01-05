<?php

namespace Emc23\SigsBundle;
use DoctrineORMEntityManager;
use DoctrineORMEntityRepository;
use Doctrine\ORM\Query;
use Emc23\SigsBundle\Entity\J17JigsCharacters;

class JigsFactory
{
    protected $em;

    public function __construct($em)
    {
        $this->em = $em;
    }

    function generateHobbit()
    {
        $hobbit['faction_number']        = $this->generateFaction();
        $hobbit['Gid']                   = $this->generateGroup($hobbit['faction_number']);
        $hobbit['health']                = $this->generateHealth();
        $hobbit['strength']              = $this->generateStrength();
        $hobbit['intelligence']          = $this->generateIntelligence();
        $hobbit['contentment']           = rand(1,10);
        $hobbit['owner']                 = $this->generateOwner($hobbit['Gid']);
        $hobbit['type']                  = $this->generateHobbitType();
        $hobbit['grid']                  = rand(1,50);
        return $hobbit;    
    }

    function generateMonster()
    {
        $monster['health']                = $this->generateHealth();
        $monster['strength']              = $this->generateStrength();
        $monster['intelligence']          = $this->generateIntelligence();
        $monster['type']                  = $this->generateMonsterType();
        $monster['grid']                  = rand(50,99);
        return $monster;
    }

    function generateMonsterType()
    {
        $result         = $this->em->createQuery("SELECT a.id FROM Emc23SigsBundle:J17JigsMonsterTypes a")->getArrayResult();
        $ids            = array_map('current', $result);
        $randomIndex    = rand(1, count($ids));
        print_r($ids) .PHP_EOL;
        $randomIndex    = rand(1, count($ids));

        echo $randomIndex. PHP_EOL;

        echo $ids[$randomIndex]. PHP_EOL;

        return  $ids[$randomIndex];
    }

    function generateHobbitType()
    {
        $result         = $this->em->createQuery("SELECT a.id FROM Emc23SigsBundle:J17JigsHobbitTypes a")->getArrayResult();
        $ids            = array_map('current', $result);

        print_r($ids) .PHP_EOL;
        $randomIndex    = rand(1, count($ids));

        echo $randomIndex. PHP_EOL;

        echo $ids[$randomIndex]. PHP_EOL;

        return  $ids[$randomIndex];
    }


    function generateLove()
    {
        return 'love';
    }


    function generateFaction()
    {
        
        $faction =  rand(1, 3);
         
        if ($faction == 1)
        {
            $_faction = 42;
        }
        
        else if ($faction == 2)
        {
            $_faction = 35;
        }
        
        else
        {
            $_faction = 36;
        }
        
    return $_faction;
    }
    
    
    function generateGroup($faction)
    {
        $query      = $this->em->createQuery('SELECT a FROM Emc23SigsBundle:J17Usergroups a WHERE a.parentId =' . $faction);
        $result     = $query->getResult(Query::HYDRATE_ARRAY);
        $i          = 0;
        foreach ($result as $row)
        {
            $array[]=$row['id'];
            $i++;
        }
        
        $new_index      = rand(0,$i-1);
        return $array[$new_index];

    }
    

    
    function generateHealth()
    {
        return rand(8, 11);
    }

    function generateStrength()
    {
        return rand(8, 11);
    }

    function generateIntelligence()
    {
    
    return rand(8, 11);
        
    } 
   
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
    
    
    function generateOwner($Gid)
    
    {
    
        //$em = $this->container->get('doctrine')->getEntityManager();
        $em = $this->em;
    
        $owner = new \stdClass();
       
        $owner->type = $this->select_owner_type();
        //$owner->type = "P";

        if ($owner->type == "N")
        {
            $query      = $em->createQuery('SELECT a FROM Emc23SigsBundle:J17JigsCharacters a WHERE a.gid =' . $Gid);

            $result     = $query->getResult(Query::HYDRATE_ARRAY);

            $i          = 0;
       
            foreach ($result as $row)
            {
                $owner_array[]=$row['id'];
                $i++;
            }
   
        }
        elseif ($owner->type == "P")
        {
            $query      = $em->createQuery('SELECT a FROM Emc23SigsBundle:J17UserUsergroupMap a WHERE a.groupId =' . $Gid);
       
               $result     = $query->getResult(Query::HYDRATE_ARRAY);

                $i          = 0;
   
               foreach ($result as $row)
                {
                    $owner_array[]=$row['userId'];
                    $i++;
                }
        }        
        else
        {
            $query      = $em->createQuery('SELECT a FROM Emc23SigsBundle:J17UserUsergroupMap a WHERE a.groupId =' . $Gid);

            $result     = $query->getResult(Query::HYDRATE_ARRAY);

            $i          = 0;
                   foreach ($result as $row)
                    {
                        $owner_array[]=$row['userId'];
                        $i++;
                    }
        }        
   
        $new_index      = rand(0,$i-1);
        $owner->id      = $owner_array[$new_index];
        return $owner;
    } 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
    function select_owner_type()
    {
   
        $type_index = rand(1,3);

        if ($type_index ==1)
        {
            return "N";
        }
        
        elseif ($type_index ==2)
        {
            return "P";
        }
        
        elseif ($type_index ==3)
        {
            return "P";
        }
        
        else 
        {
            return "P";
        }
        
        return "P";
     
   } 
}
