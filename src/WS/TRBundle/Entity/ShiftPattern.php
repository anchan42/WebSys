<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShiftPattern
 *
 * @ORM\Table(name="shift_pattern")
 * @ORM\Entity
 */
class ShiftPattern
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_of_shift", type="smallint", nullable=true)
     */
    private $numberOfShift;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="time", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stop_time", type="time", nullable=true)
     */
    private $stopTime;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=45, nullable=true)
     */
    private $note;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numberOfShift
     *
     * @param integer $numberOfShift
     *
     * @return ShiftPattern
     */
    public function setNumberOfShift($numberOfShift)
    {
        $this->numberOfShift = $numberOfShift;

        return $this;
    }

    /**
     * Get numberOfShift
     *
     * @return integer
     */
    public function getNumberOfShift()
    {
        return $this->numberOfShift;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return ShiftPattern
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set stopTime
     *
     * @param \DateTime $stopTime
     *
     * @return ShiftPattern
     */
    public function setStopTime($stopTime)
    {
        $this->stopTime = $stopTime;

        return $this;
    }

    /**
     * Get stopTime
     *
     * @return \DateTime
     */
    public function getStopTime()
    {
        return $this->stopTime;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return ShiftPattern
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}
