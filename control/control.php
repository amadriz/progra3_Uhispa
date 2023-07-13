<?php

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
            }
        } else {
            $valor = "Uhispano";
            $this->objsmarty->setAssign("titulo", $valor);
            $this->objsmarty->setAssign("msg", "");
            $this->objsmarty->setDisplay("header.tpl");
            $this->objsmarty->setDisplay("login.tpl");
            $this->objsmarty->setDisplay("footer.tpl");
        }
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
            //Si ingresa usuario y pass correctos entra a la página principal
            //objsmarty setdisplay
            $this->objsmarty->setDisplay("principal.tpl");
        }else{
            
            $this->objsmarty->setAssign("msg", "Error! Usuario o pass Invalidos");
            $this->objsmarty->setDisplay("header.tpl");
            $this->objsmarty->setDisplay("login.tpl");
            $this->objsmarty->setDisplay("footer.tpl");
            
        }
        
    }

}
