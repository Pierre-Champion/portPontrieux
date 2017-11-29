<?php

namespace portpontrieuxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Louer
 *
 * @ORM\Table(name="louer")
 * @ORM\Entity(repositoryClass="portpontrieuxBundle\Repository\LouerRepository")
 */
class Louer
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
    * @ORM\ManyToOne (targetEntity="portpontrieuxBundle\Entity\Emplacement") 
    * @ORM\JoinColumn(nullable=false)
    */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_bateau", type="string", length=50)
     */

    private $nomBateau;

    /**
     * @var string
     *
     * @ORM\Column(name="port_attach", type="string", length=40)
     */
    private $portAttach;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrivee", type="date")
     */
    private $dateArrivee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date")
     */
    private $dateDepart;

    /**
     * @var bool
     *
     * @ORM\Column(name="reglement", type="boolean")
     */
    private $reglement;


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
     * Set nomBateau
     *
     * @param string $nomBateau
     *
     * @return Louer
     */
    public function setNomBateau($nomBateau)
    {
        $this->nomBateau = $nomBateau;

        return $this;
    }

    /**
     * Get nomBateau
     *
     * @return string
     */
    public function getNomBateau()
    {
        return $this->nomBateau;
    }

    /**
     * Set portAttach
     *
     * @param string $portAttach
     *
     * @return Louer
     */
    public function setPortAttach($portAttach)
    {
        $this->portAttach = $portAttach;

        return $this;
    }

    /**
     * Get portAttach
     *
     * @return string
     */
    public function getPortAttach()
    {
        return $this->portAttach;
    }

    /**
     * Set dateArrivee
     *
     * @param \DateTime $dateArrivee
     *
     * @return Louer
     */
    public function setDateArrivee($dateArrivee)
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    /**
     * Get dateArrivee
     *
     * @return \DateTime
     */
    public function getDateArrivee()
    {
        return $this->dateArrivee;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Louer
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set reglement
     *
     * @param boolean $reglement
     *
     * @return Louer
     */
    public function setReglement($reglement)
    {
        $this->reglement = $reglement;

        return $this;
    }

    /**
     * Get reglement
     *
     * @return bool
     */
    public function getReglement()
    {
        return $this->reglement;
    }
}

