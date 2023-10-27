<?php
function registro($id_cliente, $nombre, $apellidos, $correo, $clave,$numeromesa)
{
    $salida = "";
    $conexion = new mysqli('localhost', 'root', 'root', 'mini_pro');

    if (!$conexion) {
        die("Error al conectar a la base de datos:" . mysqli_connect_error());
    }


    $sq = "INSERT INTO Clientes (DNI_cli,Nombre,Apellido,Correo,Contraseña,N°Mesa) VALUES ('$id_cliente','$nombre','$apellidos','$correo', '$clave','$numeromesa')";

    $resultado = $conexion->query($sq);


    if ($resultado) {
        $salida = "Registro exitoso";
    } else {
        $salida = "Error en el registro: " . $conexion->error;
    }

    $conexion->close();

    return $salida;
}

function escogertema ($id_cancion){
        $salida = "";
    $conexion = new mysqli('localhost', 'root', 'root', 'mini_pro');

        if (!$conexion) {
            die("Error al conectar a la base de datos:" . mysqli_connect_error());
        }


        $sq = "INSERT INTO  from Musica where ID='$id_cancion'";

        $resultado = $conexion->query($sq);


    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= $fila[0] . '<br>';

        $conexion->close();

        return $salida;
    }
}

function autenticar($documento, $clave)
{
    $salida=0;
    $conexion = new mysqli('localhost', 'root', 'root', 'mini_pro');
    $sq = "SELECT COUNT(Nombre) FROM Clientes WHERE DNI_cli = '$documento' AND Contraseña = '$clave'";

    $resultado = $conexion->query($sq);
    
    while ($fila = mysqli_fetch_array($resultado)) {
        $salida= $fila[0];
    }
   
    if ($salida==1){
        echo 'Autenticado';
   
    }else{
    echo'Datos Incorrectos';
  
}

    

    return ;
}
function pedirtema($id,$Nombre,$artista)
{
    $conexion = new mysqli('localhost', 'root', 'root', 'mini_pro');
    $sql="INSERT into Musica(ID,Nombre,artista) values ('$id','$Nombre','$artista')";
    $resultado=$conexion->query($sql);
    if ($resultado) {
        $salida = "Registro exitoso";
    } else {
        $salida = "Error en el registro: " . $conexion->error;
    }

    $conexion->close();

    return $salida;
}
function borrartema($id)
{
    $conexion = new mysqli('localhost', 'root', 'root', 'mini_pro');

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta SQL para borrar el tema con el ID proporcionado
    $sql = "DELETE FROM Musica WHERE ID = '$id'";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        $salida = "Tema borrado exitosamente";
    } else {
        $salida = "Error al borrar el tema: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();

    return $salida;
}

