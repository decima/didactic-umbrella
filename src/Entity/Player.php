<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 06/02/19
 * Time: 17:44
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Player
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\PlayerRepository")
 * @ORM\Table("players")
 *
 */
class Player
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $username;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $email;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

}