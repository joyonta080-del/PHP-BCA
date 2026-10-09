//using do while locale_compose
<?php
$a=11;
$i=2;
$flag=0;
do {
    if($a%$i==0){
        echo"Not prime";
        $flag =1;
        break;

    }
    $i++;
}
while($i<=$a/2);
if( $flag == 0){
    echo "prime";
}
?>