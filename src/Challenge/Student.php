<?php

namespace Challenge;

use Challenge\Person;

/**
 * Student class is the class used for information specific to students
 *
 * @author Clement Ridoret <clement.ridoret@gmail.com>
 */
class Student extends Person
{
    /**
     * Student's ID
     *
     * @var string The Student's ID
     */
    private $studentID;

    /**
     * Student's Gender
     *
     * @var string The Student's Gender
     */
    private $gender;

    /**
     * Returns the Student's ID
     *
     * @return string The Student's ID
     */
    public function getStudentID()
    {
        return $this->studentID;
    }

    /**
     * Sets the Student's ID
     *
     * The string must be nine (9) characters in length.
     * It must start with a two digit code of either 99 or 88.
     * It must then containa 5 digit string between 00000 and 99999.
     * It must end with a two alphacharacter upper case code.
     *
     * @param string $studentID
     * @return void
     * @throws Exception If the studentID is not valid
     */
    public function setStudentID($studentID)
    {
        $valid = preg_match("/^(99|88)[0-9]{5}[A-Z]{2}/",$studentID);
        if ($valid) {
            $this->studentID = $studentID;
        }
        else {
            throw new \Exception('Invalid Student ID');
        }

    }

    /**
     * Returns the Student's Gender
     *
     * @return string The Student's Gender
     */
    public function getGender()
    {
        return strtoupper($this->gender);
    }

    /**
     * Sets the Student's Gender
     *
     * @param string $gender
     * @return void
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Returns the formatted information of the Student
     *
     * @return string The formated information of the Student
     */
    public function getinfo()
    {
        $info = "<%s>\nid: %s\nname: %s\ngender: %s\nbirthday: %s";

        return sprintf( $info,   
                        $this->get_class_name(), 
                        $this->getStudentId(),
                        $this->getName(), 
                        $this->getGender(), 
                        $this->getBirthDate()
                );
    }

    /**
     * Prints the information about the Student
     *
     * @return void
     */
    public function printinfo()
    {
        print $this->getinfo() . "\r\n";
    }
}