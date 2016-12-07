<?php
$url = 'http://api.icndb.com/jokes/random/';
echo "joke will print 0";

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, "");
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
echo $response;
echo "joke will print 1";

$obj = json_decode($response);
echo "joke will print 2";

$joke = $obj['value']['joke'];
echo "joke will print 3";

echo $joke;
echo "joke printed";
//  print_r($obj);

?>
