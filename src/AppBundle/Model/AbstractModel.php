<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 19-1-16
 * Time: 10:57
 */
namespace AppBundle\Model;

abstract class AbstractModel
{
    // Force Extending class to define this method
    abstract protected function save($request, $task, $em);
    abstract protected function repopulate($record);

    // Common method
    public function generateHealth() {
        return rand(8, 11);
    }
    // Common method
    public function generateStrength() {
        return rand(8, 11);
    }
    // Common method
    public function generateIntelligence() {
        return rand(8, 11);
    }
    // Common method
    public function selectType($type) {
        $result         = $this->em->createQuery("SELECT a.id FROM AppBundle:$type a")->getArrayResult();
        $ids            = array_map('current', $result);
        $randomIndex    = rand(1, count($ids));
        print_r($ids) .PHP_EOL;
        $randomIndex    = rand(1, count($ids));
        echo $randomIndex. PHP_EOL;
        echo $ids[$randomIndex]. PHP_EOL;
        return  $ids[$randomIndex];
    }






}


