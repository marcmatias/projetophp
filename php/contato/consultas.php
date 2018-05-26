<form action="" class="card" id="consulta-contato" name="consulta_form" method="get">
    <div class="form-group card-body">
        <fieldset>
            <legend>Consulta de contatos</legend>
            <label for="consulta-lista">Tipo de Consulta: </label>
            <select name="consulta_slc" id="consulta-lista" class="form-control" required>
                <option value="">-- Selecione tipo de consulta --</option>
                <option value="todos" <?php if($_GET["consulta_slc"] == "todos"){ echo " selected";} ?>>Todos</option>
                <option value="email" <?php if($_GET["consulta_slc"] == "email"){ echo " selected";} ?>>Por Email</option>
                <option value="inicial" <?php if($_GET["consulta_slc"] == "inicial"){ echo " selected";} ?>>Por Inicial</option>
                <option value="telefone" <?php if($_GET["consulta_slc"] == "telefone"){ echo " selected";} ?>>Por Telefone</option>

            </select>
            <?php
                switch($_GET["consulta_slc"])
                {
                    case "todos":
                        include("php/contato/consulta-todos.php");
                        break;
                    case "email":
                        include("php/contato/consulta-email.php");
                        break;
                    case "inicial":
                        include("php/contato/consulta-inicial.php");
                        break;
                    case "telefone":
                        include("php/contato/consulta-telefone.php");
                        break;

                }
            ?>
        </fieldset>
    </div>
</form>
<script>
    window.onload = function()
    {
        var lista = document.getElementById("consulta-lista");

        lista.onchange = function()
        {
            window.location="?op=consultas&consulta_slc="+lista.value;
        };
    }
</script>
