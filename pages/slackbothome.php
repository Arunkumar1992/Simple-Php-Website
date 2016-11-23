
<?php
echo "In a slack bot handler page";

$datain = file_get_contents('php://input');
$obj = json_decode($datain);
print_r($obj);





?>


