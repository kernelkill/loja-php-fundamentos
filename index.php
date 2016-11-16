<?php
include("cabecalho.php");
include("valida-usuario.php");
?>

<?php if (isset($_GET["login"]) && $_GET["login"] == true) { ?>
    <p class="alert-success"> Login efetuado com sucesso.</p>
<?php } ?>

<?php if (isset($_GET["login"]) && $_GET["login"] == false) { ?>
    <p class="alert-danger"> Usuario ou Senha Invalidos.</p>
<?php } ?>

<?php if (isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"] == true) { ?>
    <p class="alert-danger"> Você nao esta logado, permissão negada!</p>
<?php } ?>

<h1>Bem-Vindo!</h1>
<?php if (usuarioEstaLogado()) { ?>
    <p class="text-success">Voce esta logado como <?=usuarioLogado()?>.</p>
<?php } else { ?>

    <h2>Login</h2>
    <form action="login.php" method="post">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary">Logar</button>
                </td>
            </tr>
        </table>
    </form>
<?php } ?>
<?php include("rodape.php"); ?>
