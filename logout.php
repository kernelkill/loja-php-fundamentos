<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/11/16
 * Time: 23:37
 */

include ("valida-usuario.php");
logout();
header("Location: index.php?logout=true");
die();