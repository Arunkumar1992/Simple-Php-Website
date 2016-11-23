
<?php

$datain = file_get_contents('php://input');
$obj = json_decode($datain);

if(isset($obj['challenge'])){
  print_r($obj->challenge);

}

if( isset( $obj['message'] ) ){
 
  print_r($obj->message);
  print_r($obj->channel);
  print_r($obj->user);
  print_r($obj->text);
  print_r($obj->ts);

}



?>


