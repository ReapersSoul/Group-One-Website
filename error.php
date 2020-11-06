<!doctype html>
<html lang='en'>

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dakota Gray">
    <meta name="description" content="Pet Planet's Error Page.  Loads when a page couldn't be found.">
    <meta name="keywords" content="Error, Missing Page, Group 1 Project">

    <!-- Title of the Page -->
    <title>Error! Page Not Found!</title>
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
            <div class="col fullHeight">
                <!-- The text display might not be the best, but I tried, I bet it would look better if I found out how to implement a scroll bar -->
                <h1>OH NO!</h1>
                <h2 style=color:indianred>An Error has Occured While Looking for Your Page</h2>
                <hr>
                <hr>
                <hr>
                <p> While we may not know the cause of this issue, we are sorry about the inconvienience.
                Please use the menu above, or the back button, to redirect yourself to another page.
                </p>
                <br>
                <p style=color:darkgray>Alternatively, you can click the button below and it will redirect you to the home page.</p>
                <hr>
            <button onclick="document.location='..//index.html'" class="button">Home</button>
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
            content: '<div id="invalid" class="Invalid"></div><form class="" action="Trevor/Login.php" method="post"><label for="Username">Username:</label><br><input type="text" name="Username" ><br><label for="Password">Password:</label><br><input type="password" name="Password" value=""><br><div class="row"><input type="submit" value="Login"></div></form>',
            allowHTML: true,
            interactive: true,
          });

          tippy('#Register', {
            content: '<div id="invalid" class="Invalid"></div><form class="" action="Trevor/Register.php" method="post"><label for="Username">Username:</label><br><input type="text" name="Username" ><br><label for="Password">Password:</label><br><input type="password" name="Password" value=""><br><div class="row"><input type="submit" value="Register"></div></form>',
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