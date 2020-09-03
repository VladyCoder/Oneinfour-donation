<?php
    $errorMSG = "";

    if (empty($_POST["name"])) {
        $errorMSG = "Name is required ";
    } else {
        $name = $_POST["name"];
    }
    
    if (empty($_POST["email"])) {
        $errorMSG = "Email is required ";
    } else {
        $email = $_POST["email"];
    }
    
    if(isset($_POST["type"]) && $_POST["type"] == "volunteer"){
            $subject = "Request to be volunteer";
            $message = $name." requested to be volunteer";
    }else{
        if (empty($_POST["subject"])) {
            $subject = "oneinfourchildren.org";
        } else {
            $subject = $_POST["subject"];
        }
    
        if (empty($_POST["message"])) {
            $message = "You have a message from ".$name;
        } else {
            $message = $_POST["message"];
        }    
    }
    
    
    if($errorMSG != ''){
        echo json_encode(array('status' => 'error', 'msg' => $errorMSG));
        die;
    }

    // ------ send mail to admin -----//
    $to = "enquiries@oneinfourchildren.org";
    
    $body = "";
    $body .= "Name: ".$name;
    $body .= "\n";
    $body .= "Email: ".$email;
    $body .= "\n";
    $body .= "Message: ".$message;
    $body .= "\n";
    
    $send = mail($to, $subject, $body, "From:".$email);
    if ($send == 'success' && $errorMSG == ""){
        echo json_encode(array('status' => "success", "msg" => "sent a message successfully"));
    }else{
        echo json_encode(array('status' => 'error', 'msg' => "server error"));
    };

    //---------send mail to client ---------//
    $subject = "oneinfourchildren.org";

    $body = "";
    $body .= "Dear ".$name;
    $body .= "\n";
    $body .= "Thank you for your interest in volunteering with One In Four.";
    $body .= "\n";
    $body .= "We'll get back to you soon.";
    $body .= "\n";
    $body .= "\n";
    $body .= "Best wishes,";
    $body .= "\n";
    $body .= "oneinfourchildren.org";
    $body .= "\n";

    $send = mail($email, $subject, $body, "From:".$to);
    
    // if(isset($_SERVER['HTTP_REFERER'])) {
    //     header('Location: ' . $_SERVER['HTTP_REFERER']);
    //     exit;
    // }
?>
