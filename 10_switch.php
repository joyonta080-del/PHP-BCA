<?php
// wap to print age category.
$unit = 250;
switch (true) {
    case ($unit <= 100):
        echo "Total Bill: Rs.500";
        break;
    case ($unit >= 101 and $unit <= 200):
        echo "Total Bill: ".(500 + ($unit - 100) * 7);
        break;
    case ($unit >= 201 and $unit <= 300):
        echo "Total Bill: ".(500 + 700 + ($unit - 200) * 10);
        break;
    default:
        echo "Total Bill: ".(500 + 700 + 1000 + ($unit - 300) * 12.50);
        break;
}
