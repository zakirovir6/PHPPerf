<?php

require __DIR__ . '/vendor/autoload.php';

$tests = [
    \PHPPerf\Tests\EmptyTest::class,
    \PHPPerf\Tests\ArrayTest::class,
    \PHPPerf\Tests\ObjectTest::class
];

$args = [];

for ($arg = 1; $arg < $argc; $arg++)
{
    $param = explode('=', $argv[$arg]);
    $args[$param[0]] = $param[1] ?? null;
}

$testTime = (int)($args['time'] ?? 30);

echo sprintf('%-50s%-12s', 'test', 'benchmark');
echo PHP_EOL;
/** @var \PHPPerf\TestInterface $test */
foreach ($tests as $testName) {
    $timeStart = microtime(true);
    $testBenchmarks = 0;
    $test = new $testName();
    while(true) {
        $testBenchmarks++;
        $test->benchmark();

        if (microtime(true) - $timeStart > $testTime) {
            break;
        }
    }

    echo sprintf("%-50s%12d", $testName, $testBenchmarks);
    echo PHP_EOL;
}
