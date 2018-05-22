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
    <div class="table-responsive">
        <table id="datatable" class="table table-striped table-bordered display nowrap" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ação</th>
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
                        <td>
                            <a href="index.php?op=editar&contato_slc=<?= $registro['id'] ?>" class="btn btn-primary">Edit</a>
                            <a onclick="return confirm('Tem certeza que quer excluir essa entrada?')" href="php/funcionario/apagar-contato.php?email_slc=<?= $registro['email'] ?>" class='btn btn-danger'>Deletar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
}
$conexao->close();
?>
