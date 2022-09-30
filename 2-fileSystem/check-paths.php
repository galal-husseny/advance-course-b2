<?php

// absolute path
$absolutePath = "C:\\xampp.v.8.0.3\htdocs\advanced course\\2-fileSystem\classes\users";
// relative path
$relativePath = 'classes'.DIRECTORY_SEPARATOR . 'users'.DIRECTORY_SEPARATOR.'login.php';

// if(file_exists($relativePath)){
//     echo "file|dir exists";
// }else{
//     echo "file|dir not exists";
// }


// echo __DIR__;
// echo __FILE__;


echo dirname("C:\\xampp.v.8.0.3\htdocs\advanced course\\2-fileSystem\classes\users\login.php");
echo "<br>";
echo __DIR__;