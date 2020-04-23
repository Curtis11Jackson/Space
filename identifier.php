<?php
$user_agent = getenv("HTTP_USER_AGENT");

if(strpos($user_agent, "Win") !== FALSE)
$os = "Windows";
elseif(strpos($user_agent, "Mac") !== FALSE)
$os = "Mac";
elseif(strpos($user_agent, "Lin") !== FALSE)
$os = "Linux";

if($os === "Windows")
{
    $db = new PDO('mysql:host=localhost;dbname=space', 'root', '');
}

elseif($os === "Mac")
{
    $db = new PDO('mysql:host=localhost;dbname=space', 'root', 'root');
} 

elseif($os === "Linux")
{
    $db = new PDO('mysql:host=localhost;dbname=space', 'phpmyadmin', 'handigital');
    // echo getenv("HTTP_USER_AGENT");
}

?>