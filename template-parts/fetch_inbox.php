<?php
session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['domain'])) {
    echo json_encode([]);
    exit;
}
$login = $_SESSION['login'];
$domain = $_SESSION['domain'];

$url = "https://www.1secmail.com/api/v1/?action=getMessages&login=$login&domain=$domain";
$response = file_get_contents($url);
echo $response;
