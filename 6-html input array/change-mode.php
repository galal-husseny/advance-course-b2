<?php 
if($_POST){
  setcookie('mode',$_POST['mode'],time()+24*60*60,'/','',true);
  header('location:home.php');
}

?>