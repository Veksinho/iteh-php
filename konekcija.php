<?php

include 'Usluga.php';
include 'Rezervacija.php';
include 'dbbroker.php';

$mysqli= new Mysqli('localhost','root','root','iteh_php_baza');
$mysqli->set_charset('utf8');
$db = new DBBroker($mysqli);
   echo '<script>console.log("Your stuff here")</script>';



