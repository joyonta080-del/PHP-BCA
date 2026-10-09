<!-- Wap to show multi dimensionl data in table format -->$_COOKIE
<?php
$arr=[
    [22,"Joy","BCA",7000],
    [8,"Jiban","BBSC",2000],
    [15,"Nabin","BCA",7000],
    [5,"Rojoni","BSC",2000],
    [6,"Joy","BCA",7000]




];

echo "<table border='1px' width='300px'
cellspacing=0>";
   echo "<tr bgcolor='skyblue'>";
      echo"<th>Roll</th>";
      echo"<th>Name</th>";
      echo"<th>Course</th>";
      echo"<th>Fees</th>";
    echo "</tr>" ;

    foreach($arr as $row){
        echo"<tr align = 'center'>";
        foreach($row as $col){
            echo"<td>$col</td>;
        }
     echo "</tr>";
    }
            echo"<table>";


?>