
<?php
echo "In a slac bot handler page";
$json = file_get_contents('php://input');
$obj = json_decode($json);
echo $obj;
?>


