<?php
    //Configuraciones del servidor de la base de datos
    define ("cServidor", "localhost");
    define ("cUsuario", "prueba");
    define ("cClave","password");
    define ("cBd", "ProyectoFinal");

    function consultaDB($consulta){
        $conexion = mysqli_connect(cServidor, cUsuario, cClave, cBd);

        if ($conexion){
            echo ("Conexion establecida");
            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado){
                return $resultado;
            }
            else{
               return FALSE;
            }
        }
        else{
            echo "Error en conexion a la base de datos";
        }
    }
    #EJEMPLO DE REALIZAR CONSULTA
    #$resultado = consultaDB("Select * from estudiantes");
    #print ("<br>Total de registros:".$resultado->num_rows);
?>