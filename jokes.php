<?php
$url = 'http://api.icndb.com/jokes/random/';

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, "");
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
echo $response;

$obj = json_decode($response);
//  print_r($obj);
if(array_key_exists('joke', $obj)) {
  print_r($obj->joke);
}
?>
