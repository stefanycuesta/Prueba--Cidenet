<?php
    

    $Id=$_REQUEST["Id"];
	$link = mysqli_connect("localhost", "root", "", "necesidad");
    $bd_necesidad="DELETE FROM necesidad where Id='".$Id."';";
    $resultado=mysqli_query($link,$bd_necesidad);
    


    if(!$resultado){
        echo "Error al eliminar";
    }else{
        header("Location: prueba.php");
    }
?>
