<?php
/**
 * Created by PhpStorm.
 * User: decima
 * Date: 06/02/19
 * Time: 22:12
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Game
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table(name="games")
 */
class Game
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string",length=100)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string",length=255)
     */
    private $image;

}