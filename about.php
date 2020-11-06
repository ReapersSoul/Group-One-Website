<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- bootstrap -->
        <link rel="stylesheet" href="./css/bootstrap.css">
        <!-- ours -->
        <link rel="stylesheet" href="./css/Global.css">
        <link rel="stylesheet" href="About.css">
        <!-- ===================== Fonts  ==================================== -->
      <!-- Don't do both font methods. Choose one option -->
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    </head>
    <header id="header">
        <div class="col header fullWidth">
            <div href="./Index.html" class="title">Pet Planet.</div>
            <nav class="row fullWidth linkCont" id="navbar">
                <a href="./Index.html" class="link">Home</a>
                <a href="./Product.html" class="link">Shop</a>
                <a href="./Login.php" id="Login" class="link">Login</a>
                <a href="./Register.html" id="Register" class="link">Register</a>
                <a href="./About.html" class="link">About Us</a>
                <a href="./Contact.html" class="link">Contact Us</a>
                <a href="./Team.html" class="link">Team</a>
            </nav>
        </div>
    </header>
    <body>
      <h1>All About Us</h1>
        <p>We here at Pet Palace are a grocery store for your furry friends. Founded in 2018, our founder wanted a cost friendly one-stop-shop for all the things you need for your non-human family members. We stock supplies for all types of animals: Dogs, Cats, Birds, Rabbits, Ferrits, Fish and more! Our owners love pets and want to take of yours, so we also offer small vet services as well as a full service groomers! If your pet just needs a cleaning we also have a self service shower station.  </p>

        <p>
        <img src="../Marielle/Photos/Woodrow.jpg" alt="Woodrow" width="500" height="600">
        <img src="../Marielle/Photos/Maggie.jpeg" alt="Maggie May" width="500" height="600"></p>
        <style>
        body {
          background-image: url('../Marielle/Photos/Pet%20sticks.jpg');
        }
        </style>
    </body>
    <footer>
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- bootstrap -->
        <script src="./js/bootstrap.js"></script>
        <!-- ours -->
        <script src="./js/Global.js"></script>
        <!-- popper and tippy -->
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

        <script>
          // With the above scripts loaded, you can call `tippy()` with a CSS
          // selector and a `content` prop:
          tippy('#Login', {
            content: '<div id="invalid" class="Invalid"></div><form class="" action="./Login.php" method="post"><label for="Username">Username:</label><br><input type="text" name="Username" ><br><label for="Password">Password:</label><br><input type="password" name="Password" value=""><br><div class="row"><input type="submit" value="Login"></div></form>',
            allowHTML: true,
            interactive: true,
          });

          tippy('#Register', {
            content: '<div id="invalid" class="Invalid"></div><form class="" action="./Register.php" method="post"><label for="Username">Username:</label><br><input type="text" name="Username" ><br><label for="Password">Password:</label><br><input type="password" name="Password" value=""><br><div class="row"><input type="submit" value="Register"></div></form>',
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