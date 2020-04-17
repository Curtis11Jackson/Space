<?php

$prenom = $_POST['prenom'];


$nom = $_POST['nom'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];


mail ( $email , $subject ,  $message  );

echo $email;





?>