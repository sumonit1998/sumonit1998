<?php

namespace App\Repository;

use App\Entity\TeamPlayer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TeamPlayer>
 *
 * @method TeamPlayer|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeamPlayer|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeamPlayer[]    findAll()
 * @method TeamPlayer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamPlayerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamPlayer::class);
    }

    public function save(TeamPlayer $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TeamPlayer $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
// ->where('l.status = :status')
// ->setParameter('status', 1)
    // ->leftJoin('App\Entity\Player', 'p', 'WITH', 'tp.player = p.id')
                // ->select('tp', 'p', 'l')
            // ->andWhere('l.status <> :status')
            // ->setParameter('status', 1)

    public function findTeamPlayers($teamid)
    {
        return $this->createQueryBuilder('tp')
            ->leftJoin('App\Entity\Team', 't', 'WITH', 'tp.team = t.id')
            ->select('tp')
            ->where('tp.team = :team')
            ->setParameter('team', $teamid)
            ->leftJoin('App\Entity\Player', 'p', 'WITH', 'tp.player = p.id')
            ->select('p')
            ->leftJoin('App\Entity\Listing', 'l', 'WITH', 'l.player <> p.id')
            ->getQuery()
            ->getResult();
    }


            // ->leftJoin('App\Entity\Listing', 'l', 'WITH', 'tp.player = l.player')
            // ->andWhere('l.status <> :status')
            // ->setParameter('status', 0)


//    /**
//     * @return TeamPlayer[] Returns an array of TeamPlayer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TeamPlayer
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
