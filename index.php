<?php



$write = new sendMail("gogo@hotmail.fr", "moa@outlook.fr");

$write->setSubject("Bonjour");
$write->setMessage("Comment ça va ?");
$write->setMailer('PHP/'.phpversion());

