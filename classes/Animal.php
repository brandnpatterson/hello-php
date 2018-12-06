<?php

class Animal
{
    public $name;
    public $sound;
    public static $animalCount = 0;

    function __construct($name = 'an animal', $sound = 'growl')
    {
        $this->name = $name;
        $this->sound = $sound;
        self::$animalCount++;
    }

    public function speak()
    {
        return "$this->name says $this->sound \n";
    }

    public function getAnimalCount()
    {
        return "There are " . self::$animalCount . " Animals\n";
    }
}