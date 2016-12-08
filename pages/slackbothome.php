<!DOCTYPE html>
<html>
<body>
<?php

$datain = file_get_contents('php://input');
$obj = json_decode($datain);
//  print_r($obj);
if(array_key_exists('challenge', $obj)) {
  print_r($obj->challenge);
}


      



?>

</body>
</html>
