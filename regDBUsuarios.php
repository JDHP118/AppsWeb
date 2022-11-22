<html>
    <head>
        <title>Registro Usuarios</title>
        <?php
            include("conexionBD.php");
        ?>
    </head>
    <body>
        <?php
            #Datos Personales
            $NombreProducto = $_REQUEST['nombre'];
            $Apellido = $_REQUEST['apellido'];
            $Correo = $_REQUEST['correo'];
            $VendUser = $_REQUEST['userVend'];
            $VendPwd = $_REQUEST['pswdVend'];
            $VedTel = $_REQUEST['telVend'];
            #Direccion
            $Estado = $_REQUEST['estado'];
            $Ciudad = $_REQUEST['ciudad'];
            $Calle = $_REQUEST['calle'];
            $Num = $_REQUEST['NumExt'];

            #Registrar datos en base de datos
            $consulta = "INSERT INTO usuario (PrimerNombre, Apellido, email, usuario, contrasena, calle, numero, ciudad, estado, telefonos)".
                        "VALUES('$Nombre', '$Apellido', '$Correo', '$VendUser', '$VendPwd', '$Calle', '$Num', '$Ciudad', '$Estado', '$VedTel')";
            
            $resultado = consultaDB($consulta);
            if ($resultado){
                echo "<br>Datos guardados";
            }
            else{
                die(mysqli_error());
            }
        ?>
    </body>
</html>