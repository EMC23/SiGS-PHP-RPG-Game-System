<?php


namespace Emc23\HelloBundle\Model;
        
        use Doctrine\ORM\Query;

        use Emc23\HelloBundle\Entity\J17JigsCharacters;



class Jigs extends DefaultController
{

    function generateFaction()
    {

        $result = 42;

        return $result;
    }

    function generateGroup()
    {

        $result = 47;

        return $result;
    }
    
    
     function generateHealth()
    {

        $result = 10;

        return $result;
    }   
    
    
     function generateIntelligence()
    {

        $result = 10;

        return $result;
    }   
    

    function generateStrength()
    {

        $result = 10;

        return $result;
    }
    
    
    function generateOwner($Gid,$em)
    {

      $query = $em->createQuery(
            ' SELECT a FROM Emc23HelloBundle:J17Characters a WHERE a.gid ='.$Gid);
        // print_r($query);

            $x = $query->getResult(Query::HYDRATE_ARRAY);

        $result = $x[0];

        return $result;
    }
    
}
