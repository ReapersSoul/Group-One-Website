<!doctype html>
<html lang='en'>

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dakota Gray">
    <meta name="description" content="Pet Planet's welcome page for those that log into the website.  Can only be accessed if you log in through the website.">
    <meta name="keywords" content="Member, Login, Menu, Pet Planet, Group 1 Project">

    <!-- Title of the Page (I want to display the username here so badly... -->
    <title>Hello User!</title>
    <!-- bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- ours -->
        <link rel="stylesheet" href="css/Global.css">
        <link rel="stylesheet" href="css/TeamError.css"> <!-- May have to be replaced with a different stylesheet  -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?     family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">

</head>

<header>
    <!-- Link to Header.ssi-->
    <?php include 'ssi/Header.ssi'; ?>
</header>

<body>
        <div class="row">
            <div class="col fullHeight"> <!-- I feel like I want to insert an image here as a background -->
                <!-- Test the user to be sure they can get in -->
                <?php
                    //Processing to turn InvalidLogin/InvalidRegister into a boolean so the if else statement runs smoother
                
                    /* In case if you need to manually set some values in order to test if the code works, 
                        Declare a variable holding a value you want to recieve from a cookie ($boolean = "true"; or $boolean = "false";)
                        Assign said variable to either InvalidLogin or InvalidRegister (setcookie("InvalidItem", $boolean, time() + 3600);) 
                    You many need to do this with Username as well if you want to remain on the member page.*/
                
                    //For the best results, please wait fifteen minutes after registering before logging in and vice versa.
                        if (isset($_COOKIE["InvalidLogin"])){
                            if ($_COOKIE["InvalidLogin"] == "true"){ //This piece doesn't want to work, but why does InvalidLogin refuse to be true?
                                $invalid = true;
                                $newUser = false;}
                            else if ($_COOKIE["InvalidLogin"] == "false")
                                $invalid = false;}
                        elseif (isset($_COOKIE["InvalidRegister"])){
                            if ($_COOKIE["InvalidRegister"] == "true"){
                                $invalid = true;
                                $newUser = true;}
                            else if ($_COOKIE["InvalidRegister"] == "false")
                                $invalid = false;}
                        
                        //Checks to be sure there are values in Username and InvalidLogin/InvalidRegister
                        if (!isset($invalid) || !isset($_COOKIE["Username"]))
                            header('Location: ./error.php');
                        
                    //This is the actual testing
                    if ($invalid){
                        if ($newUser)
                            header('Location: ./register.php');
                        else
                            header('Location: ./login.php');}
                    else
                        echo "<h1 style=color:firebrick>Hello " . $_COOKIE["Username"] . ", it's nice to see you again! </h1>";
                ?>
                <br>
                <h5 style=color:indianred> So, what brings you to Pet Planet today? </h5>
                <button onclick="document.location='product.php'" class="button">I'm here to view the avalible products</button>
                <button onclick="document.location='about.php'" class="button">I want to learn about Pet Planet</button>
                <button onclick="document.location='contact.php'" class="button">I want to reach out to Pet Planet</button>
            </div>
        </div>
</body>

    <!-- Link to Footer.ssi -->
    <?php include 'ssi/Footer.ssi'; ?>

</html>
