<?php
session_start();

$_SESSION['api_Token'] = trim($_POST['api_token']);
$_SESSION['unique_id'] = trim($_POST['uniqueId']);
echo json_encode(
    [
        'status'=> true,
        'token_r'=>$_SESSION['api_Token'],
        'user_unique_id'=>$_SESSION['unique_id'],
    ]
);