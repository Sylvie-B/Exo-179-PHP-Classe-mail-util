<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>send a mail</title>
</head>
<body>

    <form method="post" action="index.php">
        <div>
            <label for="mail-from">de</label>
            <input type="email" id="mail-from">
        </div>
        <div>
            <label for="mail-to">à</label>
            <input type="email" id="mail-to">
        </div>
        <div>
            <label for="mailTxt">votre message</label>
            <textarea name="mail" id="mailTxt" cols="30" rows="10"></textarea>
        </div>
    </form>
</body>
</html>

<?php



$write = new sendMail("gogo@hotmail.fr", "moa@outlook.fr");

$write->setSubject("Bonjour");
$write->setMessage("Comment ça va ?");
$write->setMailer('PHP/'.phpversion());

