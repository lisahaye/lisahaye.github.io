<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un mail par formulaire</title>
</head>

<body>
    <?php
        $to = 'lisajuliehaye@gmail.com';
        $message = $this->input->post('message');
        $from_email="=?UTF-8?B?".base64_encode( $this->input->post('mail'))."?=";
        $from_user = "=?UTF-8?B?".base64_encode( $this->input->post('nom'))."?=";
        $subject = "=?UTF-8?B?".base64_encode($this->input->post('object'))."?=";
        $headers = "From: $from_user <$from_email>\r\n".   "MIME-Version: 1.0" . "\r\n" . "Content-type: text/html; charset=UTF-8" . "\r\n";
        mail($to, $subject, $message, $headers);
        redirect('https://lisahaye.github.io/#contact');
    ?>
</body>
</html>