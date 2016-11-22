<?php
require_once("cabecalho.php");
require_once("valida-usuario.php");
?>

<?php if (usuarioEstaLogado()) { ?>
    <p class="text-success text-center">Voce esta logado como <?=usuarioLogado()?>. <a href="logout.php" class="btn btn-danger">Deslogar</a></p>
<?php } else { ?>

    <form action="login.php" method="post">
        <h1 class="text-center">Login</h1>

        <div class="form-group">
            <label class="sr-only" for="login">Usuário</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-user"></span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="Seu login ou email">
            </div>
        </div>

        <div class="form-group">
            <label class="sr-only" for="senha">Senha</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-lock"></span>
                </div>
                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
            </div>
        </div>

        <div class="form-group">
            <input type="submit" value="Logar" class="btn btn-success form-control">
        </div>
        <div class="form-group">
            Não é registrado? <a href="index.php">Crie uma conta</a>.
        </div>
    </form>

    <!--
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
    </form>-->
<?php } ?>
<?php include("rodape.php"); ?>
