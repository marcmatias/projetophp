<?php
  if(empty($_GET["nome_slc"])){
      include("conexao.php");
  }

  $executar_consulta = $conexao->query($consulta);
  $num_regs = $executar_consulta->num_rows;

  //echo $num_regs;
  if($num_regs==0)
  {
      echo "<br><br><p class='text-center'>Não existe registros de contatos na base de dados.</p>";
  }else{
?>
  <br /><br />
  <div class="table-responsive">
      <table id="datatable" class="table table-striped table-bordered display nowrap" width="100%" cellspacing="0">
          <thead>
              <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Contatos</th>
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
                      <td>
                        <?php
                          $id = $registro['idcontato'];
                          $consulta_contato = "SELECT * FROM telefone WHERE
                					idcontato='$id'";
                          $executar_consulta2 = $conexao->query($consulta_contato);
                          while($contato_tel = $executar_consulta2->fetch_assoc()){
                            if (strlen($contato_tel['telefone']) < 11) {
                              echo ("<i class='material-icons icons'>phone</i> (".substr($contato_tel['telefone'], 0, 2).")".substr($contato_tel['telefone'], 2, 4)."-".substr($contato_tel['telefone'], 6, 11)."&nbsp;<br>");
                            }else{
                            echo ("<i class='material-icons icons'>stay_current_portrait</i>(".substr($contato_tel['telefone'], 0, 2).")".substr($contato_tel['telefone'], 2, 5)."-".substr($contato_tel['telefone'], 7, 11)."<br> ");
                            }
                          }
                         ?>
                      </td>
                      <td>
                          <a href="index.php?op=editar&contato_slc=<?= $registro['idcontato'] ?>" class="btn btn-primary" title="Editar Contato"><i class="material-icons icons">create</i></a>
                          <a onclick="return confirm('ATENÇÃO! Todos os dados serão de <?= $registro['nome'] ?> serão perdidos ao proceder na exclusão.')" href="php/contato/apagar-contato.php?email_slc=<?= $registro['email'] ?>" class='btn btn-danger' title="Excluir Contato"><i class="material-icons icons">delete</i></a>
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
