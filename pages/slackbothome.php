
<?php

$datain = file_get_contents('php://input');
$obj = json_decode($datain);
//  print_r($obj);
if(array_key_exists('challenge', $obj)) {
  print_r($obj->challenge);
}
if(array_key_exists('type', $obj)) {
  print_r($obj->type);
  print_r($obj->channel);
  print_r($obj->user);
  print_r($obj->text);
  print_r($obj->ts);
$token ="token=xoxp-98176787622-98753570469-104802262023-8ff962a125b4b11152865561fff40f9c";
  $channel=$obj->channel;
$text = $obj->text;
  $messagetext ="Hi We recieved your message " . $text;
  $slackurl= "https://slack.com/api/chat.postMessage?";
  $posturl = $slackurl . "token=" . $token . "&channel=" . $channel . "&text=" . $messagetext . "&pretty=1";
  echo "<br/>";
  echo $posturl;
    
}




?>


