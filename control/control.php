<?php
//Manejo de sesiones 
//Activar secsiones   
session_start();

require_once 'libs/smarty_4_3_1/configuracion.php';
require_once 'model/model.php';

class control {

    private $objModel;
    private $objsmarty;

    function __construct() {
        $this->objModel = new model();
        $this->objsmarty = new configuracion();
    }

    public function getObjModel() {
        return $this->objModel;
    }

    public function setObjModel($objModel) {
        $this->objModel = $objModel;
    }

    public function ValidarSession(){
        if(!isset($_SESSION['id_usuario'])){
            
            
        
    }else{
        $valor = "Uhispano";
        $this->objsmarty->setAssign("titulo", $valor);
        $this->objsmarty->setAssign("msg", "");
        $this->objsmarty->setDisplay("header.tpl");
        $this->objsmarty->setDisplay("login.tpl");
        $this->objsmarty->setDisplay("footer.tpl");
    }

    }

    public function gestion_procesos() {
       

        if (isset($_REQUEST['accion'])) {

            $accion = $_REQUEST['accion'];

            switch ($accion) {
                case 'login':
                    $this->validarLogin();                
                    break;
                case 'registro':
                    $this->Registrar();
                    
                    break;
                case 'logout':
                    $this->Logout();
                    break;
            }
        } else {

            //Para mantener session iniciada
            if(isset($_SESSION['id_usuario'])){
                $this->objsmarty->setDisplay("principal.tpl");
            
        }else{
            $valor = "Uhispano";
            $this->objsmarty->setAssign("titulo", $valor);
            $this->objsmarty->setAssign("msg", "");
            $this->objsmarty->setDisplay("header.tpl");
            $this->objsmarty->setDisplay("login.tpl");
            $this->objsmarty->setDisplay("footer.tpl");
        }
    }
    
    }

    public function Logout() {
        header("location: control/logoff.php");
    }

    public function validar_inactividad() {
        
    }

    public function Registrar() {

        $nombre             = $_REQUEST['nombre'];
        $primerApellido     = $_REQUEST['primerApellido'];
        $segundoApellido    = $_REQUEST['segundoApellido'];
        $cedula             = $_REQUEST['cedula'];
        $correo             = $_REQUEST['correo'];
        $pass               = $_REQUEST['pass'];


        //Acutalizar objento por medio de la funcion con parameteros m_registrarUsuario
        //$rs = $this->objModel->m_registrarUsuario($nombre, $primerApellido, $segundoApellido, $cedula, $correo, $pass);
        
        //Create array arrdatos
        $arrdatos = array();

        //Asignar valores al array arrdatos
        //Asociado a un indice
        $arrdatos['nombre'] = $nombre;
        $arrdatos['primerApellido'] = $primerApellido;
        $arrdatos['segundoApellido'] = $segundoApellido;
        $arrdatos['cedula'] = $cedula;
        $arrdatos['correo'] = $correo;
        $arrdatos['pass'] = $pass;

        //Enviar los datos del array al modelo
        $rs = $this->objModel->m_registrarUsuario($arrdatos);

        if($rs){
           
        //Mostrar el formulario de registro
        $this->objsmarty->setAssign("titulo", "Registro de Usuario");
        $this->objsmarty->setAssign("msg", $msg);
        $this->objsmarty->setDisplay("header.tpl");
        $this->objsmarty->setDisplay("registro.tpl");
        $this->objsmarty->setDisplay("footer.tpl");
        }else{
            $this->objsmarty->setAssign("msg", "Error al registrar el usuario");
            $this->objsmarty->setDisplay("header.tpl");
            $this->objsmarty->setDisplay("registro.tpl");
            $this->objsmarty->setDisplay("footer.tpl");
        }
        
        
            
               
    }

    public function validarLogin() {
        $mail = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        
        $rs =  $this->objModel->m_validarLogin($mail,$pass);

        
        if(sizeof($rs)>0){

            $_SESSION['id_usuario']      = $rs['id_usuario'];
            $_SESSION['nombre']          = $rs['nombre'];
            $_SESSION['primerApellido']  = $rs['primerApellido'];
            $_SESSION['segundoApellido'] = $rs['segundoApellido'];
            $_SESSION['cedula']          = $rs['cedula'];
            $_SESSION['correo']          = $rs['correo'];
            $_SESSION['perfil']            = $rs['perfil'];
            //Si ingresa usuario y pass correctos entra a la página principal
            //objsmarty setdisplay
            //$this->objsmarty->setDisplay("principal.tpl");
        }else{
            
            $this->objsmarty->setAssign("msg", "Error! Usuario o pass Invalidos");
            $this->objsmarty->setDisplay("header.tpl");
            $this->objsmarty->setDisplay("login.tpl");
            $this->objsmarty->setDisplay("footer.tpl");
            
        }
        
    }

}
