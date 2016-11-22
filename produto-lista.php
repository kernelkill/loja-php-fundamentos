<?php require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-produto.php");
require_once("valida-usuario.php");

verificaUsuarioLogado();
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
            <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?= $produto['id'] ?>">Altera</a></td>

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
