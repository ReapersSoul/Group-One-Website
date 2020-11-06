<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <meta charset="utf-8">
        <title>Pet Planet</title>
        <!-- bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!-- ours -->
        <link rel="stylesheet" href="../Global.css">
        <link rel="stylesheet" href="Contactcss.css">
    </head>
    <header id="header">
        <div class="col header fullWidth">
            <div href="../Index.html" class="title">Pet Planet.</div>
            <nav class="row fullWidth linkCont" id="navbar">
                <a href="../Index.html" class="link">Home</a>
                <a href="../Marielle/Product.html" class="link">Shop</a>
                <a href="../Trevor/Login.html" id="Login" class="link">Login</a>
                <a href="../Trevor/Register.html" id="Register" class="link">Register</a>
                <a href="../Marielle/About.html" class="link">About Us</a>
                <a href="Contact.html" class="link">Contact Us</a>
                <a href="../Dakota/Team.html" class="link">Team</a>
            </nav>
        </div>
    </header>
    <body>
        <div class="row">
            <div class="col fullHeight" border-raduis="5px">
                <h4 >Please contact us if you have any questions</h4>
                <p>Email: ShopName@Gmail.com</p>
                <p>Phone number: 231-775-9643</p>
                <p>9237 James Road</p>
                <p>Big Rapids, MI 49307</p>
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
            content: '<div id="invalid" class="Invalid"></div><form class="" action="../Login.php" method="post"><label for="Username">Username:</label><br><input type="text" name="Username" ><br><label for="Password">Password:</label><br><input type="password" name="Password" value=""><br><div class="row"><input type="submit" value="Login"></div></form>',
            allowHTML: true,
            interactive: true,
          });

          tippy('#Register', {
            content: '<div id="invalid" class="Invalid"></div><form class="" action="../Register.php" method="post"><label for="Username">Username:</label><br><input type="text" name="Username" ><br><label for="Password">Password:</label><br><input type="password" name="Password" value=""><br><div class="row"><input type="submit" value="Register"></div></form>',
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