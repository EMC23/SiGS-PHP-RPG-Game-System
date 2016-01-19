<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 15-1-16
 * Time: 16:06
 */
namespace AppBundle\Model;

class PlayerModel{

    public function __construct($parameter_name)
    {
        $this->parameter_name = $parameter_name;
    }


    public function greet($name)
    {
        return $this->parameter_name . ' ' . $name;
    }

    /**
     * @param Request $request
     * @param $task
     * @param $em
     */
    public function save($request, $task, $em)
    {
        $data_array = $request->request->all();
        //print_r($data_array);
        foreach ($data_array as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $person) {
                    foreach ($person as $fieldName => $fieldValue) {
                        if ($fieldName == 'name') {
                            //   echo $fieldName;
                            $task->setName($fieldValue);
                        }
                        if ($fieldName == 'posX') {
                            //   echo $fieldName;
                            $task->setPosX($fieldValue);
                        }
                        if ($fieldName == 'posY') {
                            //   echo $fieldName;
                            $task->setPosY($fieldValue);
                        }
                    }
                }
            }
        }
        $em->persist($task);
        $em->flush();
    }

    /**
     * @param $record
     * @return array
     */
    public function repopulate($record)
    {
        $row = array();
        if ($record instanceof \AppBundle\Entity\J17JigsPlayers) {
            $row[0]['id'] = $record->getId();
            $row[0]['DT_RowId'] = $record->getId();
            $row[0]['name'] = $record->getName();
            $row[0]['posX'] = $record->getPosx();
            $row[0]['posY'] = $record->getPosy();
            $row[0]['action'] = 'edit';
            return $row;
        }
        return $row;
    }
}