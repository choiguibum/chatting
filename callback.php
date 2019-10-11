<?php
$returnCode = $_GET["code"];
$restAPIKey = " 31b37b08ebf4a3da731f4e11e2d6265a";
$callbackURI = urlencode("https://guibum.info");

$returnUrl = "https://kauth.kakao.com/oauth/token?grant_type=authorization_code&client_id=".$restAPIKey."&redirect_uri = ".$callbackURI."&code =".$returnCode;
$isPost = false;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $returnUrl);
curl_setopt($ch, CURLOPT_POST, $isPost);
curl_setopt($ch, CURL_RETURNTRANSFER, true);

$headers = array();
$loginResponse = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
var_dump($loginResponse);
$accessToken = json_decode($loginResponse)->access_token;
echo "<br><br> accessToken : ".$accessToken;
?>