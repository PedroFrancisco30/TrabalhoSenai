<?php
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
    echo "Area restrita.. Faça Login";
    header("Location: login.php");

} else {
    header("Location: login.php");
}

?>