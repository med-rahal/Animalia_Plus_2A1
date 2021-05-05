<?php
    include_once '../Model/Animal.php';
    include_once '../Controller/AnimalC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new UtilisateurC();
    if (
        isset($_POST["nom"]) && 
        isset($_POST["prix"]) &&
        isset($_POST["race"]) && 
        isset($_POST["id_vendeur"]) && 
        isset($_POST["categorie_animal"])
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prix"]) && 
            !empty($_POST["race"]) && 
            !empty($_POST["id_vendeur"]) && 
            !empty($_POST["categorie_animal"])
        ) {
            $user = new Utilisateur(
                $_POST['nom'],
                $_POST['prix'], 
                $_POST['race'],
                $_POST['id_vendeur'],
                $_POST['categorie_animal']
            );
            $userC->ajouterUtilisateur($user);
            header('Location:afficherAnimal.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherAnimal.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Fiche Animal</td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">Prix:
                        </label>
                    </td>
                    <td><input type="text" name="prix" id="prix" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="race">Race:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="race" id="race" >
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Vendeur</td>
                    <td>
                        <label for="id_vendeur">ID Vendeur:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_vendeur" id="id_vendeur" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="categorie_animal">Categorie Animal:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="categorie_animal" id="categorie_animal">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>