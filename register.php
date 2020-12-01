<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Trevor Ducharme">
        <meta name="generator" content="Atom">
        <title>Pet Planet</title>

        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

        <!--  =================== Insert the Favicon =========================== -->
        <link rel="shortcut icon" href="favicon.ico"/>
        <!-- bootstrap -->
        <link rel="stylesheet" href="./css/bootstrap.css">
        <!-- ours -->
        <link rel="stylesheet" href="./css/Global.css">
        <link rel="stylesheet" href="./css/LoginRegister.css">
    </head>
    <?php include('./ssi/Header.ssi') ?>
    <body>
        <div class="row">
            <div class="col fullHeight">
                <div id="invalid" class="Invalid"></div>
                <form class="page" action="processregistration.php" method="post">
                    <label for="Username">Username:</label><br>
                    <input type="text" name="Username" ><br>
                    <label for="Password">Password:</label><br>
                    <input type="password" name="Password" value=""><br>
                    <input type="submit" value="Register" onclick="alert('You have been registered!')">
                </form>
            </div>
        </div>
    </body>
    <?php include('./ssi/Footer.ssi') ?>
</html>
