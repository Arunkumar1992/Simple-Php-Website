
<?php

$datain = file_get_contents('php://input');
$obj = json_decode($datain);

if(array_key_exists('challenge', $obj))){
  print_r($obj->challenge);

}
if(array_key_exists('message', $obj)) {
  print_r($obj->message);
  print_r($obj->channel);
  print_r($obj->user);
  print_r($obj->text);
  print_r($obj->ts);
}




?>


