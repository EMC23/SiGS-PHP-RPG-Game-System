<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 19-1-16
 * Time: 10:57
 */
namespace AppBundle\Model;

interface ModelInterface
{
    public function greet($name);

    /**
     * @param Request $request
     * @param $task
     * @param $em
     */
    public function save($request, $task, $em);

    /**
     * @param $record
     * @return array
     */
    public function repopulate($record);
}