<?php

namespace Challenge\Tests;

use Challenge\Student;

class StudentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider InvalidIdProvider
     * @expectedException Exception
     */
    public function testInvalidSetStudentId($id)
    {
        $student = new Student();
        $student->setStudentID($id);
    }
    
    public function InvalidIdProvider()
    {
        return array(
            array('7712345US'),
            array('912345US'),
            array('123456789'),
            array('8912345US'),
            array('9912345U4'),
            array('99124345US'),
            array('995US'),
            array('9912345us')
        );
    }
    
    /**
     * @dataProvider ValidIdProvider
     */
    public function testValidSetStudentId($id)
    {
        $student = new Student();
        $student->setStudentID($id);
    }
    
    public function ValidIdProvider()
    {
        return array(
            array('9912345US'),
            array('8899999XX'),
            array('9999999YY'),
            array('8802200CA')
        );
    }
    public function testGetInfo()
    {
        $student = new Student();
        $student->setName('John Doe');
        $student->setBirthDate('02-02-1990');
        $student->setStudentID('9912345US');
        $student->setGender('m');
        $this->assertStringMatchesFormatFile(__DIR__ . '/expectedStudent.txt', 
            $student->getinfo(), 'Student info does not match');
    }
}