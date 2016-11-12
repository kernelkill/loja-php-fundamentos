<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 06/11/16
 * Time: 12:14
 */

//Função que ista produtos.
function listaProdutos($conexao){

    $produtos = array();
    $result = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");
    while ($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

//Função que adiciona produtos.
function insereProduto($conexao,$nome,$preco,$descricao, $categoria_id){
    $query = "insert into produtos (nome, preco, descricao, categoria_id) VALUES ('{$nome}', {$preco}, '{$descricao }', {$categoria_id})";
    return  mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}