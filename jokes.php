<?php
$url = 'http://api.icndb.com/jokes/random/';
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, "");
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
$data = json_decode($response, TRUE);

$joke = $data['value']['joke'];
echo '{ "joke": "' .$joke . '"}';


//  print_r($obj);
?>
