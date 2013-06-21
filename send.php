<?php
$hasError = false ;
$emailSent = false ;
//If the form is submitted
if(isset($_POST['submit'])) {

    //Check to make sure that the name field is not empty
    if(trim($_POST['contactname']) == '') {
        $hasError = true;
    } else {
        $name = trim($_POST['contactname']);
    }

    //Check to make sure that the subject field is not empty
    if(trim($_POST['subject']) == '') {
        $hasError = true;
    } else {
        $subject = trim($_POST['subject']);
    }

    //Check to make sure sure that a valid email address is submitted
    if(trim($_POST['mail']) == '')  {
        $hasError = true;
    } else if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", trim($_POST['mail']))) {
        $hasError = true;
    } else {
        $email = trim($_POST['mail']);
    }

    //Check to make sure comments were entered
    if(trim($_POST['message']) == '') {
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['message']));
        } else {
            $comments = trim($_POST['message']);
        }
    }

    //If there is no error, send the email
    if(!$hasError) {
        $emailTo = "metanote123@gmail.com";
        $body = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nComments:\n$comments";
        $headers = "From: Site de l'APE $emailTo\nReply-To: $email";
        if(mail($emailTo, $subject, $body, $headers)){
            echo 'mail';
        }  else {
            echo 'erreur mail';
        }
        header('location:home.php?msg=true');
    }  else {
        header('location:contact.php?msg=false');
    }
}
?>