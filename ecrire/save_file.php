<?php
$filename = "../memoire/".$_POST['fileName'].".json";

$encodedJSON = json_encode($_POST['content'], JSON_PRETTY_PRINT);

$fh = fopen($filename, 'w') or die("can't open file");


$write = fwrite($fh, $encodedJSON);
if ($write)
    $data = array('status' => 200, 'message' => 'File written \o/ ('.$filename.')');
else
    $data = array("status"=> '0', "message"=> 'File NOT written :o( ');
echo json_encode($data);

fclose($fh);
?>
