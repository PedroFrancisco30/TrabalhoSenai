<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/guh.css">
        <title>Document</title>
<?php


session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false) {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

 
$dsn = "mysql:dbname=escola;host=localhost";
$dbuser = "root";
$dbpass = "";

try {

    $db = new PDO($dsn, $dbuser, $dbpass);
    $sql = $db->query("SELECT * FROM admins WHERE email = '$email' AND senha = '$senha'");
    if($sql->rowCount() > 0) {


    $dado = $sql->fetch();
    $_SESSION['id'] = $dado['id'];
    header("Location: usuarios.php");
    

    }
   


} catch (PDOException $Paulo) {
    echo "Deu ruim na conexão com o banco: ".$Paulo->getMessage();

}

}

?>

<div class="fundo">

<div class="container">
<div class="imagem">
 <img src="img/logo3.png" alt="" width="150px" legnth="150px">
</div>
</div>

<br>
<br>
<br>


<h1 class="alunos">Seja bem vindo ao Cadastro de Alunos do Senai</h1>



<form method="POST" class="formulario">
    
    <p class="paragrafo">Email do Professor:</p>
    <input type="text" name="email"><br><br>
    <p class="paragrafo">Senha escolar:</p>
    <input type="password" name="senha"><br><br>
   

    <input type="submit" value="Entrar"><br><br>

</form>
</div>

</div>
</body>
</html>