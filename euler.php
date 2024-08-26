#!/usr/bin/env php
<?php

declare(strict_types=1);

ini_set('memory_limit','2048M');

require_once 'vendor/autoload.php';

if ($argc !== 2 || !is_numeric($argv[1])) {
    print("Usage ./euler.php <problem number>\r\n");
    exit(255);
}

$problemId = filter_var($argv[1], FILTER_VALIDATE_INT);
$problemClassName = sprintf('\Dannyvandersluijs\ProjectEuler\Problem%03d', $problemId);

$problem = new $problemClassName();

$time_start = microtime(true);
$solution = $problem->__invoke();
$time_end = microtime(true);
printf('Solution to %d is: %s (%f sec)' . PHP_EOL, $problemId, $solution, $time_end - $time_start);