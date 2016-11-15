<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductionRun
 *
 * @ORM\Table(name="production_run", indexes={@ORM\Index(name="fk_production_run_production_line1_idx", columns={"production_line"}), @ORM\Index(name="fk_production_run_parts1_idx", columns={"part_number"})})
 * @ORM\Entity
 */
class ProductionRun
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
     * @ORM\Column(name="start", type="datetime", nullable=false)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stop", type="datetime", nullable=false)
     */
    private $stop;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_produced", type="smallint", nullable=false)
     */
    private $numberProduced;

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
     * @var integer
     *
     * @ORM\Column(name="part_issue", type="smallint", nullable=true)
     */
    private $partIssue;

    /**
     * @var \WS\TRBundle\Entity\Part
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\Part")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="part_number", referencedColumnName="part_number")
     * })
     */
    private $partNumber;

    /**
     * @var \WS\TRBundle\Entity\ProductionLine
     *
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
     * Set start
     *
     * @param \DateTime $start
     *
     * @return ProductionRun
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set stop
     *
     * @param \DateTime $stop
     *
     * @return ProductionRun
     */
    public function setStop($stop)
    {
        $this->stop = $stop;

        return $this;
    }

    /**
     * Get stop
     *
     * @return \DateTime
     */
    public function getStop()
    {
        return $this->stop;
    }

    /**
     * Set numberProduced
     *
     * @param integer $numberProduced
     *
     * @return ProductionRun
     */
    public function setNumberProduced($numberProduced)
    {
        $this->numberProduced = $numberProduced;

        return $this;
    }

    /**
     * Get numberProduced
     *
     * @return integer
     */
    public function getNumberProduced()
    {
        return $this->numberProduced;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     *
     * @return ProductionRun
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
     * @return ProductionRun
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
     * Set partIssue
     *
     * @param integer $partIssue
     *
     * @return ProductionRun
     */
    public function setPartIssue($partIssue)
    {
        $this->partIssue = $partIssue;

        return $this;
    }

    /**
     * Get partIssue
     *
     * @return integer
     */
    public function getPartIssue()
    {
        return $this->partIssue;
    }

    /**
     * Set partNumber
     *
     * @param \WS\TRBundle\Entity\Part $partNumber
     *
     * @return ProductionRun
     */
    public function setPartNumber(\WS\TRBundle\Entity\Part $partNumber = null)
    {
        $this->partNumber = $partNumber;

        return $this;
    }

    /**
     * Get partNumber
     *
     * @return \WS\TRBundle\Entity\Part
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * Set productionLine
     *
     * @param \WS\TRBundle\Entity\ProductionLine $productionLine
     *
     * @return ProductionRun
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
