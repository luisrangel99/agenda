<?php

function InsertUser($user, $passwd){
    try{
        $conn = new PDO('mysql:host=127.0.0.1;dbname=proyect', 'root', '');
        $statement = $conn->prepare('INSERT INTO users VALUES(NULL, :user, :passwd)');
        $statement->execute(array(':user' => $user,
                            ':passwd' => $passwd)
        );
        $result = $statement->fetch();
        echo $result;
    }catch(PDOException $e){

    }
}

?>