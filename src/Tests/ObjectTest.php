<?php
/**
 * Created by PhpStorm.
 * User: zakirovigor
 * Date: 16.03.2018
 * Time: 21:40
 */

namespace PHPPerf\Tests;

use PHPPerf\TestInterface;
use PHPPerf\Tests\ObjectTest\Object;

class ObjectTest implements TestInterface
{
    public function benchmark()
    {
        $o = new Object();

        $o->first = 'uno';
        $o->second = 'due';
        $o->third = 'tre';
        $o->fourth = 'quattro';
        $o->fifth = 'cinque';
        $o->sixth = 'sei';
        $o->seventh = 'sette';
        $o->eigth = 'otto';
        $o->nigth = 'nove';
        $o->ten = 'dieci';

        $s1 = $o->first;
        $s2 = $o->second;
        $s3 = $o->third;
        $s4 = $o->fourth;
        $s5 = $o->fifth;
        $s6 = $o->sixth;
        $s7 = $o->seventh;
        $s8 = $o->eigth;
        $s9 = $o->nigth;
        $s10 = $o->ten;
    }

}