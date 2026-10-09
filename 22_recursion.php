<!-- write a program to calculate sum of digit of sny no.-->
 <?php
    function sumofdigit($n){
        if($n==0){
            return 0;

        }
        else{
            $r=$n%10;
            return $r+ sumofdigit(($n-$r)/10);
        }
    }
    echo "Total is : ".sumofdigit(135);
    ?>