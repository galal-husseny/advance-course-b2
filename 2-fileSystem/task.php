<?php
#	Task
# 1 check if dir is exists or not
# 2 if not make directory
# 3 save it to variable
# 4 create two files inside this directory
# 5 assign this files to variables
# 6 change tha mode of one file to be read only
# 7 check if file is writable
# 8 if writable put some code
# 9 include this file


$directory = "tasks";
$file1 = "contract.txt";
$file2 = "welcome.php";

if(! file_exists($directory)){
    mkdir($directory);
}


$file1Path = $directory . DIRECTORY_SEPARATOR . $file1;
$file2Path = $directory . DIRECTORY_SEPARATOR . $file2;

file_put_contents($file1Path,"Salary : 3k");
file_put_contents($file2Path,"<?php echo 'hello world'; ");

chmod($file2Path,0444); // readonly
if(is_writable($file2Path)){
    file_put_contents($file2Path,"<?php echo 'hello guys'; ");
}

include $file2Path;