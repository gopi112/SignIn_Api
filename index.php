<?php

require_once('settings.php');

$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
a {
  color: grey;
  font-family: helvetica;
  text-decoration: none;
  text-transform: uppercase;
  display: block;
	text-align: center;
	margin: 50px 0;
}

a:hover {
  text-decoration: underline;
}

a:active {
  color: black;
}
</style>
<body>
<a id="signin-button" href="<?= $login_url ?>">login with Google</a>

</body>
</html>