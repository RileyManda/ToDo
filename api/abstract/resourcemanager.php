<?php

namespace App;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

abstract class AbstractResource
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager = null;

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        if ($this->entityManager === null) {
            $this->entityManager = $this->createEntityManager();
        }

        return $this->entityManager;
    }

    /**
     * @return EntityManager
     */
    public function createEntityManager()
    {
        $path = array('api');
        $devMode = true;

        $config = Setup::createAnnotationMetadataConfiguration($path, $devMode);

        // db credentials...
        $connectionOptions = array(
            'driver'   => 'pdo_mysql',
            'host'     => 'localhost',
            'dbname'   => 'list_db',
            'user'     => 'root',
            'password' => 'Admin2018@$#!',
        );

        return EntityManager::create($connectionOptions, $config);
    }
}
