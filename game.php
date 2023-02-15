


<?php
    echo 'bonjour';
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_POST['firstname']; 
     $age = $_POST['lastname']; 
     $adresse = $_POST['sexe'];
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant GET</h3>'; 
     echo 'Nom : ' . $nom . ' lastname : ' . $age . ' Adresse : ' . $adresse; 
     exit;
  }
?>

