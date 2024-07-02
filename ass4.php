<?php

$dir="rrlzero";
//mkdir($dir);
function change_permissions($file_name){
    if(is_dir($file_name)){
        echo "This Is Directory And Only Files Allowedr "."<br>";
    }
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    if($ext!="txt"){
        echo "File Extension Is Not Txt" ."<br>";

    }
$per=fileperms($file_name);
$owner=0700;
$other=0000;
chmod($file_name,$owner);

$new_per=fileperms($file_name);
if($new_per===$per){
    echo "per changed"  ."<br>";

}else{
    chmod($file_name,$per);
}

}

//Test Cases

echo change_permissions("rrlzero") ."<br>"; // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx") ."<br>"; // File Extension Is Not Txt
echo change_permissions("Result.txt") ."<br>"; // Permissions Changed


?>