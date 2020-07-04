<?php
	include "server/basedatos.php";
	$usuario = $_POST['userId'];
    $contra = $_POST['userPass'];
    $consult = DataBase::query("SELECT UserId, Pass FROM Users WHERE UserId = '".$usuario."';")->fetch_array()[1];
    if($consult == $contra){
        //echo "Contraseña correcta";
        header('Location: dashboard.php?userId='.$usuario);
    }
    else{
        //echo "Contraseña incorrecta";
        header('Location: dashboard.php');
    }
?>