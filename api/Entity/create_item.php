<?php
// create_item.php <name>
require_once "entity-con.php";

$newItemName = $argv[1];

$item = new Item();
$item->setName($newItemName);
$entityManager->persist($item);
$entityManager->flush();

echo "Created Item with ID " . $item->getId() . "\n";
