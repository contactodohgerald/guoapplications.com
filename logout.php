<?php
if (!isset($_SESSION['api_Token'])){
    header('location:./');
}

session_start();
session_destroy();


