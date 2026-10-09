<!-- wap to show associative array -->
 <?php
 $arr = [
    1=>"Joy",
    2=>"Rohit",
    3=>"Rahul",
    4=>"Purna"
 ] ;
 foreach($arr as $key=>$data){
    echo $key." ".$data."<br>";
 }
 ?>