<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/loja.css">

    <title>[PHP] Teste de desempenho de banco de dados</title>
</head>
<body>
<div class="container">
    <div class="principal">

<script language="Javascript">

    function validaForm(){
        d = document.testemysql;
        //validar host
        if (d.host.value == ""){
            alert("O campo " + d.host.name + " deve ser preenchido!");
            d.host.focus();
            return false;
        }
        //validar login
        if (d.login.value == ""){
            alert("O campo " + d.login.name + " deve ser preenchido!");
            d.login.focus();
            return false;
        }
        //validar senha
        if (d.senha.value == ""){
            alert("O campo " + d.senha.name + " deve ser preenchido!");
            d.senha.focus();
            return false;
        }
        if (d.schema.value == ""){
            alert("O campo " + d.schema.name + " deve ser preenchido!");
            d.schema.focus();
            return false;
        }
        //validar repetir
        if (d.repetir.value == ""){
            alert("O campo Numero de Execuções de Teste deve ser preenchido!");
            d.repetir.focus();
            return false;
        }
    }
</script>

<h1><p class="alert-danger">Teste de desempenho de banco de dados MySQL</p></h1>
<form class="x" name="testemysql" action="fazteste.php" method="post" onSubmit="return validaForm()">
<fieldset>
    <table border="0">
        <h2><p class="alert-info">Dados do servidor<br></h2>
        <tr>
            <td class="x">Servidor: </td>
            <td><input class="x" type="text" name="host" id="host"></td>
        </tr>
        <tr>
            <td class="x">Usuario: </td>
            <td><input class="x" type="text" name="login" id="login"></td>
        </tr>
        <tr>
            <td class="x">Senha: </td>
            <td><input class="x" type="password" name="senha" id="senha"></td>
        </tr>
        <tr>
            <td class="x">Schema: </td>
            <td><input class="x" type="text" name="schema" id="schema"></td>
        </tr>
        <tr>
            <td class="y">Lista Tabelas?: </td>
            <td><input class="x" type="checkbox" size="20" name="listaTabela" id="listaTabela"></td>
            <td class="y">Nome Verdadeiro?: </td>
            <td><input class="x" type="checkbox" name="nomeTabelaVerdadeiro" id="nomeTabelaVerdadeiro"></td>
        </tr>
        <tr>
            <td class="y">Lista Campos?: </td>
            <td><input class="x" type="checkbox" name="listaCampo" id="listaCampo"></td>
            <td class="y">Nome Verdadeiro?: </td>
            <td><input class="x" type="checkbox" name="nomeCampoVerdadeiro" id="nomeCampoVerdadeiro"></td>
        </tr>
        <tr>
            <td class="x">Numero de Execuções do Teste: </td>
            <td><input class="x" type="text" name="repetir" id="repetir"></td>
        </tr>
    </table>
        <div class="btn btn-group">
            <input class="btn btn-danger" type="submit" value="enviar">
        </div>
    </div>
</div>
</fieldset>
</form>
</body>
</html>