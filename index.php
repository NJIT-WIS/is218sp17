<?php
   
   $program = new main();

   class main {

     public function __construct() {
       if($_SERVER['REQUEST_METHOD'] == 'GET') {

           echo 'get request';
       } else {
           echo 'something else is requested';
       }
       
       print_r($_REQUEST);
     }
   }

?>
