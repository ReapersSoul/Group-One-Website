<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Trevor Ducharme">
        <meta name="generator" content="Atom">
        <title>Store Name</title>

<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

        <!--  =================== Insert the Favicon =========================== -->
        <link rel="shortcut icon" href="favicon.ico"/>
        <!-- bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!-- ours -->
        <link rel="stylesheet" href="../Global.css">
        <link rel="stylesheet" href="LoginRegister.css">
    </head>
    <header>
        <div class="col header fullWidth">
            <div href="../Index.html" class="title">Pet Planet.</div>
            <nav class="row fullWidth linkCont" id="navbar">
                <a href="../Index.html" class="link">Home</a>
                <a href="../Marielle/Product.html" class="link">Shop</a>
                <a href="Login.html" id="Login" class="link">Login</a>
                <a href="Register.html" id="Register" class="link">Register</a>
                <a href="../Marielle/About.html" class="link">About Us</a>
                <a href="../Carter/Contact.html" class="link">Contact Us</a>
                <a href="../Dakota/Team.html" class="link">Team</a>
            </nav>
        </div>
    </header>
    <body>
        <div class="row">
            <div class="col fullHeight">
                <div id="invalid" class="Invalid"></div>
                <form class="page" action="Register.php" method="post">
                    <label for="Username">Username:</label><br>
                    <input type="text" name="Username" ><br>
                    <label for="Password">Password:</label><br>
                    <input type="password" name="Password" value=""><br>
                    <div class="row"><input type="submit" value="Register"></div>
                </form>
            </div>
        </div>
    </body>
    <footer>
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- bootstrap -->
        <script src="../js/bootstrap.js"></script>
        <!-- ours -->
        <script src="../Global.js"></script>
        <!-- popper and tippy -->
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

        <script>
          // With the above scripts loaded, you can call `tippy()` with a CSS
          // selector and a `content` prop:
          tippy('#Login', {
            content: '<div id="invalid" class="Invalid"></div><form class="" action="Login.php" method="post"><label for="Username">Username:</label><br><input type="text" name="Username" ><br><label for="Password">Password:</label><br><input type="password" name="Password" value=""><br><div class="row"><input type="submit" value="Login"></div></form>',
            allowHTML: true,
            interactive: true,
          });

          tippy('#Register', {
            content: '<div id="invalid" class="Invalid"></div><form class="" action="Register.php" method="post"><label for="Username">Username:</label><br><input type="text" name="Username" ><br><label for="Password">Password:</label><br><input type="password" name="Password" value=""><br><div class="row"><input type="submit" value="Register"></div></form>',
            allowHTML: true,
            interactive: true,
          });
        </script>

                <script src="Login.js"></script>
        <script type="text/javascript">
            if (getCookie("InvalidLogin")=="true") {
                $('#invalid').append('Invalid Login!');
                setCookie("InvalidLogin","");
            }

            if (getCookie("Username")!="") {
                $('#navbar').append('<a href="UserPage.html" class="link">'+getCookie("Username")+'</a>');
            }
        </script>
    </footer>
</html>
