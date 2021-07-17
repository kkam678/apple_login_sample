<?php
include_once '../settings.php';
 ?>
<html>
    <head>
        <script type="text/javascript" src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>
        <meta name="appleid-signin-client-id" content="<?=$client_id?>">
        <meta name="appleid-signin-scope" content="email">
        <meta name="appleid-signin-redirect-uri" content="<?=$redirect_uri?>">
        <meta name="appleid-signin-state" content="Test">
        <meta name="appleid-signin-use-popup" content="false"> <!-- or false defaults to false -->
    </head>
    <body>
        <div id="appleid-signin" class="signin-button" data-color="black" data-border="true" data-type="sign in"></div>
    </body>
</html>
