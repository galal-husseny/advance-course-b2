<?php

function is_empty_dir(string $folder):bool{
    return count(scandir($folder)) == 2 ? true : false;
}

function delete_dir(string $deletedDir){
    if(! (str_ends_with($deletedDir,'/') || str_ends_with($deletedDir,'\\'))){
        $deletedDir .= DIRECTORY_SEPARATOR;
    }
    $mediaFiles = scandir($deletedDir); // [.,..,abdo]
    foreach($mediaFiles AS $file){
        if($file == '.' || $file == '..'){
            continue;
        }
        if(is_file($deletedDir . $file)){
            unlink($deletedDir . $file); // data/abdo
        }
    }
    if(is_empty_dir($deletedDir)){
        rmdir($deletedDir);
    }
}


delete_dir('data');
