<!doctype html>
<html lang='en'>

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dakota Gray">
    <meta name="description" content="Pet Planet's welcome page for those that log into the website.  Can only be accessed if you log in through the website.">
    <meta name="keywords" content="Member, Login, Menu, Pet Planet, Group 1 Project">

    <!-- Title of the Page -->
    <title>Hello firstName!</title>
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
            <div class="col fullHeight">
                <!-- Test the user to be sure they can get in -->
                <?php 
                    /* IF memberSessionVariable != TRUE
                            GOTO login.php;
                        ELSE
                            echo '<h2>Hello firstName lastName, it's nice to see you again! '</h2>';*/
                ?>
                <br>
                <p> So, what brings you to Pet Planet today? </p>
                <button onclick="document.location='product.php'" class="button">I'm here to view the avalible products</button>
                <button onclick="document.location='sale.php'" class="button">I'm here to go shopping</button>
                <button onclick="document.location='about.php'" class="button">I want to learn about Pet Planet</button>
                <button onclick="document.location='contact.php'" class="button">I want to reach out to Pet Planet</button>
            </div>
        </div>
</body>

    <!-- Link to Footer.ssi -->
    <?php include 'ssi/Footer.ssi'; ?>

</html>
