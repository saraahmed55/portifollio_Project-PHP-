<?php
session_start();
require_once 'lib/portifollo.php';
   
// echo $_GET['proid'];die;

$res=Deletepro($_GET[ 'proid']);
if( $res == 1){
header("LOCATION:allportifollo.php");
}else{
  header("LOCATION:allportifollo.php");
}


