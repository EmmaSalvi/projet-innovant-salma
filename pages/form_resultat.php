<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Réception des données par formulaire</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css"  href="../css/style_01.css" media="all">
    </head>
 
    <body>
        <div class="container">
            <h1 class="row">Réception des données par formulaire</h1>
            <section class="row">
                <p>L'array (tableau) permet de vérifier le passage des données et sous quelle forme les données sont reçues.<br>
                    Le mot de passe n'est pas crypté.<br>
                    <em>Utilisation essentiellement en phase de développement.</em></p>
                <?php
                echo '<pre>';
                    print_r($_POST);
                echo '</pre>';
                
                // Variable pour placer le prénom saisi dans le formulaire
                $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
                                
                echo '<p>Je place le prénom dans une variable que j\'utilise pour le 2ème affichage du prénom dans la page</p>';
                echo '<pre>';
                    print_r($prenom);
                echo '</pre>';
                                
                // J'affiche une 1ère fois le prénom - méthode 1
                if (isset($_POST['prenom'])) { // Je vérifie si j'ai bien une donnée saisie
                    echo 'Bonjour ' . htmlspecialchars(strip_tags($_POST['prenom'])) . '.<br>';
                } else {
                    echo '<p>Tu dois indiquer ton prénom. Utilise le lien en bas de page pour retourner au formulaire</p>';
                }
                
                ?>
                
                <!-- Affichage une 2ème fois du prénom - Méthode 2 dans le HTML -->
                <?php
                if (isset($_POST['prenom'])) {
                ?>
                <p>Ou Bonjour <?php echo $prenom; ?> directement dans le HTML.</p>
                <?php
                } else {
                ?>
                    <p>Tu dois indiquer ton prénom. Utilise le lien en bas de page pour retourner au formulaire</p>
                <?php
                }
                ?>    
                    
                <!-- Affichage du pays -->
                <?php
                if (isset($_POST['pays'])) {
                ?>
                    <p>J'habite en <?php echo $_POST['pays']; ?>.</p>
                <?php
                } else {
                ?>
                    <p>Tu dois indiquer ton pays. Utilise le lien en bas de page pour retourner au formulaire</p>
                <?php
                }
                ?>                

                <p><a href="../index.php">Retour au formulaire</a></p>
            </section>
        </div>
    </body>
</html>