<?php

$url = 'users'.DIRECTORY_SEPARATOR.'login.php';


if(file_exists($url)){
    echo "file|dir exists";
}else{
    echo "file|dir not exists";
}

// absolute path
// relative path