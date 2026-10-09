<!-- wap to  sort data of  an array -->

<?php 
    $arr=[10,2,6,4,3];
    sort($arr); //ascending order
    foreach($arr as $item){
        echo "$item<br>";
   }

    echo "<br><br>";

    rsort($arr); //Descending order sort
    foreach ($arr as $data){
        echo "$data<br>";
    }


    echo "<pre>";
    print_r(array_reverse($arr));
    echo "</pre>";

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    ?>