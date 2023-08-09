<?php
/* Smarty version 4.3.1, created on 2023-08-09 15:48:59
  from 'C:\wamp64\www\progra3_Uhispa\view\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d3b56b15b8e0_21953214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b493bd17b3536c5a5670ec138056ddf3df876b27' => 
    array (
      0 => 'C:\\wamp64\\www\\progra3_Uhispa\\view\\templates\\registro.tpl',
      1 => 1691594698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d3b56b15b8e0_21953214 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-5" >
    
  
<main class="form-signin w-100 m-auto">
    <form action="index.php" method="post">
    
    <input type="hidden" name="accion" value="registro"> 

    <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <div class="mb-3">
    <label class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
      
    </div>
    <div class="mb-3">
    <label class="form-label">Primer Apellido</label>
      <input type="text" class="form-control" name="primerApellido"  id="primerApellido" placeholder="Primer Apellido" required>
    </div> 
    <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
        <input type="text" class="form-control" name="segundoApellido"  id="segundoApellido" placeholder="Segundo Apellido" required>  
    </div>
    <div class="mb-3">
    <label class="form-label">Cédula</label>
        <input type="text" class="form-control" name="cedula"  id="cedula" placeholder="Cédula" required>
    </div>
    <div class="mb-3">
    <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email"  id="email" placeholder="Email" required>
    </div>
    <div class="mb-3">
    <label class="form-label">Password</label>
        <input type="password" class="form-control" name="pass"  id="pass" placeholder="password" required>
    </div>
    <div class="mb-3">
      <button class="btn btn-primary  py-2" type="submit">Registrarse</button>
    </div>

    </form>
</main>
    
</div>    <?php }
}
