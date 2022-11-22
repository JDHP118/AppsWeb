<html>
    <head>
        <title>Registro de Productos</title>
        <?php
            include("conexionBD.php");
        ?>
    </head>
    <body>
        <?php
            #Datos Personales
            $Nombre = $_REQUEST['nombreProducto'];
            $Categoria = $_REQUEST['categProd'];
            $Precio = $_REQUEST['PrecioProducto'];

            #Registrar datos en base de datos
            $consulta = "INSERT INTO productos (nombre, categoria, precio)".
                        "VALUES('$Nombre', '$Categoria', '$Precio')";
            
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