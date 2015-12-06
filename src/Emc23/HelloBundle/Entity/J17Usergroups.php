<?php

namespace Emc23\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17Usergroups
 *
 * @ORM\Table(name="j17_usergroups", uniqueConstraints={@ORM\UniqueConstraint(name="idx_usergroup_parent_title_lookup", columns={"parent_id", "title"})}, indexes={@ORM\Index(name="idx_usergroup_title_lookup", columns={"title"}), @ORM\Index(name="idx_usergroup_adjacency_lookup", columns={"parent_id"}), @ORM\Index(name="idx_usergroup_nested_set_lookup", columns={"lft", "rgt"})})
 * @ORM\Entity
 */
class J17Usergroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=false)
     */
    private $lft;

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=false)
     */
    private $rgt;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;





 /**
     * @ORM\OneToOne(targetEntity="J17JigsGroups", referencedColumnName="gid")
     */

private $gid;











    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return J17Usergroups
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     * @return J17Usergroups
     */
    public function setLft($lft)
    {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return J17Usergroups
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;

        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return J17Usergroups
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
