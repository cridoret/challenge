<?php

namespace Challenge;

/**
 * PersonInterface is the interface implemented by all person classes.
 *
 * @author Clement Ridoret <clement.ridoret@gmail.com>
 */
interface PersonInterface
{
    /**
     * Returns the name of the class in lower case
     *
     * @return string The name of the class in lower case
     */
    function get_class_name();

    /**
     * Prints the information about the Person
     *
     * @return void
     */
    function printinfo();
}