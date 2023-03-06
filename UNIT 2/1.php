<!-- Create a form containing two input fields (Name, Email_ID) and a submit button.
When the user clicks on submit button, the form data should be sent for processing to
PHP file ,which should display the welcome message with the email_id on the PHP page.
Form data should be sent by HTTP GET/POST method. -->

<?php

$name = $_POST["name"];
$email = $_POST["email"];

echo "Name :" . $name . "<br>";
echo "Email :" . $email . "<br>";

?>