<?php
        if(isset($_POST['reg']))
            {
                require('functions.php');
                create_user();
            }
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="utils/static/css.css">
    <link rel="shortcut icon" href="utils/static/logow.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Registration</title>
</head>
<body class="text-center">
    <div class="container">
       <main class="form-signin">

<form action="" method="POST">
        <h1>Inscription</h1>
        <input type="text" name="last" placeholder="Nom" class="form-control">
        <input type="text" name="first" placeholder="Prenom" class="form-control">

        <input type="email" name="mail" placeholder="Email" class="form-control">
        <input type="password" name="pass1" placeholder="Mot de passe" class="form-control">
        <input type="password" name="pass2" placeholder="Confirmez le mot de passe" class="form-control">
        <select name="type" class="form-control">
        <option value="is_student">Etudiant</option>
        <option value="is_parent">Parent</option>
        <option value="is_staff">Professeur</option>
        <option value="is_admin">Membre de l'administration</option>
        </select>
        <small>Vous avez déjà un compte ? <a href="login.php">Connectez vous</a></small>
        <input type="submit" value="S'inscrire" name="reg" class="w-100 btn btn-lg btn-primary">

</form>
</main>


</div>
</body>
</html>
