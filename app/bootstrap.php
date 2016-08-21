<?php
use \DI\ContainerBuilder;

require '../vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__.'/config.php');

return $containerBuilder->build();