<?php
include ("stylo.php");

if(isset($_POST['password'])) {
    $password=$_POST['password'];
    if(!empty($password)) {
        if(  hash('sha512', $password) == $stylo) {
            $ecrire = "ok";
            setcookie("editor", $editor, 0, "/");
        }
        if (!isset($ecrire)) {
            $data = array("status"=> '0', "message"=> 'Login pas OK :o( ');
        } else {
            $data = array('status' => 200, 'message' => 'Login OK \o/');
        }
        echo json_encode($data);
    }
}
?>
