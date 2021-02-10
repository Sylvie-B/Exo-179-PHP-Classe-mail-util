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
            <input type="email" id="mail-from" name="mailFrom">
        </div>
        <div>
            <label for="mail-to">à</label>
            <input type="email" id="mail-to" name="mailTo">
        </div>
        <div>
            <label for="subject">objet</label>
            <input type="text" id="subject" name="subject">
        </div>
        <div>
            <label for="mailTxt">votre message</label>
            <textarea name="mail" id="mailTxt" cols="30" rows="10"></textarea>
        </div>
        <button name="send" type="submit">valider</button>
    </form>
</body>
</html>

<?php
    require './CreateMail.php';

if(isset($_POST['send'], $_POST['mailFrom'], $_POST['mailTo'], $_POST['subject'], $_POST['mail'])){
    $newMail = new CreateMail($_POST['mailTo'], $_POST['mailFrom'], $_POST['subject'], $_POST['mail']);
    $newMail->createMail();
}
