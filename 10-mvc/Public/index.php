<?php

use Src\Validation\Rules\AlphaNumericalRule;
use Src\Validation\Validator;
use Src\Validation\Rules\RequiredRule;


require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require base_path('Routes/web.php');


app()->run();


$data = [
    'first_name'=>'%a',
    'password'=>'12345678910'
];


$rules = [
    'first_name'=>'required|alnum|min:8',
    'password'=>['required','between:8,10']
];

$messages = [
    'required'=>'y3m mtsebsh input fade',
    'first_name.alnum' => 'y3m aktb asmk 3dl'
];

$attributes = [
    'first_name'=>'first name'
];

$validator = Validator::make($data,$rules,$messages,$attributes);


if($validator->fails()){
    dd($validator->errors());
}
