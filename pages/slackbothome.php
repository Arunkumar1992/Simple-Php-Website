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
if(array_key_exists('type', $obj)) {
  print_r($obj->type);
  print_r($obj->channel);
  print_r($obj->user);
  print_r($obj->text);
  print_r($obj->ts);
  $channel=$obj->channel;
$text = $obj->text;
  $messagetext ="Hi We recieved your message " . $text;
  $slackurl= "https://slack.com/api/chat.postMessage?";
  $posturl = $slackurl . "token=" . $token . "&channel=" . $channel . "&text=" . $messagetext . "&pretty=1";
  echo "\n";
  echo $posturl;
    echo "\n";
    echo "<a href='" . $posturl . "'>". $posturl . "</a>";
    file_get_contents("https://slack.com/api/oauth.access?client_id=98176787622.103564029575&client_secret=4f3b543b507dba342586ecdf9df24684&code=98176787622.110861939287.bac265f0e1");
echo file_get_contents("https://slack.com/api/oauth.access?client_id=98176787622.103564029575&client_secret=4f3b543b507dba342586ecdf9df24684&code=98176787622.110861939287.bac265f0e1");

}

      



?>

</body>
</html>
