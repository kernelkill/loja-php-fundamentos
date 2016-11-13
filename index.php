<?php include("cabecalho.php"); ?>
<?php if(isset($_GET["login"]) && $_GET["login"] == true) { ?>
    <p class="alert-success"> Login efetuado com sucesso.</p>
<?php } ?>

<?php if(isset($_GET["login"]) && $_GET["login"] == false) { ?>
    <p class="alert-success"> Usuario ou Senha Invalidos.</p>
<?php } ?>

<h1>Bem-Vindo!</h1>
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
<?php include("rodape.php"); ?>
