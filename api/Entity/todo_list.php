<?php
// todo_list.php
require_once "entity-con.php";

$todoRepository = $entityManager->getRepository('Todo');
$todos = $todoRepository->findAll();

foreach ($todos as $todo) {
    echo sprintf("-%s\n", $todos->getName());
}
