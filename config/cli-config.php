<?php

use backend\Helper\EntityManagerFactory;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
// require_once 'bootstrap.php';
require_once __DIR__ . '/../vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = (new EntityManagerFactory())->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);