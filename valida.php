<?php
session_start();

$utilizador = "admin";
$senha = "12345";

if ($_POST['user'] == $utilizador && $_POST['pass'] == $senha) {
    $_SESSION['logado'] = true;
    header("Location: exclusivo.php");
} else {
    echo "<p>Utilizador ou palavra-passe incorretos!</p>";
    echo "<a href='login.php'>Tentar novamente</a>";
}
?>

