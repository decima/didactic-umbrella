<?php
/**
 * Created by PhpStorm.
 * User: decima
 * Date: 06/02/19
 * Time: 23:12
 */

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Pilote
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table(name="pilotes")
 */
class Pilote
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $salaire;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $biographie;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Avion", mappedBy="proprietaire")
     */
    private $proprietes;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Avion",inversedBy="pilotesFavoris")
     */
    private $avionsFavoris;


    public function __construct()
    {
        $this->proprietes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addAvion(Avion $avion)
    {
        $avion->setProprietaire($this);
        $this->proprietes->add($avion);
    }

    public function getAvions()
    {
        return $this->proprietes;
    }


}