<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Padaria T&T</title>
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div name="titulo" id="titulo">
        <h1>Panificadora T&T</h1>
    </div>

    <?php
    if (isset($_SESSION['nao_autenticado'])) :
    ?>
        <div class="notification is-danger">
            <p>Erro: Usuário ou senha inválidos.</p>
        </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>



    <div class="login">
        <h1>Acesso ao Sistema</h1>
        <form method="post" action="login.php">
            <div class="field">
                <div class="control">
                <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" >
                </div>
            </div>

            <div class="field">
                <div class="control">
                <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-large">Entrar</button>
        </form>
    </div>

</body>

</html>




