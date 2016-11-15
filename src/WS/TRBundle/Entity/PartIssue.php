<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PartIssue
 *
 * @ORM\Table(name="part_issue", indexes={@ORM\Index(name="IDX_81DE74DDAF00DFC1", columns={"part_number"})})
 * @ORM\Entity
 */
class PartIssue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="part_issue", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $partIssue;

    /**
     * @var integer
     *
     * @ORM\Column(name="dc_number", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dcNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true)
     */
    private $notes;

    /**
     * @var \WS\TRBundle\Entity\Part
     *
     * @ORM\OneToOne(targetEntity="WS\TRBundle\Entity\Part")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="part_number", referencedColumnName="part_number", unique=true)
     * })
     */
    private $partNumber;



    /**
     * Set partIssue
     *
     * @param integer $partIssue
     *
     * @return PartIssue
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
     * Set dcNumber
     *
     * @param integer $dcNumber
     *
     * @return PartIssue
     */
    public function setDcNumber($dcNumber)
    {
        $this->dcNumber = $dcNumber;

        return $this;
    }

    /**
     * Get dcNumber
     *
     * @return integer
     */
    public function getDcNumber()
    {
        return $this->dcNumber;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return PartIssue
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
     * Set partNumber
     *
     * @param \WS\TRBundle\Entity\Part $partNumber
     *
     * @return PartIssue
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
}
