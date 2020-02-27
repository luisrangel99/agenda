<?php
session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['user']) and isset($_POST['passwd'])){
            $user = $_POST['user'];
            $user = strtolower($user);
            $user = filter_var($user, FILTER_SANITIZE_STRING);
            $passwd = $_POST['passwd'];
            $passwd = hash('sha512', $passwd);

            if(!empty($user) and !empty($passwd)){
                try{
                    $conn = new PDO('mysql:host=127.0.0.1;dbname=proyect', 'root', '');
                    $statement = $conn->prepare('SELECT * FROM users WHERE user = :user AND passwd = :passwd LIMIT 1');
                    $statement->execute(array(
                        ':user' => $user,
                        ':passwd' => $passwd
                    ));

                    $result = $statement->fetch();
                    echo $result;
                    if($result){
                        echo '<script>alert("User found");</script>';
                    }else{
                        echo '<script>alert("User not found");</script>';
                    }
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
            }
    
        }else{
            header('Location: index.php');
        }
    }



?>