<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Incident
 *
 * @ORM\Table(name="incident", indexes={@ORM\Index(name="fk_incident_production_line1_idx", columns={"production_line"}), @ORM\Index(name="fk_incident_incident_status1_idx", columns={"status"})})
 * @ORM\Entity
 */
class Incident
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="line_stop_time", type="datetime", nullable=false)
     * @Assert\NotBlank()
     */
    private $lineStopTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="line_start_time", type="datetime", nullable=true)
     */
    private $lineStartTime;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="text", length=65535, nullable=false)
     */
    private $detail;

    /**
     * @var string
     *
     * @ORM\Column(name="machine", type="string", length=45, nullable=true)
     */
    private $machine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime", nullable=true)
     */
    private $createTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_time", type="datetime", nullable=false)
     */
    private $updateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=45, nullable=true)
     */
    private $subject;

    /**
     * @var \WS\TRBundle\Entity\IncidentStatus
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\IncidentStatus")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="status", referencedColumnName="id")
     * })
     */
    private $status;

    /**
     * @var \WS\TRBundle\Entity\ProductionLine
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\ProductionLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="production_line", referencedColumnName="id")
     * })
     */
    private $productionLine;



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
     * Set lineStopTime
     *
     * @param \DateTime $lineStopTime
     *
     * @return Incident
     */
    public function setLineStopTime($lineStopTime)
    {
        $this->lineStopTime = $lineStopTime;

        return $this;
    }

    /**
     * Get lineStopTime
     *
     * @return \DateTime
     */
    public function getLineStopTime()
    {
        return $this->lineStopTime;
    }

    /**
     * Set lineStartTime
     *
     * @param \DateTime $lineStartTime
     *
     * @return Incident
     */
    public function setLineStartTime($lineStartTime)
    {
        $this->lineStartTime = $lineStartTime;

        return $this;
    }

    /**
     * Get lineStartTime
     *
     * @return \DateTime
     */
    public function getLineStartTime()
    {
        return $this->lineStartTime;
    }

    /**
     * Set detail
     *
     * @param string $detail
     *
     * @return Incident
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set machine
     *
     * @param string $machine
     *
     * @return Incident
     */
    public function setMachine($machine)
    {
        $this->machine = $machine;

        return $this;
    }

    /**
     * Get machine
     *
     * @return string
     */
    public function getMachine()
    {
        return $this->machine;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     *
     * @return Incident
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set updateTime
     *
     * @param \DateTime $updateTime
     *
     * @return Incident
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Incident
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set status
     *
     * @param \WS\TRBundle\Entity\IncidentStatus $status
     *
     * @return Incident
     */
    public function setStatus(\WS\TRBundle\Entity\IncidentStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \WS\TRBundle\Entity\IncidentStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set productionLine
     *
     * @param \WS\TRBundle\Entity\ProductionLine $productionLine
     *
     * @return Incident
     */
    public function setProductionLine(\WS\TRBundle\Entity\ProductionLine $productionLine = null)
    {
        $this->productionLine = $productionLine;

        return $this;
    }

    /**
     * Get productionLine
     *
     * @return \WS\TRBundle\Entity\ProductionLine
     */
    public function getProductionLine()
    {
        return $this->productionLine;
    }
}
