<?php

namespace Challenge;

/**
 * Person is the class used for information common to all persons
 *
 * @author Clement Ridoret <clement.ridoret@gmail.com>
 */
abstract class Person implements PersonInterface
{
    /**
     * Person's Name
     *
     * @var string The Person's Name
     */
    protected $name;

    /**
     * Person's Date of Birth
     *
     * @var DateTime The Person's Date of Birth
     */
    protected $birthDate;

    /**
     * Returns the Person's Name
     *
     * @return string The Person's Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the Person's Name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the Person's Date of Birth
     *
     * @return string The Person's Date of Birth
     */
    public function getBirthDate()
    {
        return $this->birthDate->format('n/j/Y');
    }

    /**
     * Sets the Person's Date of Birth
     *
     * @param string $birthDate
     * @return void
     */
    public function setBirthDate($birthDate)
    {
        $date = \DateTime::createFromFormat('m-d-Y', $birthDate);
        if ($date) {
            $this->birthDate = $date;
        }
        else {
            return false;
        }
    }

    /**
     * Returns the name of the class in lower case
     *
     * @return string The name of the class in lower case
     */
    public function get_class_name()
    {
        $class = explode('\\', (get_class($this)));

        return strtolower($class[count($class) - 1]);
    }
}