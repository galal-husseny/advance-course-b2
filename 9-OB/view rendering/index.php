<?php
ob_start();
include "base-view.php";
$baseView  = ob_get_clean();
$title = "Index";
$content = "Welcome Home";

echo str_replace(["{{title}}","{{content}}"],[$title,$content],$baseView);