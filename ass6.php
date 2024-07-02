<?php
/* elzero6.txt Content
Hello Elzero Web
School
No Need To Read
*/
echo mb_strlen("Hello Elzero Web \r\n
School ") ."<br>";//24

$elz=file_get_contents("elzero6.txt");
echo implode(" ",array_slice(explode(PHP_EOL,$elz),0,2 )) . "<br>";//1  line


$elz=fopen("elzero6.txt",'r');
echo fgets($elz);
fseek($elz,28,SEEK_END);
echo fgets($elz)."<br>";
fclose($elz);

// M2
  echo file_get_contents("elzero6.txt",true,NULL,0,24) ."<br>";

  //M3
  $elz=fopen("elzero6.txt",'r');
  echo fgets($elz) .fgets($elz) ."<br>";
  fclose($elz);
  //M4

$elz=file("elzero6.txt",FILE_IGNORE_NEW_LINES);
echo implode(" ",array_slice($elz,0,2) ) //1  line 
  
/* Needed Output
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
*/

?>