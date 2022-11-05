<?php
ob_start();
include "base-view.php";

$baseView = ob_get_clean();

$search = ["{{title}}","{{content}}"];
$replace = ["Profile" , "<h1> Profile </h1>"];

echo str_replace($search,$replace,$baseView);