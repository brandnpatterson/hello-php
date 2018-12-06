<?php
require 'classes/Animal.php';
require 'classes/Pet.php';

$giraffee = new Animal('giraffe', 'nayyy');
$beth = new Pet('Beth', 'bark', 'Brandon');
$polly = new Pet('Polly', 'tweet');

echo $giraffee->speak();
echo $beth->speak();
echo $beth->getOwner();
echo $polly->getOwner();

echo Animal::getAnimalCount();