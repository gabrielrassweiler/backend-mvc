<?php

namespace backend\Helper;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMSetup;

class EntityManagerFactory
{
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManager
    {
        $paths = [__DIR__ . '/../Model'];
        $isDevMode = true;

        // the connection configuration
        $dbParams = [
            'driver' => 'pdo_pgsql',
            'host' => 'localhost',
            'port' => '5433',
            'user' => 'root',
            'password' => 'root',
            'dbname' => 'backend',
        ];

        $config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
        $connection = DriverManager::getConnection($dbParams, $config);
        return new EntityManager($connection, $config);
    }
}
