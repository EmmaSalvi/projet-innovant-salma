<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Transmettre des données par formulaire</title>
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css"  href="css/style_structure_01.css" media="all">
        
        
    </head>
 
    <body> 
        <div class="container">
            <section class="row">
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
                <div class="col-lg-1">1 colonnes</div>
            </section>

            <h1 class="row">Transmettre des données par formulaire</h1>
            <div class="row">
                <form class="form-horizontal col-sm-12" method="post" action="pages/form_resultat.php">
                    <!-- Champ de saisie texte une ligne -->
                    <div class="form-group form-group-lg">
                        <label for="prenom" class="col-sm-2 control-label">Ton prénom : </label>
                        <div class="col-sm-10 focus"> 
                            <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Ton prénom" autofocus required />
                        </div>
                    </div>
                    
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Ton mot de passe : </label>
                        <div class="col-sm-10 focus"> 
                            <input class="form-control" type="password" name="password" id="password" placeholder="Ton mot de passe" required />
                        </div>
                    </div>
                    
                    <!-- Champ de saisie texte multiligne -->
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Ton message : </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="message" rows="10">Ton message ici.</textarea>
                        </div>
                    </div>
                    
                    <!-- Liste déroulante -->
                    <div class="form-group">
                        <label for="pays" class="col-sm-2 control-label">Votre pays : </label>
                        <div class="col-sm-10">
                            <select class="form-control input-lg" name="pays">
                                <option value="Suisse">Suisse</option>
                                <option value="Belgique">Belgique</option>
                                <option value="France">France</option>
                                <option value="Italie">Italie</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Case à cocher -->
                    <h2>Un groupe de cases à cocher</h2>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label for="choix01">
                                    <input type="checkbox" name="choix01" id="choix01"> Choix 1
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="choix02">
                                    <input type="checkbox" name="choix02" id="choix02"> Choix 2
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="choix03">
                                    <input type="checkbox" name="choix03" id="choix02"> Choix 3
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Boutons radio -->
                    <h2>Un groupe de boutons radio</h2>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <p>Ici je pose bien une question ?</p>
                            <div class="radio">
                                <label for="answerRadios1">
                                    <input type="radio" name="answerRadios" id="answerRadios1" value="answerRadios1" checked>
                                    Ma réponse est un
                                </label>
                            </div>
                            <div class="radio">
                                <label for="answerRadios2">
                                  <input type="radio" name="answerRadios" id="answerRadios2" value="answerRadios2">
                                  Ma réponse est deux
                                </label>
                            </div>
                            <div class="radio disabled">
                                <label for="answerRadios3">
                                  <input type="radio" name="answerRadios" id="answerRadios3" value="answerRadios3" disabled>
                                  Ma réponse est trois - désactivée
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>