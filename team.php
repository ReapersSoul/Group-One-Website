<!doctype html>
<html lang='en'>

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dakota Gray">
    <meta name="description" content="Pet Planet's Website Designer Information Page">
    <meta name="keywords" content="Team, Contributions, Group 1 Project">

    <!-- Title of the Page -->
    <title>Meet the Team!</title>
    <!-- bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- ours -->
        <link rel="stylesheet" href="../Global.css">
        <link rel="stylesheet" href="TeamError.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?     family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
</head>


<header>
    <div class="col header fullWidth">
        <div href="../Index.html" class="title">Pet Planet</div>
        <nav class="row fullWidth linkCont" id="navbar">
            <a href="../Index.html" class="link">Home</a>
            <a href="../Marielle/Product.html" class="link">Shop</a>
            <a href="../Trevor/Login.html" id="Login" class="link">Login</a>
            <a href="../Trevor/Register.html" id="Register" class="link">Register</a>
            <a href="../Marielle/About.html" class="link">About Us</a>
            <a href="../Carter/Contact.html" class="link">Contact Us</a>
            <a href="Team.html" class="link">Team</a>
        </nav>
    </div>
</header>

<body>
   <div class="row">
    <div class="col">
        <hr>
        <hr>
        <h1>Meet the Designer Team of Pet Planet!</h1>
        <hr>
       </div>
    </div>
    <!-- Should I include pictures with the designer profiles? -->
    <div class="row">
        <div class="col-md-8">
            <h3>Trevor Ducharme</h3>
            <br>
            <p>Trevor Ducharme is the head of the team and the creator of the Register and Login pages of this website.  He's also responsible for designing the menu in the header and the footer.</p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>Marielle Bender</h3>
            <br>
            <p>Marielle Bender created the About and Product pages of this website.</p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>Carter Brown</h3>
            <br>
            <p>Carter Brown created the Home and Contact pages of this website.</p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>Dakota Gray</h3>
            <br>
            <p>Dakota Gray created this page, in addition to the website's elusive error page.</p>
            <hr>
        </div>
    </div>
</body>

    <!-- If only I knew more about the importance of the footer -->
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
            content: '<div id="invalid" class="Invalid"></div><form class="" action="../Trevor/Login.php" method="post"><label for="Username">Username:</label><br><input type="text" name="Username" ><br><label for="Password">Password:</label><br><input type="password" name="Password" value=""><br><div class="row"><input type="submit" value="Login"></div></form>',
            allowHTML: true,
            interactive: true,
          });

          tippy('#Register', {
            content: '<div id="invalid" class="Invalid"></div><form class="" action="../Trevor/Register.php" method="post"><label for="Username">Username:</label><br><input type="text" name="Username" ><br><label for="Password">Password:</label><br><input type="password" name="Password" value=""><br><div class="row"><input type="submit" value="Register"></div></form>',
            allowHTML: true,
            interactive: true,
          });
        </script>

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