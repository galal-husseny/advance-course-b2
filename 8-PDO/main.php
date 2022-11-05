<?php
include "vendor/autoload.php";
use Database\User;

$user = new User;
// $user->create([
//     'age'=>26,'first_name'=>'ahmed'
// ]);
// $user->update([
//     'name'=>'Abdo',
//     'age'=>22,
//     'id'=>1
// ]);
// $user->delete([
//     'id'=>1
// ]);

print_r($user->read());