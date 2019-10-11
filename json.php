<?php
 $restAPIKey = " 31b37b08ebf4a3da731f4e11e2d6265a";
 $callbackURI = urlencode("https://guibum.info");
 $kakaoLonginUrl = "https://kauth.kakao.com/oauth/authorize?client_id=".$restAPIKey."&redirect_uri=".$callbackURI."&response_type = code";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
</head>
<body>
    <a href="<?= $kakaoLonginUrl ?>">
</a>
</body>
</html>