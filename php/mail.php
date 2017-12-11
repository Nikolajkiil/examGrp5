<!-- Kode fundet på hjemmesiden https://1stwebdesigner.com/php-contact-form-html/ -->

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$options = $POST['dropdown'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$email = "emailaddress@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>

<?php
bool mail(string $name, string $subject, string $message)
?>
