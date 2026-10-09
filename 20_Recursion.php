<!-- Wap to add 1 to 10 using recursion i phpp -->


<?php
    function sum($n){
        if($n==10){
            return 10;

        }
        else{
            return $n + sum($n+1);
        }
    }
    echo "Total is : ".sum(1);
    ?>