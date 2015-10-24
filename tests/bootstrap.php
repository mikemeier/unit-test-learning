<?php

use Composer\Autoload\ClassLoader;

/** @var ClassLoader $loader */
if (!$loader = include __DIR__ . '/../vendor/autoload.php') {
    die('You must set up the project dependencies, run the following commands:' . PHP_EOL .
        'curl -s http://getcomposer.org/installer | php' . PHP_EOL .
        'php composer.phar install' . PHP_EOL
    );
}

$loader->addPsr4('Ibrows\PHPUnit\Learn\Test\\', __DIR__);