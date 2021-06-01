<?php
include('verifica_login.php');
if (!isset($_SESSION)) {
    session_start();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Home | Padoca</title>
    <meta charset="utf-8">
</head>

<body>
    <div class="ola" id="toolbar">
        <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
    </div>
    <div name="titulo" id="titulo">
        <h1>Panificadora T&T</h1>
    </div>
    <div name="toolbar" id="toolbar">
        <a id="procurar" href="procurar.php">Vendas</a>
        <a id="adicionar" href="estoque.php">Estoque</a>
        <h2><a href="logout.php">Sair</a></h2>

    </div>
    </div>
</body>

</html>