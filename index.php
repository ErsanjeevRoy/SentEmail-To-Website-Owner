<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0,
user-scalable=1">
<title>Form Submit to Send Email</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php
    if(!empty($_POST["Send"]){
        $userName = $_POST["name"];
        $userEmail = $_POST["email"];
        $userPhone = $_POST["phone"];
        $userMessage = $_POST["message"];
        $userName = $_POST["sanjeev.appycrown@gmail.com"];

        $mailHeaders = "Name: " . $userName . 
        "\r\n Email: " .  $userEmail .
        "\r\n Phone: " .  $userPhone . 
        "\r\n Message: " .  $userMessage . "\r\n";
        
        if(mail($toEmail, $userName, $mailHeaders)){
            $message = "Your Information is Received Successfully.";
        }
}
?> 

<div class="container"> 
        <form onsubmit="sendEmail(); reset(); return false;">
            <h3>GET IN TOUCH</h3>
            <input type="text" id="name" placeholder="Enter Your Name" required></br>
            <input type="email" id="email" placeholder="Enter Email id" required></br>
            <input type="text" id="phone" placeholder="Enter Phone no." required></br>
            <textarea id="message" rows="5" placeholder="How can we help you?"> </textarea></br>
            <button type="submit">Send</button> 
            <?php if(!empty($message)){ ?>
                <div class="success">
                    <strong><?php echo $message;</strong>
            </div>
            <?php } ?>
    </div>
</body>
</html>