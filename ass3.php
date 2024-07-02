<?php



$dir1="Programming";
$dir2="PHP";

mkdir($dir1,0700);
chmod($dir1,0700);

mkdir("$dir1/$dir2",0700);
chmod("$dir1/$dir2",0700);
echo "dir creatd";

if(is_dir("$dir1/$dir2")){
   rmdir("$dir1/$dir2"); 
}

if(is_dir($dir1)){
    rmdir($dir1);
}
?>