<?php

abstract class Logistic
{
    abstract public function getCar(): Car;

    public function driver()
    {
        $drive = $this->getCar();
        $drive->getModel();
        $drive->getPrice();
    }
}

class Econom extends Logistic {

    public function getCar(): Car
    {
        return new EconomCar();
    }
}

class Standart extends Logistic {

    public function getCar(): Car
    {
        return new StandartCar();
    }

}

class Premium extends Logistic {

    public function getCar(): Car
    {
        return new PremiumCar();
    }
}


interface Car
{
    public function getModel(): string;
    public function getPrice(): float;

}

class EconomCar implements Car {


    public function getModel(): string
    {
        return "You have a Econom car";
    }

    public function getPrice(): float
    {
        return "5$ price for Econom car";
    }
}

class StandartCar implements Car {

    public function getModel(): string
    {
        return "You have a Standart car";
    }

    public function getPrice(): float
    {
        return "10$ price for Standart car";
    }
}

class PremiumCar implements Car {

    public function getModel(): string
    {
        return "You have a Premium car";
    }

    public function getPrice(): float
    {
        return "15$ price for Premium car";
    }

}

function clientCode(Car $calltaxi)
{
    $calltaxi->driver();
}


