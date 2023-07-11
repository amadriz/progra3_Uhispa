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
            $this->link = new mysqli($this->server, $this->usu, $this->pass, $this->db);

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
        mysqli_close($this->link);
    }

    public function ejecutarSql($sql) {
        $rs = $this->link->query($sql);
        return $rs;
    }

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