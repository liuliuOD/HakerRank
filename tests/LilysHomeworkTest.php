<?php

use \Algorithms\LilysHomework;

class LilysHomeworkTest extends \PHPUnit\Framework\TestCase
{
    public function testDemo()
    {
        $lilysHomework = new LilysHomework();

        $demo = $lilysHomework->demo();

        $this->assertEquals(3, $demo);
    }
}
