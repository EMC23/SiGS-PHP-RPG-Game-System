<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 15-1-16
 * Time: 16:06
 */
namespace AppBundle\Model;

use AppBundle\Entity\J17JigsPlayers;

class PlayerModel extends AbstractModel
{

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
        $result = array();
        $i = 0 ;

          foreach ($record as $row) {
              if ($row instanceof J17JigsPlayers) {
                  $result[$i]['id']         = $row->getId();
                  $result[$i]['DT_RowId']   = $row->getId();
                  $result[$i]['name']       = $row->getName();
                  $result[$i]['posX']       = $row->getPosx();
                  $result[$i]['posY']       = $row->getPosy();
                  $result[$i]['action']     = 'edit';
                  $i++;
              }
        }
        return $result;
    }
}