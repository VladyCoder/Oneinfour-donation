<?php
    require_once "../stripe-php/init.php";
    require_once "../config/secret.php";
    
    if(isset($_GET['amount'])){
        $amount = $_GET['amount']*100;    
    }else{
        $amount = 0;
    }
    
    
    \Stripe\Stripe::setApiKey(STRIPE_SECRET);
    $intent = \Stripe\PaymentIntent::create([
        'amount' => $amount,
        'currency' => 'usd',
        'metadata' => ['integration_check' => 'accept_a_payment']
    ]);


    echo $intent->client_secret;
?>