<?php
$path = "contracts".DIRECTORY_SEPARATOR."galal.txt";
if(is_writable($path)){
    file_put_contents($path,"Salary : 3k");
}
