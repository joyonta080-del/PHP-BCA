<?php
    define ("PI",3.14);

    function area($r){
        echo "Area is : ".(PI*$r**2)."<br>";
    }

    function perimeter($r){
        echo "Perimeter is : ".(2*PI*$r) ."<br>";
    }

    area(10);
    perimeter(20);

    ?>