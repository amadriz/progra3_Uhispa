<?php

require_once './conn/conexion.php';

$tipo = $_SERVER['REQUEST_METHOD'];

switch ($tipo) {
    case 'GET':
        getListaUsuarios();
        break;
    case 'DELETE':
        delUsuario();
        break;
    default:
        header("HTTP/1.1 405 method not allowed");
        header("allow GET");
        break;
}
function  delUsuario(){
    $idUsuario=$_REQUEST['idUsuario'];
    $db = new conn();
    $db->conectar();
    $sql = "delete FROM login where id_usuario=".$idUsuario;
    $rs = $db->ejecutarSql($sql);
    $db->ejecutarCommit();
    $db->desconectar();
    
    echo "ok";
    exit;
    
    
}
function getListaUsuarios() {

    $db = new conn();
    $db->conectar();

    $sql = "SELECT id_usuario,nombre,ap1,ap2,cedula,correo,pass,perfil FROM login";

    $rs = $db->ejecutarSql($sql);

    $tabla = "<table class='table'>";
    $tabla .= "<tr>";
    $tabla .= "<th>id_usuario</th>";
    $tabla .= "<th>nombre</th>";
    $tabla .= "<th>ap1</th>";
    $tabla .= "<th>ap2</th>";
    $tabla .= "<th>cedula</th>";
    $tabla .= "<th>correo</th>";
    $tabla .= "<th>perfil</th>";   
    $tabla .= "<th>acciones</th>";     
    $tabla .= "</tr>";
    
     while($fila = mysqli_fetch_assoc($rs)){
         $tabla .= "<tr>";
                $tabla .= "<td>".$fila['id_usuario']."</td>";
                $tabla .= "<td>".$fila['nombre']."</td>";
                $tabla .= "<td>".$fila['ap1']."</td>";
                $tabla .= "<td>".$fila['ap2']."</td>";
                $tabla .= "<td>".$fila['cedula']."</td>";
                $tabla .= "<td>".$fila['correo']."</td>";
                $tabla .= "<td>".$fila['perfil']."</td>";    
                $tabla .= "<td><a href='#' onclick='js_delUsuario(".$fila['id_usuario'].");'><img src='img/borrar.png' ></a></td>";   
          $tabla .= "</tr>";

        }
        $tabla .= "</table>";
    
    echo $tabla;
}
