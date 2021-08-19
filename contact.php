<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message '];

    $mailTo = "afanfian14@gmail.com";
    $headers = "Form: ".$mailFrom;
    $txt = "You have received an e-mail Form ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?maillsend");
}

?>