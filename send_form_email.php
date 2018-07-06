<!doctype html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Authentic SiChuan cuisine situated in North Greenwich. Karaoke Rooms, Takeaway & Free Parking">
  <meta name="author" content="Becky Liu">
  <meta name="robots" content="sichuan greenwich, sichuan, greenwich, north greenwich, karaoke, london, south east, si, chuan, chinese, restaurant, takeaway, free parking, spicy, chilli, cuisine, odeon greenwich dinner"
  />
  <meta name="googlebot" content="sichuan greenwich,sichuan, greenwich, north greenwich, karaoke, london, south east, si, chuan, chinese, restaurant, takeaway, free parking, spicy, chilli, cuisine, odeon greenwich dinner"
  />
  <title>
    SiChuan Restaurant | North Greenwich
  </title>
  <link rel="stylesheet" type="text/css" href="css/sass.css">
  <link rel="stylesheet" type="text/css" href="css/gallery.css">
  <link rel='stylesheet prefetch' href='css/gallery-fixed.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

 

 <section id="introduction">

<div class="wrapper">
 <div class="introCopy">
 
 <?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@sichuangreenwich.co.uk";
    $email_subject = "Email from Sichuan Website";
 
    function died($error) {
        // your error code can go here
        echo "<p>We are very sorry, but there were error(s) found with the form you submitted.</p> ";
        echo "<p>These errors appear below.</p>";
        echo $error."";
        echo "<p>Please go back and fix these errors.</p>";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['full_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $full_name = $_POST['full_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= '<p>The <font color="#BA0707">Email Address</font> you entered does not appear to be valid.</p>';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$full_name)) {
    $error_message .= '<p>The <font color="#BA0707">First Name</font> you entered does not appear to be valid.</p>';
  }
 

 
  if(strlen($comments) < 2) {
    $error_message .= '<p>The <font color="#BA0707">Comments</font> you entered do not appear to be valid.</p>';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($full_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<p>Thank you for contacting us. We will be in touch with you very soon.</p>

<p><a href="http://www.sichuangreenwich.co.uk">Click here to return to site</a></p>

<?php
 
}
?>


 
</div></div>
 </section>


</body>
</html>