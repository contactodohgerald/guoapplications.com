<?php

session_start();

if(isset($_GET['get_user_token'])){
    $token_r = $_SESSION['api_Token'];
    echo json_encode( [
        'api_token'=>$token_r,
    ]);
}