<?php

namespace Challenge\Tests;

use Challenge\Teacher;

class TeacherTest extends \PHPUnit_Framework_TestCase
{
    public function testGetInfo()
    {
        $teacher = new Teacher();
        $teacher->setName('Robert Smith');
        $teacher->setBirthDate('03-04-1970');
        $teacher->setTitle('Mr');
        $teacher->addClass('Physics 101');
        $this->assertStringMatchesFormatFile(__DIR__ . '/expectedTeacher.txt', 
            $teacher->getinfo(), 'Teacher info not matching');
    }
}