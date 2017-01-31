<?php
   // instantiate the object i.e. starts program
   $obj = new main();

   //main class has the main functions of your program
   class main {
     //this is the first function called
     public function __construct() {
     //this shows calling a static method to create the car object from a factory
       echo 'Program Started </br>';
       $car = carFactory::create();
     //this shows calling methods on the created object
       $car->accelerate();
       $car->decelerate();

     //this is how you print out the contents of the object
       print_r($car);
     }
    //this is the last function called at the end of the program
     public function __destruct() {
       echo 'Program Ended </br>';  
     }
   }
   //this is how you create car objects demonstrates factory pattern
   class carFactory {
     public static function create() {
       $car = new car;
       return $car;
     }
   }

   //this is you car class that is the object of the program
   abstract class vehicle {
     public function accelerate() {
       echo 'going faster </br>';
     }
     public function decelerate() {
       echo 'going slower </br>';
     }
   }

   class car extends vehicle {
      //these are properties of the car object
      public $make;
      public $model;
      public $year;

      public function __construct() {
      //this is how to set internal default properties
        $this->make = 'ford';
        $this->year = date("Y");
     }
  }


?>
