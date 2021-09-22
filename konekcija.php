<?php

include 'Usluga.php';
include 'Rezervacija.php';
include 'dbbroker.php';

$mysqli= new Mysqli('localhost','root','','iteh_php_baza');
if ($mysqli->connect_errno) {
   printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
   exit();
}

$mysqli->set_charset('utf8');

$db = new DBBroker($mysqli);



