<?php

 class User{

    private $color;
    private $name;
    private $gender;
    private $measure;
    Static $UserState = "ACTIVE";

    public function getColor():string
    {
        return $this->color;
    }
    public function getName():string 
    {
        return $this->name;
    }
    public function getGender():string
    {
        return $this->gender;
    }
    public function getMeasure():int
    {
        return $this->measure;
    }

    function __destruct()
    {
        echo "DESTR " . $this->name . " " .
        $this->color . " " .
        $this->gender;
    }

    function __construct(string $coloor, string $namee, string $gendeer, int $measuree)
    {
        $this -> color = $coloor;
        $this -> name = $namee;
        $this -> gender = $gendeer;
        $this -> measure = $measuree;
    }

    public function getProfile()
    {
        echo"User Dates: <br>";
        echo "Name: ". $this ->name."<br>";
        echo "Color: ". $this ->color."<br>";
        echo "Gender: ". $this ->gender."<br>";
        echo "Measure: ". $this ->measure."<br>";

    }

    public function changeName(string $namee)
    {
        $this -> name = $namee;
    }

 
 }


?>