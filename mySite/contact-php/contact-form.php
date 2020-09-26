<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $message = $_POST['message'];
        $mail_from = $_POST['mail'];
        $subject = "New Form Submission";
        
        $to = "togrul492@gmail.com";
        $headers = "From: ".$mail_from;
        $txt = "You have received an e-mail from ".$name."./n/n".$message;
        
        mail($to, $subject, $txt, $headers);
        header("Location: http://mr-jafarzadeh.epizy.com/index.php");
        
    }
?>