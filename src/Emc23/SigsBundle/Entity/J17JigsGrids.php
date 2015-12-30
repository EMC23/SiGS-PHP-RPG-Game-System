<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsGrids
 *
 * @ORM\Table(name="j17_jigs_grids", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"}))})
 * @ORM\Entity
 */
class J17JigsGrids
{
    protected $id;
    protected $name;

    protected $description;




}