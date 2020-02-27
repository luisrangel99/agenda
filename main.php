<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: index.php');
        session_destroy();
    }

    require_once 'views/main.view.php';
?>

<?php
    if(isset($_POST['close_session'])){
        session_destroy();
        header('Location: index.php');
    }
?>