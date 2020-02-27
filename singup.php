<?php

$errors = '';

session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['user']) and isset($_POST['passwd']) and isset($_POST['repasswd'])){
            # Here I'm taking the password and the user, after it clear every field
            # it means taking any code wrong
            $user = $_POST['user'];
            $user = strtolower($user);
            $user = filter_var($user, FILTER_SANITIZE_STRING);
            $passwd = $_POST['passwd'];
            $passwd = filter_var($passwd, FILTER_SANITIZE_STRING);
            $passwdCount = strlen($passwd);
            $passwd = hash('sha512', $passwd);
            $repasswd = $_POST['repasswd'];
            $repasswd = filter_var($repasswd, FILTER_SANITIZE_STRING);
            $repasswd = hash('sha512', $repasswd);
            
            if(!empty($user) and !empty($passwd) and !empty($repasswd)){
                if($passwd !== $repasswd){
                    $errors = $errors . '<li>The passwords are not the same</li>';
                }else{
                    if($passwdCount < 8){
                        $errors = $errors . '<li>The password must be mayor of eight chars</li>';
                    }else{
                        require_once 'functions/Searchuser.php';
                        if(SearchUser($user)){
                            $errors = $errors . '<li>The user already exist</li>';
                        }else{
                            #it asks for the function to add an user
                            require_once 'functions/AddUser.php';
                            InsertUser($user, $passwd);
                            //header('Location: index.php');
                        }
                    }
                }
            }else{
                header('Location: index.php');
            }
        }
    }

?>

<?php
    require 'views/singup.view.php';
?>
