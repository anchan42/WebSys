<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductionLine
 *
 * @ORM\Table(name="production_line", indexes={@ORM\Index(name="fk_production_line_shift_pattern1_idx", columns={"shift_pattern_id"})})
 * @ORM\Entity
 */
class ProductionLine {

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \WS\TRBundle\Entity\ShiftPattern
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\ShiftPattern")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shift_pattern_id", referencedColumnName="id")
     * })
     */
    private $shiftPattern;

    /**
     * Get id
     *
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set shiftPattern
     *
     * @param \WS\TRBundle\Entity\ShiftPattern $shiftPattern
     *
     * @return ProductionLine
     */
    public function setShiftPattern(\WS\TRBundle\Entity\ShiftPattern $shiftPattern = null) {
        $this->shiftPattern = $shiftPattern;

        return $this;
    }

    /**
     * Get shiftPattern
     *
     * @return \WS\TRBundle\Entity\ShiftPattern
     */
    public function getShiftPattern() {
        return $this->shiftPattern;
    }

    public function __toString() {
        return $this->getId() ?: '';
    }

}
