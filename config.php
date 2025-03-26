
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

$dsn = "mysql:dbname=escola;host=localhost";
$dbuser = "root";
$dbpass = "";

try{

  $pdo = new PDO($dsn, $dbuser, $dbpass);

} catch (PDOException $Paulo) {
  echo "Deu ruim na conexão com o banco: ".$Paulo->getMessage();

}


?>

</body>
</html>