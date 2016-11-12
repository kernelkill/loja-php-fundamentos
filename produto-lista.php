<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php"); ?>

<?php if (array_key_exists("removido", $_GET) && $_GET['removido'] == 'true') {
    ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
    <?php
}
?>

<table class="table table-striped table-bordered">
    <tbody>
    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Descriçao</th>
        <th>Categoria</th>
        <th>Gerenciar</th>

    </tr>
    <?php
    $produtos = listaProdutos($conexao);
    foreach ($produtos as $produto) :
        ?>

        <tr>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>
            <td><?= substr($produto['descricao'], 0, 40) ?></td>
            <td><?= $produto['categoria_nome'] ?></td>

            <form action="remove-produto.php" method="post">
                <input type="hidden" id="id" name="id" value="<?= $produto['id'] ?>">
                <td>
                    <button class=" btn btn-danger">remover</
                    >
                </td>
            </form>
        </tr>
        <?php
    endforeach;
    ?>
    </tbody>
</table>

<?php include("rodape.php"); ?>
