<?php
/* Smarty version 4.3.1, created on 2023-06-22 04:23:19
  from 'C:\xampp\htdocs\miercoles\semana6\view\templates\respuesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6493b0972df748_48050210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fe5e7161f8df95ac8d2b4e3d5926f6868bb7373' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miercoles\\semana6\\view\\templates\\respuesta.tpl',
      1 => 1687400491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6493b0972df748_48050210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Resultado</h1>
<h1>El total de <?php echo $_smarty_tpl->tpl_vars['val1']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['operacion']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['val2']->value;?>
 = <?php echo $_smarty_tpl->tpl_vars['resultado']->value;?>
<h1>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
