<?php

/* Output
"Size In Megabyte Is 32"
"Size In Kilobyte Is 33261"
*/


$video="C:\Users\Hp_Bell\Pictures\pyt";
$size=filesize($video);
echo $sizemega=round(($size/1024)/1024) ."<br>";
echo $sizekb=round(($size/1024));

?>