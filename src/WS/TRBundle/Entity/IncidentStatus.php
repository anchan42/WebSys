<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IncidentStatus
 *
 * @ORM\Table(name="incident_status")
 * @ORM\Entity
 */
class IncidentStatus {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="string", length=32, nullable=false)
     */
    private $desc;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set desc
     *
     * @param string $desc
     *
     * @return IncidentStatus
     */
    public function setDesc($desc) {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string
     */
    public function getDesc() {
        return $this->desc;
    }

    public function __toString() {
        return $this->getDesc() ?: '';
    }

}
