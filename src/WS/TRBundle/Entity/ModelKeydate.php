<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelKeydate
 *
 * @ORM\Table(name="model_keydate")
 * @ORM\Entity
 */
class ModelKeydate
{
    /**
     * @var string
     *
     * @ORM\Column(name="P1", type="string", length=32, nullable=true)
     */
    private $p1;

    /**
     * @var string
     *
     * @ORM\Column(name="P2", type="string", length=32, nullable=true)
     */
    private $p2;

    /**
     * @var string
     *
     * @ORM\Column(name="T1", type="string", length=32, nullable=true)
     */
    private $t1;

    /**
     * @var string
     *
     * @ORM\Column(name="T1_5", type="string", length=32, nullable=true)
     */
    private $t15;

    /**
     * @var string
     *
     * @ORM\Column(name="T2", type="string", length=32, nullable=true)
     */
    private $t2;

    /**
     * @var \WS\TRBundle\Entity\ModelBike
     *
     * @ORM\OneToOne(targetEntity="WS\TRBundle\Entity\ModelBike")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_code", referencedColumnName="model_code", unique=true)
     * })
     */
    private $modelCode;



    /**
     * Set p1
     *
     * @param string $p1
     *
     * @return ModelKeydate
     */
    public function setP1($p1)
    {
        $this->p1 = $p1;

        return $this;
    }

    /**
     * Get p1
     *
     * @return string
     */
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * Set p2
     *
     * @param string $p2
     *
     * @return ModelKeydate
     */
    public function setP2($p2)
    {
        $this->p2 = $p2;

        return $this;
    }

    /**
     * Get p2
     *
     * @return string
     */
    public function getP2()
    {
        return $this->p2;
    }

    /**
     * Set t1
     *
     * @param string $t1
     *
     * @return ModelKeydate
     */
    public function setT1($t1)
    {
        $this->t1 = $t1;

        return $this;
    }

    /**
     * Get t1
     *
     * @return string
     */
    public function getT1()
    {
        return $this->t1;
    }

    /**
     * Set t15
     *
     * @param string $t15
     *
     * @return ModelKeydate
     */
    public function setT15($t15)
    {
        $this->t15 = $t15;

        return $this;
    }

    /**
     * Get t15
     *
     * @return string
     */
    public function getT15()
    {
        return $this->t15;
    }

    /**
     * Set t2
     *
     * @param string $t2
     *
     * @return ModelKeydate
     */
    public function setT2($t2)
    {
        $this->t2 = $t2;

        return $this;
    }

    /**
     * Get t2
     *
     * @return string
     */
    public function getT2()
    {
        return $this->t2;
    }

    /**
     * Set modelCode
     *
     * @param \WS\TRBundle\Entity\ModelBike $modelCode
     *
     * @return ModelKeydate
     */
    public function setModelCode(\WS\TRBundle\Entity\ModelBike $modelCode = null)
    {
        $this->modelCode = $modelCode;

        return $this;
    }

    /**
     * Get modelCode
     *
     * @return \WS\TRBundle\Entity\ModelBike
     */
    public function getModelCode()
    {
        return $this->modelCode;
    }
}
