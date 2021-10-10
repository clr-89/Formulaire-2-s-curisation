<?php

$errors = [];
    if (empty($_POST['name'])) {
        $errors['errName'] = 'Veuillez indiquer votre nom';
        echo $errors['errName'] . PHP_EOL ;
    }
    if(empty($_POST['email'])){
        $errors['errEmail'] = 'Veuillez indiquer votre email';
        echo $errors['errEmail'] . PHP_EOL ;
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['errFormatEmail'] = 'Veuillez remplir une adresse mail correcte';
        echo  $errors['errFormatEmail'] . PHP_EOL ;
    }
    if(empty($_POST['phoneNumber'])){
        $errors['errPhoneNumber'] = 'Veuillez indiquer votre numéro de téléphone';
        echo $errors['errPhoneNumber'] . PHP_EOL ;
    }
    if(empty($_POST['message'])){
        $errors['errMessage'] = 'Veuillez renseigner un message';
        echo $errors['errMessage'] . PHP_EOL ;
    }
    if (count($errors) === 0) {

        echo "<p> Merci  " . $_POST["name"] . " de nous avoir contacté à propos de  " . $_POST["subject"] .
            "  Un de nos conseiller vous contactera soit à l’adresse " . $_POST["email"] .
            "  ou par téléphone au " . $_POST["phoneNumber"] . " dans les plus brefs délais pour traiter votre demande.</p> ";

    };
