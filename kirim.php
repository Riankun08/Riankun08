<?php
$name = $_POST['nama'];
$email= $_POST['email'];
$judul = $_POST['judul'];
$message = $_POST['pesan'];
$formcontent=" Dari: $name \n Email : $email \n  judul: $judul  \n Pesan: $message";
$recipient = "muhamadrian81182@gmail.com";
$subject = "Kontak Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
?>