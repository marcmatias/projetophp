<?php
if(empty($_GET["nome_slc"]))
{
    include("conexao.php");
}

$executar_consulta = $conexao->query($consulta);
$num_regs = $executar_consulta->num_rows;
 
//echo $num_regs;
if($num_regs==0)
{
    echo "<br /><br /><span class='mensagens'>Não existe registros nesta busca!!</span><br /><br />";
}
else
{
?>
    <br /><br />
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($registro = $executar_consulta->fetch_assoc())
            {
            ?>
                <tr>
					<td><?php echo ($registro["nome"]); ?></td>
                    <td><?php echo ($registro["email"]); ?></td>
                    <td><?php echo ($registro["telefone"]); ?></td>
                    
                </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </tfoot>
    </table>
<?php
}
$conexao->close();
?>
<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>