<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 15-1-16
 * Time: 16:06
 */
namespace AppBundle\Model;

class MonsterTypesModel implements ModelInterface
{

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
        foreach ($data_array as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $person) {
                    foreach ($person as $fieldName => $fieldValue) {
                        if ($fieldName == 'type') {
                            //   echo $fieldName;
                            $task->setType($fieldValue);
                        }
                        if ($fieldName == 'cellwidth') {
                            //   echo $fieldName;
                            $task->setCellwidth($fieldValue);
                        }
                        if ($fieldName == 'cellheight') {
                            //   echo $fieldName;
                            $task->setCellheight($fieldValue);
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
        $result     = array();
        $i          = 0;
        if ($record instanceof \AppBundle\Entity\J17JigsMonsterTypes) {

             $rows[0]=$record;

        }else{

            $rows=$record;
         }

        return $this->place($rows, $result, $i);

    }

    /**
     * @param $row
     * @param $result
     * @param $i
     * @return mixed
     */
    public function place($rows, $result, $i)
    {
        foreach ($rows as $row) {
            $name                                       = $row->getName();
            $result[$i]['id']                           = $row->getId();
            $result[$i]['DT_RowId']                     = $row->getId();
            $result[$i]['type']                         = $row->getName();
            $cellwidth = $result[$i]['cellwidth']       = $row->getCellWidth();
            $cellheight = $result[$i]['cellheight']     = $row->getCellHeight();
            $result[$i]['numberofcells']                = $row->getNumberofcells();
            $result[$i]['image'] = "<div style='width: " . $cellwidth . "px; height: " . $cellheight . "px; overflow:hidden;'>
                        <img src = 'http://www.eclecticmeme.com/components/com_battle/images/assets/chars/monsters/$name/$name.png'>
                </div>";

            $result[$i]['action'] = 'edit';
            $i++;
        }
        return $result;
    }
}
