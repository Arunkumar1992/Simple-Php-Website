<?php
header('Content-Type: application/json');
$url = 'https://creator.zoho.com/api/json/vendor/view/Item_View';
$zscope="creatorapi";
$zauthtoken="dba9eaaf1528a1c77885e321fa85e44e";
$zownername="akhilp2";
$zparams = 'scope=' . $zscope . '&authtoken=' . $zauthtoken . '&zc_ownername=' . $zownername;
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $zparams);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
//$data = json_decode($response, TRUE);
echo "<script language='javascript'>". $response ."alert('chjk')</script>";
//$joke = $data['value']['joke'];
//echo '{ "joke": "' .$joke . '"}';
//  print_r($obj);
?>
