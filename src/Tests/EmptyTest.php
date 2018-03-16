<?php
/**
 * Created by PhpStorm.
 * User: zakirovigor
 * Date: 16.03.2018
 * Time: 22:04
 */

namespace PHPPerf\Tests;


use PHPPerf\TestInterface;

class EmptyTest implements TestInterface
{
    public function benchmark()
    {
        // empty
    }

}