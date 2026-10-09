<?php
//wap to check grade based on marks
$marks=78;

if ($marks<30){
    echo"fail<br>";
}
elseif($marks>=30 and $marks<40){
    echo"Grade D";
}
elseif($marks>=40 and $marks<50){
    echo"Grade C";
}
elseif($marks<=50 and $marks<70){
    echo"Grade B";
}
elseif($marks>=70 and $marks<90){
    echo"Grade A";
}
elseif($marks>=90 and $marks<=100){
    echo"Grade A+";
}
else{
    echo"Invalid marks.";
}