<?php
namespace Foo\Repository;

use Doctrine\ORM\EntityRepository;

class OutcomeRepository extends EntityRepository
{
    public function findByType($classes)
    {
        $instanceOf = [];
        foreach ($classes as $class) {
            $instanceOf[] = "outcome INSTANCE OF " . $class;
        }

        $queryBuilder = $this->_em
            ->createQueryBuilder();

        return $queryBuilder
            ->select('outcome')
            ->from('Foo\Outcome', 'outcome')
            ->where(call_user_func_array([$queryBuilder->expr(), 'orx'], $instanceOf))
            ->getQuery()
            ->getResult();
    }
}
