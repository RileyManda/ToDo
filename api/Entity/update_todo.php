<?php
//Entity/update_todo.php <id> <new-name>
require_once "entity-con.php";

$id = $argv[1];
$newName = $argv[2];

$todo = $entityManager->find('Todo', $id);

if ($todo === null) {
    echo "Todo $id does not exist.\n";
    exit(1);
}

$todo->setName($newName);

$entityManager->flush();
