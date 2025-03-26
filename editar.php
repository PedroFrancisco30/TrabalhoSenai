<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/guh.css">
        <title>Document</title>
</head>

<body>


<?php
require 'config.php';

$id = 0;

    $id = addslashes($_GET['id']);


if(isset($_POST['nome']) && empty($_POST['email']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $matricula = addslashes($_POST['matricula']);
    $turma = addslashes($_POST['turma']);
    $CPF = addslashes($_POST['CPF']);
    $telefone = addslashes($_POST['telefone']);
    $responsavel = addslashes($_POST['responsavel']);

    $sql = "UPDATE alunos SET nome = '$nome', email = '$email', matricula = '$matricula', turma = '$turma', CPF = '$CPF', telefone = '$telefone', responsavel = '$responsavel' WHERE id = '$id'";
    $pdo->query($sql);
    header("Location: usuarios.php");
}

$sql = "SELECT * FROM alunos WHERE id = '$id'";
$sql = $pdo->query($sql);

$dado = $sql->fetch();



?>

<h1 class="alunos">Pagina de Edição de Cadastro</h1>


<form method="POST" class="formulario">
    <p class="paragrafo">Nome:</p>
    <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"><br><br>
    <p class="paragrafo">Email:</p>
    <input type="text" name="email" value="<?php echo $dado['email']; ?>"><br><br>
    <p class="paragrafo">Matricula:</p>
    <input type="password" name="matricula" value="<?php echo $dado['matricula']; ?>"><br><br>
    <p class="paragrafo">Turma:</p>
    <input type="text" name="turma" value="<?php echo $dado['turma']; ?>"><br><br>
    <p class="paragrafo">CPF:</p>
    <input type="text" name="CPF" value="<?php echo $dado['CPF']; ?>"><br><br>
    <p class="paragrafo">Telefone:</p>
    <input type="text" name="telefone" value="<?php echo $dado['telefone']; ?>"><br><br>
    <p class="paragrafo">Nome de responsavel:(Maior de 18 não precisa)</p>
    <input type="text" name="responsavel" value="<?php echo $dado['responsavel']; ?>"><br><br>

    <input type="submit" value="Atualizar"><br><br>

</form>
</body>
</html>

