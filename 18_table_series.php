<!-- Wap to create a function to print table series -->
<?php
    function tableSeries($n){
        for($i=1;$i<=10;$i++){
            echo "$n * $i = ".($n*$i). "<br>";
        }
    }

    tableSeries(50);
    ?>