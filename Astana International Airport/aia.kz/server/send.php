<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $from = $_POST['email'];
        $message = $_POST['message'];
        $to = "imakhambet@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма

        $headers = "From:" . $from;

        $text="You Have received an email from".$name.".\n\n".$message;
        
        mail($to,$subject,$message,$headers);
        header("Location: ../pages/contacts.php");
    }
?>