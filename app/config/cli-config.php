<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = GetEntityManager();
/** @var \Doctrine\DBAL\Connection $connection */
$config = $connection->getConfiguration();


//$config->setFilterSchemaAssetsExpression('/^(j17_contentitem_tag_map).*$/');
$config->setFilterSchemaAssetsExpression('/^(?!j17_contentitem_tag_map).*$/');



return ConsoleRunner::createHelperSet($entityManager);
