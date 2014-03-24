<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17UserUsergroupMap
 *
 * @ORM\Table(name="j17_user_usergroup_map")
 * @ORM\Entity
 */
class J17UserUsergroupMap
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupId;



    /**
     * Set userId
     *
     * @param integer $userId
     * @return J17UserUsergroupMap
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     * @return J17UserUsergroupMap
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
}
