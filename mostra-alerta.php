<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 16/11/16
 * Time: 21:21
 */

session_start();
function mostraAlerta($tipo){
    if (isset($_SESSION[$tipo])){
        ?>

        <p class="alert-<?=$tipo?>"><?= $_SESSION[$tipo]?></p>

        <?php
        unset($_SESSION[$tipo]);
    }
}
?>