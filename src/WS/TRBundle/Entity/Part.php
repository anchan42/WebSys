<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Part
 *
 * @ORM\Table(name="part", indexes={@ORM\Index(name="fk_parts_bike_models1_idx", columns={"part_ini_model"}), @ORM\Index(name="fk_parts_part_status1_idx", columns={"part_status"}), @ORM\Index(name="fk_parts_part_type1_idx", columns={"part_type"}), @ORM\Index(name="fk_part_factory1_idx", columns={"produced_at"})})
 * @ORM\Entity
 */
class Part
{
    /**
     * @var string
     *
     * @ORM\Column(name="part_number", type="string", length=16)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $partNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="part_description", type="string", length=128, nullable=true)
     */
    private $partDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="lead_cycle_time", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $leadCycleTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime", nullable=true)
     */
    private $createTime = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_time", type="datetime", nullable=true)
     */
    private $updateTime;

    /**
     * @var \WS\TRBundle\Entity\Factory
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\Factory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produced_at", referencedColumnName="id")
     * })
     */
    private $producedAt;

    /**
     * @var \WS\TRBundle\Entity\ModelBike
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\ModelBike")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="part_ini_model", referencedColumnName="model_code")
     * })
     */
    private $partIniModel;

    /**
     * @var \WS\TRBundle\Entity\PartStatus
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\PartStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="part_status", referencedColumnName="id")
     * })
     */
    private $partStatus;

    /**
     * @var \WS\TRBundle\Entity\PartType
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\PartType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="part_type", referencedColumnName="id")
     * })
     */
    private $partType;



    /**
     * Get partNumber
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * Set partDescription
     *
     * @param string $partDescription
     *
     * @return Part
     */
    public function setPartDescription($partDescription)
    {
        $this->partDescription = $partDescription;

        return $this;
    }

    /**
     * Get partDescription
     *
     * @return string
     */
    public function getPartDescription()
    {
        return $this->partDescription;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Part
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set leadCycleTime
     *
     * @param string $leadCycleTime
     *
     * @return Part
     */
    public function setLeadCycleTime($leadCycleTime)
    {
        $this->leadCycleTime = $leadCycleTime;

        return $this;
    }

    /**
     * Get leadCycleTime
     *
     * @return string
     */
    public function getLeadCycleTime()
    {
        return $this->leadCycleTime;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     *
     * @return Part
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
     * @return Part
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
     * Set producedAt
     *
     * @param \WS\TRBundle\Entity\Factory $producedAt
     *
     * @return Part
     */
    public function setProducedAt(\WS\TRBundle\Entity\Factory $producedAt = null)
    {
        $this->producedAt = $producedAt;

        return $this;
    }

    /**
     * Get producedAt
     *
     * @return \WS\TRBundle\Entity\Factory
     */
    public function getProducedAt()
    {
        return $this->producedAt;
    }

    /**
     * Set partIniModel
     *
     * @param \WS\TRBundle\Entity\ModelBike $partIniModel
     *
     * @return Part
     */
    public function setPartIniModel(\WS\TRBundle\Entity\ModelBike $partIniModel = null)
    {
        $this->partIniModel = $partIniModel;

        return $this;
    }

    /**
     * Get partIniModel
     *
     * @return \WS\TRBundle\Entity\ModelBike
     */
    public function getPartIniModel()
    {
        return $this->partIniModel;
    }

    /**
     * Set partStatus
     *
     * @param \WS\TRBundle\Entity\PartStatus $partStatus
     *
     * @return Part
     */
    public function setPartStatus(\WS\TRBundle\Entity\PartStatus $partStatus = null)
    {
        $this->partStatus = $partStatus;

        return $this;
    }

    /**
     * Get partStatus
     *
     * @return \WS\TRBundle\Entity\PartStatus
     */
    public function getPartStatus()
    {
        return $this->partStatus;
    }

    /**
     * Set partType
     *
     * @param \WS\TRBundle\Entity\PartType $partType
     *
     * @return Part
     */
    public function setPartType(\WS\TRBundle\Entity\PartType $partType = null)
    {
        $this->partType = $partType;

        return $this;
    }

    /**
     * Get partType
     *
     * @return \WS\TRBundle\Entity\PartType
     */
    public function getPartType()
    {
        return $this->partType;
    }
}
