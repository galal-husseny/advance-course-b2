<?php 
$path = 'images' . DIRECTORY_SEPARATOR;
$images = scandir($path);
array_splice($images,0,2);
foreach($images AS $index=>$image){
    $imageExtension = pathinfo($image,PATHINFO_EXTENSION);
    rename($path.$image,$path.++$index.'.'.$imageExtension);
}