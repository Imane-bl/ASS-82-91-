<?php

//echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>";

$s=array("C:");
$total=0;

foreach($s as $one){
    $size=disk_total_space($one);
    $total+=$size;
}
echo round($total/1024/1024/1024/1024,2);// TERA

// Output Examples
//"1.37 Terabyte"
//"0.46 Terabyte"


?>