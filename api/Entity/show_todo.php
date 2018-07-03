<?php
// show_todo.php <id>
require_once "entity-con.php";

$id = $argv[1];
$todo = $entityManager->find('Todo', $id);

if ($todo === null) {
    echo "No Item found.\n";
    exit(1);
}

echo sprintf("-%s\n", $todo->getName());
