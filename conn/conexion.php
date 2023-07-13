<?php

error_reporting(0);

class conn {

    private $server;
    private $usu;
    private $pass;
    private $db;
    private $link;

    function __construct() {
        $this->server = 'localhost';
        $this->usu = 'root';
        $this->pass = '';
        $this->db = 'uh';

        $this->link = null;
    }

    public function getLink() {
        return $this->link;
    }

    public function conectar() {

        try {
            $this->link = mysqli_connect($this->server, $this->usu, $this->pass, $this->db);

            if ($this->link->connect_error) {
                die("Error failed to connect to MySQL: " . $this->link->connect_error);
                exit;
            }            
        } catch (Exception $e) {
            die("Error al conectar a DB mysql: " . $e->getMessage());
            //echo "Error al conectar a DB mysql: " . $e->getMessage();
            exit;
        }
    }

    public function desconectar() {
        if ($this->link != null) {
            mysqli_close($this->link);
        }
        
    }
    //Queries para esta conexion con la base de datos, retorna respuesta de la base de datos
    public function ejecutarSql($sql) {
        $rs = $this->link->query($sql);
        return $rs;
    }
    //Ejecuta un commit en la base de datos
    //Inserta, actualiza o elimina datos en la base de datos
    public function ejecutarCommit() {
        mysqli_commit($this->link);
    }

    /*
     * +conectar()
     * +desconectar()
     * +ejecutarSql()
     * 
     */
}

?>