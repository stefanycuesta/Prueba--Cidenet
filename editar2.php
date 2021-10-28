<?php
        $Id=$_POST["Id"];
        $PrimerApellido=$_POST['PApellido'];
        $SegundoApellido=$_POST["SApellido"];
        $PrimerNombre=$_POST["PNombre"];
        $OtroNombre=$_POST["ONombre"];
        $TipoIdentificacion=$_POST["TipoId"];
        $NumeroId=$_POST["NumId"];
        $CorreoElectronico=$_POST["Correo"];
        $FechaDeIngreso=$_POST["ingreso"];
        $Area=$_POST["area"];
        $Estado=$_POST["activo"];


    
	$link = mysqli_connect("localhost", "root", "", "necesidad");
    $bd_necesidad="UPDATE necesidad set PApellido='$PrimerApellido',SApellido='$SegundoApellido',PNombre='$PrimerNombre',ONombre='$OtroNombre',TipoId='$TipoIdentificacion',NumId='$NumeroId',Correo='$CorreoElectronico',ingreso='$FechaDeIngreso',area='$Area',activo='$Estado' where Id='".$Id."';";
    $resultado=mysqli_query($link,$bd_necesidad);
    


    if(!$resultado){
        echo "Error editando";
    }else{
        header("Location: prueba.php");
    }
    ?>