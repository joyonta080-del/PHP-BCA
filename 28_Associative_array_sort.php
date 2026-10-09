<!--- WAP to sort assocciative array -->
<?php
  $arr=[
    "joy"=>21, //key=>value
    "Jiban"=>21,
    "nabin"=>35,
    "Rojoni"=>55
   ];  // Associative array


   // value sorting (ascending order)
   asort($arr);
   echo "<pre>";
   print_r($arr);
   echo "</pre>";

   //key sorting (Ascending order)
  ksort($arr);
   echo "<pre>";
   print_r($arr);
   echo "</pre>";

   //value reverse sorting (Descending order)
   arsort($arr);
   echo "<pre>";
   print_r($arr);
   echo "</pre>";

   //key reversort 
   krsort($arr);
   echo "<pre>";
   print_r($arr);
   echo "</pre>";
 ?>  