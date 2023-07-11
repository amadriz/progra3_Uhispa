{include file="header.tpl"}


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



{include file="footer.tpl"}

