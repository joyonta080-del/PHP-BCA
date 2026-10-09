<?php
// wap to print age category.
$age=99;
switch(true){
    case($age<=12):
      echo "child";
      break;
    case($age>=13 and $age<=19):
        echo "Teenager";
        break;
    case($age>=20 and $age<=45):
        echo "Young";
        break;
    case($age>=46 and $age<=60):
        echo "Middle aged";
        break;
    default:
        echo "Old";

}
    ?>
    
