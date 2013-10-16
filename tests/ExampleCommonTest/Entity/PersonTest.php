<?php
namespace ExampleCommonTest\Entity;

include_once('../src/ExampleCommon/Entity/Person.php');

use ExampleCommon\Entity\Person;
use PHPUnit_Framework_TestCase;

class PersonTest extends PHPUnit_Framework_TestCase
{
    public function testInitialState()
    {
        $person = new Person();
        $person->firstName = "alec";
        $person->lastName = "test";

        $this->assertEquals($person->firstName, "alec");
        $this->assertEquals($person->lastName, "test");
    }
}