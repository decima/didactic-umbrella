<?php
/**
 * Created by PhpStorm.
 * User: decima
 * Date: 07/02/19
 * Time: 00:14
 */

namespace App\Repository;


use App\Entity\Pilote;
use Doctrine\ORM\EntityRepository;

/**
 * Class AvionRepository
 * @package App\Repository
 */
class AvionRepository extends EntityRepository
{

    public function getAvionFavoris(Pilote $pilote)
    {
        $qb = $this->createQueryBuilder("a")
            ->where("a.pilotesFavoris = :pilote")
        ->setParameter("pilote",$pilote);
    }
}