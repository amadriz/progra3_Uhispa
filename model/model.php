<?php
//Importo archivo de conexion
require_once 'conn/conexion.php';

class model{
    private $dbconn;
    
    public function __construct() {
        $this->dbconn = new conn();
    }
 
    public function m_validarLogin($usu,$pass) {
        $this->dbconn->conectar();
        
        $sql = "select * from login where correo='".$usu."' and pass='".$pass."'";	
        //md5('UH_2023_p3_$pass')
        $rs = $this->dbconn->ejecutarSql($sql);
        
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
        $this->dbconn->desconectar();
        return $arrUsuario;
        
    }

    public function m_registrarUsuario($datos) {
        
        $this->dbconn->conectar();

        try {
            $sql = "insert into login (nombre,ap1,ap2,cedula,correo,pass,perfil) values ('".$datos['nombre']."','".$datos['primerApellido']."','".$datos['segundoApellido']."','".$datos['cedula']."','".$datos['email']."','".$datos['pass']."','3')";
            $rs = $this->dbconn->ejecutarSql($sql);

            //Para porbar que datos lleva el objeto a la db.
            // echo $sql;
            // exit();

            $this->dbconn->desconectar();
            return $rs;
            
        } catch (\Throwable $th) {
            throw $th;
        }

        
        
    }
    
    
    
}



?>

