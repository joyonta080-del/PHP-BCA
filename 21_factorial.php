<!-- WAP in php to calculate factorial using recursion -->


<?php
    function fact($n){
        if($n==1){
            return 1;

        }
        else{
            return $n * fact($n-1);
        }
    }
    echo "Total is : ".fact(5);
    ?>