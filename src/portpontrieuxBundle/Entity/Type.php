<?php

namespace portpontrieuxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity(repositoryClass="portpontrieuxBundle\Repository\TypeRepository")
 */
class Type
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="string", length=10)
     */
    private $situation;

    /**
     * @var int
     *
     * @ORM\Column(name="profondeur", type="smallint")
     */
    private $profondeur;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set situation
     *
     * @param string $situation
     *
     * @return Type
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return string
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set profondeur
     *
     * @param integer $profondeur
     *
     * @return Type
     */
    public function setProfondeur($profondeur)
    {
        $this->profondeur = $profondeur;

        return $this;
    }

    /**
     * Get profondeur
     *
     * @return int
     */
    public function getProfondeur()
    {
        return $this->profondeur;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Type
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
