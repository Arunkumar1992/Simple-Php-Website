
<?php
echo "In a slack bot handler page";
echo $_POST;
$json = file_get_contents('php://input');
$obj = json_decode($json);
echo $obj;
?>


