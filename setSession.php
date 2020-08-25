<?php
session_start();

$_SESSION['api_Token'] = trim($_POST['api_token']);
echo json_encode(['status'=> true, 'token_r'=>$_SESSION['api_Token']]);