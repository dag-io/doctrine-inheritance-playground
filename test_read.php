<?php

require __DIR__ . '/boostrap.php';

/** @var \Foo\Repository\OutcomeRepository $repository */
$repository = $entityManager->getRepository('Foo\Outcome');

/** @var \Foo\Outcome[] $outcomes */
$outcomes = $repository->findByType([
    Foo\ThreeWayMatchOutcome::class,
    Foo\OverUnderMatchOutcome::class
]);

foreach ($outcomes as $outcome) {
    echo " >id:" . $outcome->getId() . "\n";
    echo " >type:" . get_class($outcome) . "\n";

    echo "\n";
}
