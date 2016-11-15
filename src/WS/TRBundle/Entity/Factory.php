<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factory
 *
 * @ORM\Table(name="factory")
 * @ORM\Entity
 */
class Factory
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
