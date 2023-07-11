<?php

require_once 'libs/smarty_4_3_1/Smarty.class.php';

class configuracion{
    private $objSmarty;
    
    function __construct() {
        $this->objSmarty = new Smarty();
        $this->setRutas();
    }
    
    function setRutas(){
      $this->objSmarty->template_dir = "view/templates";
      $this->objSmarty->compile_dir  = "view/templates_c";
      $this->objSmarty->config_dir   = "control/configs";
      $this->objSmarty->cache_dir    = "control/cache";

    }
    
    function setDisplay($archivo){
        $this->objSmarty->display($archivo);
    }
    
    function setAssign($variable,$valor){
       $this->objSmarty->assign($variable,$valor);
    }
    
    
}



?>