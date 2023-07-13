<?php
/* Smarty version 4.3.1, created on 2023-07-13 01:01:14
  from 'C:\wamp64\www\semana8_Login_Registro\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64af4cda7c18d6_68612591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e14e1aedc9e9413a8b94ac747e62d6db9a0a0bf' => 
    array (
      0 => 'C:\\wamp64\\www\\semana8_Login_Registro\\view\\templates\\login.tpl',
      1 => 1689210071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64af4cda7c18d6_68612591 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container mt-5" >
    

 <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2> 
<main class="form-signin w-100 m-auto">
    <form action="index.php" method="post">
    
    <input type="hidden" name="accion" value="login">    
    <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="pass"  id="pass" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <div class="row">
    <div class="col-sm-6">
        <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
      </div>
      <div class="col-sm-6">
        <a href="index.php?accion=registro" class="btn btn-primary w-100 py-2 mb-3">Registrarse</a>
      </div>      
      
    </div>
  </form>
</main>
    
</div>    <?php }
}
