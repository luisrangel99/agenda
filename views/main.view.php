<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo htmlspecialchars($_SESSION['user']);?></title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contener-mainly">
        <div class="menu">
            <div class="text first textBoxes" id="boxOne"><p>Tarea 1</p></div>
            <div class="text textBoxes"><p>Tarea 1</p></div>
            <div class="text textBoxes"><p>Tarea 1</p></div>
            <div class="text textBoxes"><p>Tarea 1</p></div>
            <div class="text textBoxes"><p>Tarea 1</p></div>
            <div class="text textBoxes"><p>Tarea 1</p></div>
            <div class="text textBoxes"><p>Tarea 1</p></div>
            <div class="text textBoxes"><p>Tarea 1</p></div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <input type="submit" value="close session" class="close-session" name="close_session" width="100px">
        </form>
        </div>
    <div class="contener-main">

    </div>
    </div>
    <script src="javascript/main.js">
    </script>
        </body>
</html>