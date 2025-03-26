<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/guh.css">
        <title>Document</title>
</head>


<body>
<div class="fundo">
<?php 
require 'config.php';
?>  

<br><br>


<div class="container">
<div class="imagem">
 <img src="img/logo3.png" alt="" width="150px" legnth="150px">
</div>
</div>



<a class="guh" href="adicionar.php">Adicionar Novo Usuario</a>
<a class="guh" href="usuariosadm.php">Pagina dos Administradores</a>

<h1 class="alunos">Tabela de cadastro dos Alunos</h1>


<table>
<tr>
        <th>Nome</th>
        <th>E-Mails</th>
        <th>Matricula</th>
        <th>Turma</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Responsavel</th>
        <th>Ações</th>
</tr>





<?php

$sql = "SELECT * FROM alunos";
$sql = $pdo->query($sql);
foreach($sql->fetchAll() as $usuario) {
echo '<tr>';
echo '<td>'.$usuario['nome'].'</td>';
echo '<td>'.$usuario['email'].'</td>';
echo '<td>'.$usuario['matricula'].'</td>';
echo '<td>'.$usuario['turma'].'</td>';
echo '<td>'.$usuario['CPF'].'</td>';
echo '<td>'.$usuario['telefone'].'</td>';
echo '<td>'.$usuario['responsavel'].'</td>';
echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';

}



?>



</div>
</table>
</body>
</html>