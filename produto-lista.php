<?php include("cabecalho.php");?>

<?php include("conecta.php");

$result = mysqli_query($conexao, "select * from produtos");

while ($produto = mysqli_fetch_assoc($result)) {
    echo $produto['nome'] . "<br/>";
}
?>

<?php include("rodape.php");?>
