<?php
if (!isset($_SESSION['api_Token'])){
    $message = 'You Logged Out Successfully';
    header('location:signIn?error='.$message);
}

session_start();
session_destroy();


