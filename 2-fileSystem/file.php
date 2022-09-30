<?php

// mkdir('contracts');
// file_put_contents('contracts'.DIRECTORY_SEPARATOR.'galal.txt','salary : 1k');
// mkdir('code');
// file_put_contents('code'.DIRECTORY_SEPARATOR.'welcome.php','');


// <!-- php artisan make:controller UserController -->
// mkdir('controllers');
// file_put_contents('controllers'.DIRECTORY_SEPARATOR.'UserController'.'.php','<?php
// class UserController {

// }');
$file = 'contracts'.DIRECTORY_SEPARATOR.'galal.txt';
if(file_exists($file)){
    $contract = file_get_contents($file);
    echo $contract;
    unlink($file);
}
