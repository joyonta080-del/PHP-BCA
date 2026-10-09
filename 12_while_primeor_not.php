//<!-- Wap to check a no.is prime or not using while loop -->

<?php
$a=17;
$i=2;
$flag=0;
while($i<=$a/2){
    if($a%$i==0){
        echo"Not prime";
        $flag =1;
        break;

    }
    $i++;
}
if( $flag == 0){
    echo "prime";

}
?>