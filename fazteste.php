<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title> Teste de Conexão </title>
</head>
<body>
<?php

// Criamos a função que fará os cálculos atravéz do comando microtime() do PHP
$tempo = null;
function execucao(){
    $sec = explode(" ",microtime());
    $tempo = $sec[1] + $sec[0];
    return $tempo;

}

// No inicio da página executamos a função para iniciar o calculo, gerando a variavel $inicio
$inicio = execucao();

//echo "hora de inicio: ".$Time->TempoInicialParcial;

$host = $_POST["host"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$schema = $_POST["schema"];

if(isset($_POST["listaTabela"])) {
    $listaTabela =1;
}  else  {
    $listaTabela = 0;
}

if(isset($_POST["nomeTabelaVerdadeiro"])) {
    $nomeTabelaVerdadeiro =1;
}  else  {
    $nomeTabelaVerdadeiro = 0;
}

if(isset($_POST["listaCampo"])) {
    $listaCampo =1;
}  else  {
    $listaCampo = 0;
}

if(isset($_POST["nomeCampoVerdadeiro"])) {
    $nomeCampoVerdadeiro =1;
}  else  {
    $nomeCampoVerdadeiro = 0;
}

$repetir = $_POST["repetir"];


$repeticao = 0;
while ($repeticao < $repetir) {
    $link = null;
    $result = null;
    $tabelas = null;
    $result1 = null;
    $row = null;

    $link = mysql_connect($host, $login, $senha, $schema)or die("<h1><p class='alert-danger'>Falha ao se conectar ao banco. Verifique se os dados de conexão estão corretos, como senha, usuario e etc.</p></h1>");;
    if (!$link) {
        echo 'Nao foi possivel conectar: '. mysql_error() . '<br>';
        exit;
    } else {
        echo '<h2><p class="alert-success">Conectado no servidor de banco de dados como <b>' .$login. '</b> no servidor <b> '.$host. '</b> na base de dados <b>' .$schema. ' </b></p></h2><br/>';
    }

    $dbname = $schema;
    mysql_select_db($dbname, $link);

    $sql = "SHOW TABLES FROM $dbname";
    $result = mysql_query($sql);

    if (!$result) {
        echo "DB Error, tabela não pode ser listada\n";
        echo 'MySQL Error: ' . mysql_error();
        exit;
    }  /*else {
               echo 'tabela - consulta realizada com sucesso <br><br>';
          } */

    $contar = 0;
    while ($tabelas = mysql_fetch_row($result)) {
        //echo "Tabela: {$tabelas[0]}\n <br>";
        $contar++;
        if ($listaTabela == 1) {
            if ($nomeTabelaVerdadeiro == 0) {
                echo "Tabela: ".$contar."<br>";
            } else {
                echo "Tabela: {$tabelas[0]} <br>";
            }
        }

        $result1 = mysql_query('SHOW COLUMNS FROM `'.$tabelas[0].'`');
        if (mysql_num_rows($result1) > 0) {
            $contar1 = 0;
            while ($row = mysql_fetch_assoc($result1)) {
                //print '<span>'.$row['Field'].'</span><br />';
                $contar1++;
                if ($listaCampo == 1) {
                    if ($nomeCampoVerdadeiro == 0) {
                        print '<span>Campo: '.$contar1.'</span><br />';
                    } else {
                        print '<span>'.$row['Field'].'</span><br />';
                    }
                }
            }
            if ($listaTabela || $listaCampo) {
                echo "<br>";
            }
        }
    }
    mysql_close($link);
    $repeticao++;
    echo "<h2><p class='alert-success'>execução numero: ". $repeticao . "</p></h2>";
    echo "<br>";
}

// Após a execução da página, geramos a variavel $fim, que nos dará o tempo final da execução da página
$fim = execucao();

// Agora é só fazermos a subtração de um pelo outro, e usar o number_format() do PHP para formatar com 6 casas depois da virgula e pronto, mas caso você queira alterar esse número de casas depois da vírgula para mais ou menos, fique a vontade
$tempo = number_format(($fim-$inicio),6);

// Agora á só imprimir o resultado
print "<h2><p class='alert-success'>Tempo de Execução: <b>".$tempo."</b> segundos </p></h2>";

?>
</body>
</html>

