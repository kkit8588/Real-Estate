<?php
require_once 'config.php';
 
session_start();
if (isset($_POST['submit'])) {
    
    $_SESSION['title'] = $_POST['title'];
    $_SESSION['sqm'] = $_POST['sqm'];
    $_SESSION['agent_email'] = $_POST['agent_email'];
    $_SESSION['client_email'] = $_POST['client_email'];
    $_SESSION['properties_id'] = $_POST['properties_id'];

    try {
        $response = $gateway->purchase(array(

            'amount' => $_POST['amount'],
            'currency' => PAYPAL_CURRENCY,
            'returnUrl' => PAYPAL_RETURN_URL,
            'cancelUrl' => PAYPAL_CANCEL_URL,
        ))->send();
 
        if ($response->isRedirect()) {
            $response->redirect(); // this will automatically forward the customer
        } else {
            // not successful
            echo $response->getMessage();
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
}