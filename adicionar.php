<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/guh.css">
        <title>Document</title>

<?php
require 'config.php';

if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $matricula = addslashes($_POST['matricula']);
    $turma = addslashes($_POST['turma']);
    $CPF = addslashes($_POST['CPF']);
    $telefone = addslashes($_POST['telefone']);
    $responsavel = addslashes($_POST['responsavel']);

    $pdo = new PDO("mysql:dbname=escola;host=localhost", "root", "");
    $sql = "INSERT INTO alunos SET nome = '$nome', email = '$email', matricula = '$matricula', turma = '$turma', CPF = '$CPF', telefone = '$telefone',responsavel = '$responsavel' " ;
    $pdo->query($sql);

    header("Location: usuarios.php");
}

?>

<br>
<br>
<br>

<div class="container">
<div class="imagem">
 <img src="img/logo3.png" alt="" width="150px" legnth="150px">
</div>
</div>

<a class="guh" href="usuarios.php">Retorne para a tabela</a>

<h1 class="alunos">Pagina do cadastro de novos alunos </h1>

<form method="POST" class="formulario">
    <p class="paragrafo">Nome:</p>
    <input type="text" name="nome">
    <p class="paragrafo">E-mail:</p>
    <input type="text" name="email">
    <p class="paragrafo">Matricula:</p>
    <input type="password" name="matricula">
    <p class="paragrafo">Turma:</p>
    <input type="turma" name="turma">
    <p class="paragrafo">CPF:</p>
    <input type="text" name="CPF">
    <p class="paragrafo">Telefone:</p>
    <input type="text" name="telefone">
    <p class="paragrafo">Nome do Responsavel:(Maior de 18 não precisa)</p>
    <input type="text" name="responsavel">

    <input type="submit" value="Cadastrar"><br><br>

</form>
</body>
</html>