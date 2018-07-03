<?php
// create_product.php <name>
require_once "entity-con.php";

$newTodoName = $argv[1];

$todo = new Todo();
$todo->setName($newTodoName);

$entityManager->persist($todo);
$entityManager->flush();

echo "Created Todo with ID " . $todo->getId() . "\n";
