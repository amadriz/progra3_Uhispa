<?php
/* Smarty version 4.3.1, created on 2023-06-22 03:50:23
  from 'C:\xampp\htdocs\miercoles\semana6\view\templates\frm_calculadora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6493a8df02ed64_65743886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c9a0e8af923c9ae471f3a20ebf15e9cb915fb94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miercoles\\semana6\\view\\templates\\frm_calculadora.tpl',
      1 => 1687398381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6493a8df02ed64_65743886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="index.php" method="post">
<input type="hidden" name="accion" value="calcular">
<table border="0">

        <tr>
            <td>Valor 1</td>
            <td><input type="number" name="n_val1"></td>
        </tr>
        <tr>
            <td>Operador</td>
            <td>
                <select name="cbo_operador">
                    <option value="mas"> +</option>
                    <option value="menos">- </option>
                    <option value="multi"> *</option>
                    <option value="div"> /</option>
                </select>    
                
            </td>
        </tr>
        <tr>
            <td>Valor 1</td>
            <td><input type="number" name="n_val2"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Calcular"></td>
            <td></td>
        </tr>
   
</table>
</form>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
