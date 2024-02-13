<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
define('CLIENT_ID', 'AVD9iN7_SoKE6KhbVPFbXJpwOOX8I31gDg1v0Lg7A1nT9aXav9jn6AFnZQkL1hDJzjXHGKDEZfqosN74');
define('CLIENT_SECRET', 'EN0Y8bAj6_hQfgQVzhql0Ly4OrO0Gd6eoGUbUA0hNQ-uW0-6JTOhtCzVQmzQR8hSfUjq8QTs2xecsCwf');
 
define('PAYPAL_RETURN_URL', 'http://localhost/realestate/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/realestate/cancel.php');
define('PAYPAL_CURRENCY', 'PHP'); // set your currency here
 
// Connect with the database
$db = new mysqli('localhost', 'root', '', 'realestate'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live