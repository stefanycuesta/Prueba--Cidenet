<?php

	$link = mysqli_connect("localhost", "root", "", "necesidad");
    

    if(!$link){
        echo "Error en la conexion";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"> 
    <title>pruebaCidenet</title>
</head>
<body>
   <!-- <div class="from"> -->
    <form action="#" class="form-register"  method="post">
        <h1 style="text-align:center;" class="form__title"> Sistema de empleados </h1>
        <!-- Primer y segundo apellido -->
        <div class="input-group">
        <input style="width: 200px" type="text" name="PApellido" placeholder="PRIMER APELLIDO" maxlength="20" pattern="[A-Z]{4,20}">
        <input style="width: 200px;" type="text" name="SApellido" placeholder="SEGUNDO APELLIDO"maxlength="20" pattern="[A-Z]{4,20}">
        </div>

        <!-- Primer y segundo nombre -->
        <div class="input-group">   
        <input style="width: 200px;" type="text" name="PNombre" placeholder="PRIMER NOMBRE"maxlength="20" pattern="[A-Z]{4,20}">
        <input style="width: 200px;" type="text" name="ONombre" placeholder="SEGUNDO NOMBRE"maxlength="20" pattern="[A-Z]{4,20}">
        </div>

        <!-- ID -->
        <div class="input-group">  
        <!-- <h3> Tipo de Identificaciòn</h3> -->
        <!-- <label for="txtTipoId" id="txtTipoId" name="txtTipoId">Tipo de Identificacion: </label> -->
        <p>Tipo de identificacion</p>
        <select id="TipoId" name="TipoId">
        <option>  </option>
        <option>Cedula Ciudadania</option>
        <option>Cedula Extranjeria</option>
        <option>Pasaporte</option>
        </select>
        <input style="width: 180px;" type="text" name="NumId" placeholder="Numero de identificacion"maxlength="20" >
        </div>  

        <!--Correo electronico y fecha de ingreso-->
        <div class="input-group">  
        <input style="width: 200px;" type="text" name="Correo" placeholder="Ingrese su correo electronico">
        </div>

        <div class="input-group">  
        <label for="ingreso" id="ingreso" name="ingreso">Fecha de ingreso</label>
        <input style="width: 200px;" type="date" name="ingreso">
        </div>

        <!-- <h3> Area y paisde empleo</h3> -->
        <div class="input-group">         
        <p>Area: </p>
        <select id="area" name="area">
        <option> </option>
        <option>Administración</option>
        <option>Financiera</option>
        <option>Compras</option>
        <option>Compras</option>
        <option>Infraestructura</option>
        <option>Operación</option>
        <option>Talento Humano</option>
        <option>Servicios Varios</option>
        <option>Otra area</option>
        </select>
     

        <!-- <h3> Pais de Empleo</h3>  -->
        <label for="paisEmpleo" id="paisEmpleo" name="paisEmpleo">Pais de empleo: </label>
        <select>
        <option> </option>
        <option>Colombia</option>
        <option>Estados Unidos</option>
        </select>
        </div>

        <!-- <h3> Estado y fecha de registro</h3> -->
        <div class="input-group">  
        <input style="width: 200px;" type="text" name="activo" value="Activo" readonly>
        <input style="width: 200px;" type="datetime-local" name="registro" placeholder="Fecha y hora de registro">
        </div>
        <div> <input type="submit"  name="submit" value="Enviar"></div>   
    </form>
    <br />
    <div class="tabla">
        <table border="1">
        <tr>
             <th>Id</th>
            <th>PrimerApellido</th>
            <th>SegundoApellido</th>
            <th>PrimerNombre</th>
            <th>OtroNombre</th>
            <th>PaisDeEmpleo</th>
            <th>TipoIdentificacion</th>
            <th>NumeroId</th>
            <th>CorreoElectronico</th>
            <th>FechaDeIngreso</th>
            <th>Area</th>
            <th>Estado</th>
            <th>FechaYHoraDeRegistro</th>
            <th>Opciones</th>

        </tr>



    <?php
    if(isset($_POST['submit'])){
        
        $PrimerApellido=$_POST["PApellido"];
        $SegundoApellido=$_POST["SApellido"];
        $PrimerNombre=$_POST["PNombre"];
        $OtroNombre=$_POST["ONombre"];
        $TipoIdentificacion=$_POST["TipoId"];
        $NumeroId=$_POST["NumId"];
        $CorreoElectronico=$_POST["Correo"];
        $FechaDeIngreso=$_POST["ingreso"];
        $Area=$_POST["area"];
        $Estado=$_POST["activo"];
        
        
        $insertarDatos= "INSERT INTO necesidad (PrimerApellido, SegundoApellido, PrimerNombre,OtroNombre, TipoIdentificacion,NumeroIdentificacion,CorreoElectronico,FechaIngreso,Area,Estado) VALUES('".$PrimerApellido."', '".$SegundoApellido."', '".$PrimerNombre."','".$OtroNombre."', '".$TipoIdentificacion."','".$NumeroId."','".$CorreoElectronico."','".$FechaDeIngreso."','".$Area."', '".$Estado."');";

        $ejecutarInsertar=mysqli_query($link,$insertarDatos);

        if(!$ejecutarInsertar){
            echo"Hay un error";
        }
    }

        
        // $lastid = mysqli_insert_id($link); 
       
 
                $consulta="SELECT*FROM necesidad";
                $ejecutarConsulta=mysqli_query($link,$consulta);
                $verfilas=mysqli_num_rows($ejecutarConsulta);
                $filas=mysqli_fetch_array($ejecutarConsulta);

                if (!$ejecutarConsulta){
                    echo"Error en la consulta";
                }else{
                    if($verfilas<1){
                        echo"<tr><td>Sin registros</td></tr>";
                    }else {
                        	for($i=0; $i<=$filas; $i++){
                                
                                		echo'
										<tr>
											<td>'.$filas[0].'</td>
											<td>'.$filas[1].'</td>
											<td>'.$filas[2].'</td>
											<td>'.$filas[3].'</td>
                                            <td>'.$filas[4].'</td>
                                            <td>'.$filas[5].'</td>
                                            <td>'.$filas[6].'</td>
                                            <td>'.$filas[7].'</td>
                                            <td>'.$filas[8].'</td>
                                            <td>'.$filas[9].'</td>
                                            <td>'.$filas[10].'</td>
                                            <td>'.$filas[11].'</td>
                                            <td>'.$filas[12].'</td>
                                            <td>
                                            <a href="delete.php?Id='.$filas[0].'">Eliminar </a>
                                            </td>
                                            <td>
                                            <a href="editar2.php?Id='.$filas[0].'">Editar </a>
                                            </td>
                                            
										</tr>
									';
									$filas = mysqli_fetch_array($ejecutarConsulta);

								}
                                echo "</table></div>";
                    }
                }

        
    
?>
</body>
</html>


