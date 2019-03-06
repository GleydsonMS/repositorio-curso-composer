<?php

require __DIR__ . '/vendor/autoload.php';

use GleydsonMira\CursoSON\Hello;

// create a log channel
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

// add records to the log
$log->warning((new Hello)->say('Gleydson'));
