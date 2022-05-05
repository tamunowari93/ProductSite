<?php
// Get contact information
$sku = $_POST['fname'];
$name = $_POST['lname'];
$price  = $_POST['address'];
$type = $_POST['state'];
$description = $_POST['zip'];


// Set contact information to save and display
$firstname = "Firstname: ".$fname."\n";
$lastname = "Lastname: ".$lname;
$address = "Address: ".$addr;
$state = "State: ".$state;
$zipcode = "Zipcode: ".$zip;
$phone = "Phone Number: ".$phone;
$email = "Email: ".$email;
$break = "_____________________________________";

// Save contacts to file line by line
$contacts = fopen("data.txt", "a+");
fwrite($contacts, $firstname);
fwrite($contacts, $lastname);
fwrite($contacts, ", ");
fwrite($contacts, $address);
fwrite($contacts, ", ");
fwrite($contacts, $state);
fwrite($contacts, ", ");
fwrite($contacts, $zipcode);
fwrite($contacts, ", ");
fwrite($contacts, $phone);
fwrite($contacts, ", ");
fwrite($contacts, $email);
fwrite($contacts, PHP_EOL);
fwrite($contacts, $break);
fwrite($contacts, PHP_EOL);
fclose($contacts); // close file

?>

<html>
  <link rel="stylesheet" href="styles.css">
  <head>
  </head>
  <body>
    <h1>Thanks for Registration!</h1><br>
    <p>Your information is:<p>
    <p><?php echo $firstname; ?><br>
       <?php echo $lastname; ?><br>
       <?php echo $address; ?><br>
       <?php echo $state; ?><br>
       <?php echo $zipcode; ?><br>
       <?php echo $phone; ?><br>
       <?php echo $email; ?><br><br><br>
    </p>
    <a href="contact.html">Return to the main page</a><br>
  </body>
</html>
