<?php
include("conexao.php");
$sqlRegistros = mysqli_query($conexao,"select * from usuario");
$num_linhas = mysqli_num_rows($sqlRegistros);

echo "<table class=\"tabcontent-table\">
<tr>
	<th class=\"tabcontent-th\">USUÁRIOS</th>
	<th class=\"tabcontent-th\">MATRÍCULA</th>
</tr>";



for($i=0;$i<$num_linhas;$i++){
$dados = mysqli_fetch_array($sqlRegistros);
$nome = $dados["nome"];
$matricula = $dados["matricula"];

echo "
<tr>
	<td class=\"tabcontent-td sheet\" onclick=\"document.getElementById('user0').style.display='block'\">$nome</td>
	<td class=\"tabcontent-td td-data\">$matricula</td>
</tr>";
}

echo "</table>";
?>