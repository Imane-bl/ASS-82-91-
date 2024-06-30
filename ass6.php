<?php
/* elzero6.txt Content
Hello Elzero Web
School
No Need To Read
*/
echo mb_strlen("Hello Elzero Web \r\n
School ") ."<br>";//24


$elz=fopen("elzero6.txt",'r');
echo fgets($elz);
fseek($elz,28,SEEK_END);
echo fgets($elz)."<br>";
fclose($elz);

// M2
  echo file_get_contents("elzero6.txt",true,NULL,0,24) ."<br>";

  //M3


  //M4



/* Needed Output
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
*/

?>