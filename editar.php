<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //$Id=$_GET["Id"];
        $PrimerApellido=$_GET["PApellido"];
        $SegundoApellido=$_GET["SApellido"];
        $PrimerNombre=$_GET["PNombre"];
        $OtroNombre=$_GET["ONombre"];
        $TipoIdentificacion=$_GET["TipoId"];
        $NumeroId=$_GET["NumId"];
        $CorreoElectronico=$_GET["Correo"];
        $FechaDeIngreso=$_GET["ingreso"];
        $Area=$_GET["area"];
        $Estado=$_GET["activo"];
    ?>
    <form action="editar2.php" class="form-register"  method="post">
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
</body>
</html>