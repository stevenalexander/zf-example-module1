<?php

namespace ExampleCommon\Entity;

class Person
{
    public $firstName;
    public $lastName;

    public function __toString()
    {
        return "Person: $this->firstName $this->lastName";
    }
}