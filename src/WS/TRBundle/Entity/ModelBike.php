<?php

namespace WS\TRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelBike
 *
 * @ORM\Table(name="model_bike")
 * @ORM\Entity
 */
class ModelBike
{
    /**
     * @var string
     *
     * @ORM\Column(name="model_code", type="string", length=16)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $modelCode;

    /**
     * @var string
     *
     * @ORM\Column(name="model_note", type="string", length=225, nullable=true)
     */
    private $modelNote;

    /**
     * @var string
     *
     * @ORM\Column(name="model_year", type="string", length=32, nullable=true)
     */
    private $modelYear;

    /**
     * @var string
     *
     * @ORM\Column(name="model_comercial_name", type="string", length=225, nullable=true)
     */
    private $modelComercialName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;



    /**
     * Get modelCode
     *
     * @return string
     */
    public function getModelCode()
    {
        return $this->modelCode;
    }

    /**
     * Set modelNote
     *
     * @param string $modelNote
     *
     * @return ModelBike
     */
    public function setModelNote($modelNote)
    {
        $this->modelNote = $modelNote;

        return $this;
    }

    /**
     * Get modelNote
     *
     * @return string
     */
    public function getModelNote()
    {
        return $this->modelNote;
    }

    /**
     * Set modelYear
     *
     * @param string $modelYear
     *
     * @return ModelBike
     */
    public function setModelYear($modelYear)
    {
        $this->modelYear = $modelYear;

        return $this;
    }

    /**
     * Get modelYear
     *
     * @return string
     */
    public function getModelYear()
    {
        return $this->modelYear;
    }

    /**
     * Set modelComercialName
     *
     * @param string $modelComercialName
     *
     * @return ModelBike
     */
    public function setModelComercialName($modelComercialName)
    {
        $this->modelComercialName = $modelComercialName;

        return $this;
    }

    /**
     * Get modelComercialName
     *
     * @return string
     */
    public function getModelComercialName()
    {
        return $this->modelComercialName;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return ModelBike
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}
