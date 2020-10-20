<?php
include ("stylo.php");
setcookie("editor", "", 0, "/");
$data = array('status' => 200, 'message' => 'Logout OK \o/');
echo json_encode($data);
?>
