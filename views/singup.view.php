<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sing up</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
<h2 class="title-login">Login</h2>
<div class="line"></div>
        <div class="box-login">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <input class="border-box" type="text" name="user" id="user" class="user" placeholder="User">
                <input class="border-box"  type="password" name="passwd" id="passwd" class="passwd" placeholder="Type your password">
                <input class="border-box"  type="password" name="repasswd" id="repasswd" class="passwd" placeholder="Type your password again">
                <input type="submit" value="Sing up" class="login" id="login">
        </form>
        <div class="singup-login">
            <p class="text-p">Do you already have an account?</p>
            <a href="login.php">Log in</a>
        </div>

        <?php if($errors !== ""): ?>
            <div class="ul-errors" style="background: white; width: 80%; margin: 0 auto; padding: 5px; border-radius: 7px; margin-top: 30px;">
                <ul style="text-align: center; list-style:none; text-decaration: none; color: red;">
                    <?php echo $errors; ?>
                </ul>
            </div>
        <?php endif; ?>
        </div>
    </div>
</body>
</html>
