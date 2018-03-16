<?php
/**
 * Created by PhpStorm.
 * User: zakirovigor
 * Date: 16.03.2018
 * Time: 21:25
 */

namespace PHPPerf\Tests;


use PHPPerf\TestInterface;

class ArrayTest implements TestInterface
{
    public function benchmark()
    {
        $a = [];
        $a['first'] = 'uno';
        $a['second'] = 'due';
        $a['third'] = 'tre';
        $a['fourth'] = 'quattro';
        $a['fifth'] = 'cinque';
        $a['sixth'] = 'sei';
        $a['seventh'] = 'sette';
        $a['eigth'] = 'otto';
        $a['nigth'] = 'nove';
        $a['ten'] = 'dieci';

        $s1 = $a['first'];
        $s2 = $a['second'];
        $s3 = $a['third'];
        $s4 = $a['fourth'];
        $s5 = $a['fifth'];
        $s6 = $a['sixth'];
        $s7 = $a['seventh'];
        $s8 = $a['eigth'];
        $s9 = $a['nigth'];
        $s10 = $a['ten'];
    }

}