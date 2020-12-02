<!doctype html>
<html lang='en'>

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dakota Gray">
    <meta name="description" content="Pet Planet's Error Page.  Loads when a page couldn't be found.">
    <meta name="keywords" content="Error, Missing Page, Pet Planet, Group 1 Project">

    <!-- Title of the Page -->
    <title>Error! Page Not Found!</title>
    <!-- bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- ours -->
        <link rel="stylesheet" href="css/Global.css">
        <link rel="stylesheet" href="css/TeamError.css">

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
            <button onclick="document.location='index.php'" class="button">Home</button>
            </div>
        </div>
</body>

    <!-- Link to Footer.ssi -->
    <?php include 'ssi/Footer.ssi'; ?>

</html>
