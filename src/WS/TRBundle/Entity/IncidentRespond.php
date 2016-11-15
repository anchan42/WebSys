<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IncidentRespond
 *
 * @ORM\Table(name="incident_respond", indexes={@ORM\Index(name="fk_respond_incident1_idx", columns={"incident_id"})})
 * @ORM\Entity
 */
class IncidentRespond
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="text", length=65535, nullable=false)
     */
    private $detail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="respond_start_time", type="datetime", nullable=true)
     */
    private $respondStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="respond_stop_time", type="datetime", nullable=true)
     */
    private $respondStopTime;

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
     * @var \WS\TRBundle\Entity\Incident
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\Incident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="incident_id", referencedColumnName="id")
     * })
     */
    private $incident;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return IncidentRespond
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set detail
     *
     * @param string $detail
     *
     * @return IncidentRespond
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
     * Set respondStartTime
     *
     * @param \DateTime $respondStartTime
     *
     * @return IncidentRespond
     */
    public function setRespondStartTime($respondStartTime)
    {
        $this->respondStartTime = $respondStartTime;

        return $this;
    }

    /**
     * Get respondStartTime
     *
     * @return \DateTime
     */
    public function getRespondStartTime()
    {
        return $this->respondStartTime;
    }

    /**
     * Set respondStopTime
     *
     * @param \DateTime $respondStopTime
     *
     * @return IncidentRespond
     */
    public function setRespondStopTime($respondStopTime)
    {
        $this->respondStopTime = $respondStopTime;

        return $this;
    }

    /**
     * Get respondStopTime
     *
     * @return \DateTime
     */
    public function getRespondStopTime()
    {
        return $this->respondStopTime;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     *
     * @return IncidentRespond
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
     * @return IncidentRespond
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
     * Set incident
     *
     * @param \WS\TRBundle\Entity\Incident $incident
     *
     * @return IncidentRespond
     */
    public function setIncident(\WS\TRBundle\Entity\Incident $incident = null)
    {
        $this->incident = $incident;

        return $this;
    }

    /**
     * Get incident
     *
     * @return \WS\TRBundle\Entity\Incident
     */
    public function getIncident()
    {
        return $this->incident;
    }
}
