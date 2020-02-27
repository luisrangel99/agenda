<?php
function SearchUser($user){
    try{
        $conn = new PDO('mysql:host=127.0.0.1;dbname=proyect', 'root', '');
        $statement = $conn->prepare('SELECT * FROM users WHERE user = :user LIMIT 1');
        $statement->execute(array(
            ':user' => $user,
        ));

        $result = $statement->fetch();

        if($result){
            return true;
        }else{
            return false;
        }
    }catch(PDOException $e){
        die();
    }
}
?>