<?php

require __DIR__ . '/boostrap.php';


$competition = new \Foo\Competition();
$entityManager->persist($competition);

$entityManager->flush();
