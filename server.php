<?php

//require conexion
require_once './conn/conexion.php';

//DE esta forma caputarmos la manera en que viene el cliente get, post, put, delete
$tipo = $_SERVER['REQUEST_METHOD'];

//validar el tipo de peticion
switch ($tipo) {
    case 'GET':
        ListarUsuarios();
        break;
    case 'POST':
        echo "Peticion POST";
        break;
    default:
        echo "Peticion no valida";
        break;
}

function ListarUsuarios()
{
    $db = new Conexion();
    $db->conectar();

    $sql = "SELECT * FROM login";

    $resultado = $db->ejecutarSql($sql);

    $tabla = "<table>";
    $tabla .= "<tr>";
    $tabla .= "<th>Id</th>";
    $tabla .= "<th>Nombre</th>";
    $tabla .= "<th>Apellido</th>";\
    $tabla .= "<th>Apellido 2</th>";\
    $tabla .= "<th>Correo</th>";
    $tabla .= "<th>perfil</th>";
    $tabla = "</tr>";

    while($fila = mysqli_fetch_assoc($rs)){

        $tabla .= "<tr>";

        $tabla  .=   $fila['id_usuario'];
        $tabla  .=   $fila['nombre'];
        $tabla  .=   $fila['ap1'];
        $tabla  .=   $fila['ap2'];
        $tabla  .=   $fila['cedula'];
        $tabla  .=   $fila['correo'];
        $tabla  .=   $fila['perfil'];

        $tabla .= "</tr>";

      }
    
    $tabla .= "</table>";

    echo $tabla;
    
    }