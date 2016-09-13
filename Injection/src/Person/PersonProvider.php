<?php

namespace Injection\Person;


class PersonProvider
{
    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;

    }

    public function name()
    {
        printf('Bonjour %s', $this->person);
    }

}