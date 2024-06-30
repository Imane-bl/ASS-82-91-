<?php

/* elzero.txt Content
Hello Osamaa Web
School*/
echo mb_strlen("Hello ")."<br>";//6
echo mb_strlen("Osamaa ")."<br>";//6
echo file_get_contents("elzero.txt",true,NULL,6,7) . "<br>";

echo file_get_contents("elzero.txt", " Elzero", FILE_APPEND);
/* elzero.txt New Content
Hello Elzero Web
School*/





?>