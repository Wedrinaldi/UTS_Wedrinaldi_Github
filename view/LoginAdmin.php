<?php

include('../config/config.php');

$login_button = '';

if(isset($_GET["code"])){
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    if(!isset($token['error'])){
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token']= $token['access_token'];
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();

        if(!empty($data['name'])){
            $_SESSION['name'] = $data['name'];
        }
        if(!empty($data['family_name'])){
            $_SESSION['user_last_name'] = $data['family_name'];
        } 
        if(!empty($data['email'])){
        $_SESSION['user_email_address'] = $data['email'];
        }
    } if(!empty($data['picture'])){
    $_SESSION['user_image'] = $data['picture'];
       }
}
if(!isset($_SESSION['access_token'])){
    $login_button = '<a href="'.$google_client->createAuthUrl().'"><h1>Login</h1></a>';

}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<tittle>Menampilkan Informasi Dari Admin</tittle>
<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
<script scr="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="gaya2.css">
</head>
<body>

<div class="contrainer">
<br />
<h2 align="center">Login Admin</h2>
<br />
<div class="panel panel-default">
<?php
if($login_button == ''){
    echo '<div class="panel-heading"><h1>Informasi Admin</h1></div><div
    class="panel-body">';
    echo '<img src ="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail">';
    echo '<h3><b>Nama :</b> '.$_SESSION['name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
    echo '<br> <br> <br> <br>';
    echo '<h1><a href ="UpdateData.php"> Cek dan Update Data Dari Calon Mahasiswa</h1>';
}else{
    echo '<div align="center">'.$login_button . '</div>';
}
?>
</div>
</div>

</body>
</html>