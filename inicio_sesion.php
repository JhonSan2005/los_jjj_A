<?php
include ('funci.php');
$u=$_GET['cc'];
$s=$_GET['pass'];
echo autenticar($_GET['cc'],$_GET['pass']);
if (autenticar($_GET['cc'],$_GET['pass'])==1){
echo 'sesion iniciada';
}
else
echo 'datos incorrectos';


?>