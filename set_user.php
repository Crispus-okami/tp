<?
session_start(); 
$id = $_SESSION['id'];
$first = $_SESSION['first'];
$last = $_SESSION['last'];
$mail = $_SESSION['email'];


if(isset($_POST['set']))
    {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $mail = $_POST['userid'];
        require('functions.php');
        user($mail,$first, $last, $id);
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

    <title>Informations personnnelles</title>
</head>
<body class="text-center">
    <div class="container">
       <main class="form-signin">
<form action="" method="POST">
            <h1>Modifier</h1>
            <?php
            echo('
            <input type="text" name="userid" placeholder="Email" value="'.$mail.'" class="form-control">
            <input type="text" name="last" placeholder="Nom" value="'.$last.'" class="form-control">
            <input type="text" name="first" placeholder="Prénom" value="'.$first.'" class="form-control">

            <input type="submit" value="Modifier" name="set" class="w-100 btn btn-lg btn-primary">');
            ?>
        </form>
        </main>


</div>
</body>

</html>
