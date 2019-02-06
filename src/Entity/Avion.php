<?php
/**
 * Created by PhpStorm.
 * User: decima
 * Date: 06/02/19
 * Time: 23:39
 */

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Avion
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\AvionRepository")
 * @ORM\Table(name="avions")
 */
class Avion
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;


    /**
     * @var Pilote
     * @ORM\ManyToOne(targetEntity="Pilote", inversedBy="proprietes")
     */
    private $proprietaire;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Pilote",mappedBy="avionsFavoris")
     */
    private $pilotesFavoris;


    public function setProprietaire(Pilote $pilote)
    {
        $this->proprietaire = $pilote;
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


}