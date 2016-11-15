<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductionReject
 *
 * @ORM\Table(name="production_reject", indexes={@ORM\Index(name="fk_rejected_part_production_run1_idx", columns={"production_run_id"})})
 * @ORM\Entity
 */
class ProductionReject
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
     * @var integer
     *
     * @ORM\Column(name="number_of_part", type="smallint", nullable=true)
     */
    private $numberOfPart;

    /**
     * @var string
     *
     * @ORM\Column(name="reject_detail", type="text", length=65535, nullable=true)
     */
    private $rejectDetail;

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
     * @var \WS\TRBundle\Entity\ProductionRun
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\ProductionRun")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="production_run_id", referencedColumnName="id")
     * })
     */
    private $productionRun;



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
     * Set numberOfPart
     *
     * @param integer $numberOfPart
     *
     * @return ProductionReject
     */
    public function setNumberOfPart($numberOfPart)
    {
        $this->numberOfPart = $numberOfPart;

        return $this;
    }

    /**
     * Get numberOfPart
     *
     * @return integer
     */
    public function getNumberOfPart()
    {
        return $this->numberOfPart;
    }

    /**
     * Set rejectDetail
     *
     * @param string $rejectDetail
     *
     * @return ProductionReject
     */
    public function setRejectDetail($rejectDetail)
    {
        $this->rejectDetail = $rejectDetail;

        return $this;
    }

    /**
     * Get rejectDetail
     *
     * @return string
     */
    public function getRejectDetail()
    {
        return $this->rejectDetail;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     *
     * @return ProductionReject
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
     * @return ProductionReject
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
     * Set productionRun
     *
     * @param \WS\TRBundle\Entity\ProductionRun $productionRun
     *
     * @return ProductionReject
     */
    public function setProductionRun(\WS\TRBundle\Entity\ProductionRun $productionRun = null)
    {
        $this->productionRun = $productionRun;

        return $this;
    }

    /**
     * Get productionRun
     *
     * @return \WS\TRBundle\Entity\ProductionRun
     */
    public function getProductionRun()
    {
        return $this->productionRun;
    }
}
