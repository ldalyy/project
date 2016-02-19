<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>
  </head>

  <body>
    <?php

    // Get the Values from the Contact form
    $EmailFrom = "Website Contact Form";
    $EmailTo = "volunteereireann@gmail.com";    
    $Subject = "YOUR SUBJECT HERE"; 
    $name = Trim(stripslashes($_POST['name'])); 
    $email = Trim(stripslashes($_POST['email'])); 
    $phone = Trim(stripslashes($_POST['phone']));
    $message = Trim(stripslashes($_POST['message'])); 


    // Assign the values to the variables for the email
    $Body = "";

    $Body .= "name: ";
    $Body .= $name;

    $Body .= "\n";

    $Body .= "email: ";
    $Body .= $email;

    $Body .= "\n";

    $Body .= "phone: ";
    $Body .= $phone;

    $Body .= "\n";

    $Body .= "message: ";
    $Body .= $message;

    $Body .= "\n";

    // Send mail 
    $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

    // If success , redirect to index.html
    if ($success){
     print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
     }
     else{
     print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
     }
     ?>
    </body>
</html>
