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

<a class="guh" href="usuarios.php">Retorne para o cadastro de alunos</a>


<h1 class="alunos">Tabela de cadastro dos Admins</h1>


<table>
<tr>
        <th>Nome</th>
        <th>E-Mails</th>
        <th>Turmas</th>
</tr>




<?php

$sql = "SELECT * FROM admins";
$sql = $pdo->query($sql);
foreach($sql->fetchAll() as $usuario) {
echo '<tr>';
echo '<td>'.$usuario['nome'].'</td>';
echo '<td>'.$usuario['email'].'</td>';
echo '<td>'.$usuario['turmas'].'</td>';

}



?>



</div>
</table>
</body>
</html>