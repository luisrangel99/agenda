<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
<h2 class="title-login">Login</h2>
<div class="line"></div>
        <div class="box-login">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <input class="border-box" type="text" name="user" id="user" class="user" placeholder="User">
                <input class="border-box"  type="password" name="passwd" id="passwd" class="passwd" placeholder="Password">
                <input type="submit" value="Login" class="login" id="login">
        </form>
        <div class="singup-login">
            <p class="text-p">Don't you have an account?</p>
            <a href="singup.php">Sing up</a>
        </div>
        </div>
        <?php if($errors !== ""): ?>
            <div class="ul-errors" style="background: white; width: 40%; margin: 0 auto; padding: 5px; border-radius: 7px; ">
                <ul style="text-align: center; list-style:none; text-decaration: none; color: red;">
                    <?php echo $errors; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
