<?php

require __DIR__ . '/boostrap.php';


$match = new \Foo\Match();
$match->setName('Barca - Madrid');
$entityManager->persist($match);

$overUnderMatchOutcome = new \Foo\OverUnderMatchOutcome();
$overUnderMatchOutcome->setGoalsTotal(2.5);
$overUnderMatchOutcome->setMatch($match);
$overUnderMatchOutcome->setStatus('success');
$overUnderMatchOutcome->setCreatedAt(new DateTime());
$overUnderMatchOutcome->setUpdatedAt(new DateTime());
$entityManager->persist($overUnderMatchOutcome);

$entityManager->flush();
