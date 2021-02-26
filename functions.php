<?php

function create_user() 
{
    require('connect_db.php'); 

    if (isset($_POST['last']) && !empty($_POST['last']) && isset($_POST['first']) && !empty($_POST['first']) && isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['mail']) && !empty($_POST['mail'])  && isset($_POST['pass1']) && !empty($_POST['pass1'])  && isset($_POST['pass2']) && !empty($_POST['pass2']))
    {
        $mail = $_POST['mail'];
        
         
            $check = $db->prepare('SELECT id FROM users WHERE email=?');  
            $check->execute(array($mail));
            if ($check->rowcount() != 0) 
            {
                echo "<script>alert(\"Cette adresse mail est déjà utilisée \")</script>";
            } else {
                if ($_POST['pass1'] == $_POST['pass2']) 
                {   
                    $pass = sha1($_POST['pass1']);
                    $first = $_POST['first'];
                    $last = $_POST['last'];
                    $type = $_POST['type'];
                    $create_user = $db->prepare('INSERT INTO users (first_name, last_name, email, type, password) VALUES(?,?,?,?,?)');
                    $create_user->execute(array($first, $last, $mail, $type, $pass));
                    header('location:login.php'); 

                } else  
                {
                    
                    echo "<script>alert(\"Les mots de passe ne sont pas identiques\")</script>";
                }
            }
        
    } else {  
        echo "<script>alert(\"Tous les champs sont requis \")</script>";
    }
}


function login() // fonction de connexion d'un utilisateur 
{
    require('connect_db.php'); 


    if (isset($_POST['userid']) && !empty($_POST['userid']) && isset($_POST['pass']) && !empty($_POST['pass'])) 
    {
        $log_check = $db->prepare('SELECT id, first_name, last_name, type, is_active, email, password FROM users WHERE email=?'); 

      

        $log_check->execute(array($_POST['userid'])); 

        if ($log_check->rowcount() == 1) 
        {

            while ($user = $log_check->fetch()) {
                if (sha1($_POST['pass']) == $user['password']) 
                {
                    echo "<script>alert(\"Email\")</script>";
                    $_SESSION['id'] = $user['id']; 
                    $_SESSION['first'] = $user['first_name'];
                    $_SESSION['last'] = $user['last_name'];
                    $_SESSION['type'] = $user['type'];
                    $_SESSION['active'] = $user['is_active'];
                    $_SESSION['email'] = $user['email'];
                   header('location:dashboard.php'); 
                } else {
                    echo "<script>alert(\"Email ou mot de passe incorect\")</script>"; 
                }
            }
        } else {
            echo "<script>alert(\"Email ou mot de passe incorrect\")</script>";

        }
    } else {
        echo "<script>alert(\"Tous les champs sont requis\")</script>";
      

    }
}

function user($mail, $first, $last, $id)
{
    require('connect_db.php'); 


    if (isset($_POST['userid']) && !empty($_POST['userid']) && isset($_POST['first']) && !empty($_POST['last'])) 
    {
        $req = $db->prepare('UPDATE users SET first_name=?, last_name = ?, email = ? WHERE id=?');
        $req -> execute(array($first, $last, $mail, $id));
        
        $_SESSION['first'] = $first;
        $_SESSION['last'] = $last;
        $_SESSION['email'] = $mail;
        header('location: dashboard.php');
    }
    
    else {
        echo "<script>alert(\"Tous les champs sont requis\")</script>";
      

    }
}


function randompass() { 
    $n=5;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 


?>