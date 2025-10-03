<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Área Exclusiva</title>
</head>
<body>
  <h2>Bem-vindo à área exclusiva!</h2>
  <p>Aqui estão os downloads secretos de jogos 🚀</p>
  <a href="logout.php">Sair</a>
</body>
</html>
