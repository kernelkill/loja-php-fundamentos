<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/11/16
 * Time: 23:37
 */

require_once ("valida-usuario.php");
logout();
$_SESSION["success"] = "Deslogado com sucesso!";
header("Location: index.php");
die();