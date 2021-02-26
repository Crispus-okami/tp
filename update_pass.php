<?php
    session_start();
    $mail = $_SESSION['email'];
    $id = $_SESSION['id'];
    require('functions.php');

if(isset($_POST['confirm']))
    {
        require('connect_db.php');
        $pass = sha1($_POST['pass']);
        $req = $db->prepare('UPDATE users SET password=? WHERE id=?');
        $req -> execute(array($pass, $id));
        header('location: dashboard.php');
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

    <title>Mot de passe</title>
</head>
<body class="text-center">
    <div class="container">
       <main class="form-signin">
<form action="" method="POST">
            <h1>Confirmer votre compte</h1>
            <input type="text" name="pass" placeholder="Nouveau mot de passe" class="form-control">

            <input type="submit" value="confirmer" name="confirm" class="w-100 btn btn-lg btn-primary">
            
        </form>
        </main>


</div>
</body>

</html>