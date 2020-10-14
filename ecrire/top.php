<?php
include ("stylo.php");

if(isset($_POST['password'])) {
    $password=$_POST['password'];
    if(!empty($password)) {
        if(  md5($password) == $stylo) {
            $ecrire = "ok";
            session_start();
            $_SESSION['editor']="5aee9dbd2a188839105073571bee1b1f";
            setcookie("editor", "5aee9dbd2a188839105073571bee1b1f");
        }
        if (!isset($ecrire)) {
            $error = '
            <div class="alert alert-danger">
                Pas le bon mot de passe
            </div>';
        }
        if (isset($error)) echo $error;
    }
}
?>
