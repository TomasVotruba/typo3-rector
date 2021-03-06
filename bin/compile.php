<?php

declare(strict_types = 1);

use Ssch\TYPO3Rector\Compiler\Console\RectorCompilerConsoleApplication;
use Ssch\TYPO3Rector\Compiler\DependencyInjection\ContainerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$containerFactory = new ContainerFactory();
$container = $containerFactory->create();

/** @var RectorCompilerConsoleApplication $application */
$application = $container->get(RectorCompilerConsoleApplication::class);
exit($application->run());
