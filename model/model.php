<?php

require_once 'conn/conexion.php';

class model{
    private $db;
    
    public function __construct() {
        $this->db = new conn();
    }
 
    public function m_validarLogin($usu,$pass) {
        $this->db->conectar();
        
        $sql = "select * from login where correo='".$usu."' and pass='".$pass."'";	
        //md5('UH_2023_p3_$pass')
        $rs = $this->db->ejecutarSql($sql);
        
        $arrUsuario = array();
        
        while($fila = mysqli_fetch_assoc($rs)){
          $arrUsuario['id_usuario'] =   $fila['id_usuario'];
          $arrUsuario['nombre'] =   $fila['nombre'];
          $arrUsuario['ap1'] =   $fila['ap1'];
          $arrUsuario['ap2'] =   $fila['ap2'];
          $arrUsuario['cedula'] =   $fila['cedula'];
          $arrUsuario['correo'] =   $fila['correo'];
          $arrUsuario['perfil'] =   $fila['perfil'];

        }
        $this->db->desconectar();
        return $arrUsuario;
        
    }

    public function m_registrarUsuario($nombre, $primerApellido, $segundoApellido, $cedula, $correo, $pass) {
        
        $this->db->conectar();

        try {
            $sql = "insert into login (nombre,ap1,ap2,cedula,correo,pass,perfil) values ('".$nombre."','".$primerApellido."','".$segundoApellido."','".$cedula."','".$correo."','".$pass."','2')";
            $rs = $this->db->ejecutarSql($sql);
            $this->db->desconectar();
            return $rs;
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
    
    
    
}



?>

