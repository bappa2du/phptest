<?php

    require_once 'person.php';

    class PersonTest extends PHPUnit_Framework_TestCase
    {


        public function set_up()
        {
            $person = new Person('bappa');

            $bappa = $person -> get_name();

            $this -> assertEquals($bappa,'bappa');
        }
    }