
<?php

$datain = file_get_contents('php://input');
$obj = json_decode($datain);

if( isset( $mydata['challenge'] ) ){
  print_r($obj->challenge);

}

if( isset( $mydata['message'] ) ){
 
  print_r($obj->message);
  print_r($obj->channel);
  print_r($obj->user);
  print_r($obj->text);
  print_r($obj->ts);

}



?>


