<?php
// cli-config.php
require_once "src/config/config.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
