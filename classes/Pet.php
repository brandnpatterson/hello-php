<?php

class Pet extends Animal
{
    public $owner;

    public function __construct($name, $sound, $owner = 'Pet Shelter')
    {
        parent::__construct();

        $this->name = $name;
        $this->sound = 'happy ' . $sound;
        $this->owner = $owner;
    }

    public function getOwner()
    {
        echo $this->name . "'s owner is " . $this->owner . "\n";
    }
}