<?php

use backend\Helper\EntityManagerFactory;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

// replace with file to your own project bootstrap
// require_once 'bootstrap.php';
require_once __DIR__ . '/../index.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = (new EntityManagerFactory())->getEntityManager();

ConsoleRunner::run(new SingleManagerProvider($entityManager));
