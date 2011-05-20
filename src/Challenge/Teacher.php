<?php

namespace Challenge;

use Challenge\Person;

/**
 * Teacher class is the class used for information specific to teachers
 *
 * @author Clement Ridoret <clement.ridoret@gmail.com>
 */
class Teacher extends Person
{
    /**
     * The Teacher's title
     *
     * @var string
     */
    private $title;

    /**
     * The Teacher's Classes
     *
     * @var array
     */
    private $classes;

    /**
     * Returns the name of the Teacher with the title prepended
     *
     * @return string
     */
    public function __toString()
    {
        if (!empty($this->title)) {
            return $this->title . '. ' . $this->name;
        }
        else {
            return $this->name;
        }
    }

    /**
     * Returns the Teacher's Title
     *
     * @return string The Teacher's Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the Teacher's Title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the Teacher's Classes
     *
     * @return array The Teacher's Classes
     */
    public function getClasses()
    {
        return $this->class;
    }

    /**
     * Adds a Class to the Teacher's Classes
     *
     * @param string $class
     * @return void
     */
    public function addClass($class)
    {
        $this->class[] = $class;
    }

    /**
     * Returns the formatted information for the Teacher's Classes
     *
     * @return string The formated information for the Teacher's Classes
     */
    public function getClassesInfo()
    {
        $classes = '';
        foreach ($this->getClasses() as $class) {
            $classinfo = "    %s\n";
            $classinfo = sprintf($classinfo, $class);
            $classes .= $classinfo;
        }

        return $classes;
    }

    /**
     * Returns the formatted information of the Teacher
     *
     * @return string The formated information of the Teacher
     */
    public function getinfo()
    {
        $info = "<%s>\nname: %s\nbirthday: %s\nclasses:\n%s";

        return sprintf( $info, 
                        $this->get_class_name(), 
                        $this, 
                        $this->getBirthDate(), 
                        $this->getClassesInfo()
                );
    }

    /**
     * Prints the information about the Teacher
     *
     * @return void
     */
    public function printinfo()
    {
        print $this->getinfo() . "\r\n";
    }
}