<?php

if (isset($_POST['submit'])) {
    if ((empty($_POST['nom'])) || (empty($_POST['email'])) || (empty($_POST['project'])) || (empty($_POST['message']))) {
        echo "<p class='infos'> veuillez remplir les champs vides </p>";
        
    }else{
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $project = $_POST['project'];
        $message = $_POST['message'];

        $destinataire = 'benitojunior2022@gmail.com';
        $sujet = 'Sujet de l\'email';

        $contenu = "<html><body><h1 style='background-color:green; margin:1rem; border-raduis:.5rem;'>Porfolio</h1><br><p>$nom</p><p>$email</p><p>$project</p><p>$message</p></body></html>";

        $headers = "From:'.$destinataire\n";
        $headers .= "Content-type:text/html; charset= 'UTF-8'";


        mail($destinataire, $sujet, $contenu, $headers);
        echo " <p class='succes'> Votre message a bien &eacute;te &eacute;nvoy&eacute; </p>";

    }

}
      
;?>