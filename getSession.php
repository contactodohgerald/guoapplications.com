<?php
ob_start();
session_start();

if(isset($_GET['get_user_token'])){
    $token_r = $_SESSION['api_Token'];
    $user_unique_id = $_SESSION['unique_id'];
    echo json_encode( [
        'api_token'=>$token_r,
        'user_unique_id'=>$user_unique_id,
    ]);
}