<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 10/11/16
 * Time: 20:24
 */


function listaCategorias($conexao) {
    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao, $query);
    while($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($categorias, $categoria);
    }
    return $categorias;
}