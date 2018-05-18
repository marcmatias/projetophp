<br />
<?php 
//Criar um array para o abcdario
$letra = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');


echo "<div class='text-center'>";
 
//for para percorrer todo abcdario
for($i=0; $i<count($letra);$i++)
{
    if($letra[$i]=="Z")
    {
        echo "<a class='config' href='?op=consultas&consulta_slc=inicial&letra=".$letra[$i]."'>".$letra[$i]."</a>";
    }
    else
    {
        echo "<a class='config' href='?op=consultas&consulta_slc=inicial&letra=".$letra[$i]."'>".$letra[$i]."</a>\n-\n";
    }
}
 
if($_GET["letra"]!=null)
{
    $inicial = $_GET["letra"];
    $consulta = "SELECT * FROM contatos WHERE nome LIKE '$inicial%';";
    include("tabela-resultados.php");
}

echo "</div>";
?>