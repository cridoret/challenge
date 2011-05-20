<?php

class bootstrapTest extends \PHPUnit_Framework_TestCase
{
    public function testBootstrap()
    {
        $this->assertTrue(file_exists($file = __DIR__.'/../autoload.php'));
    }
}