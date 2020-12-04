<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This site is about a grocery store">
    <meta name="keywords" content="Group 1 Store, Pet supply products">
    <meta name="author" content="Marielle Bender">
    <meta name="generator" content="Brackets">
    <title>Pet Palace</title>
      
 <!--  =================== Insert the Favicon =========================== -->
    <link rel="shortcut icon" href="favicon.ico"/>

    <!--  =================== Bootstrap core CSS =========================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- ===================== Custom styles for this template ============ -->
    <link href="css/Global.css" rel="stylesheet">
    <link href="css/Sale.css" rel="stylesheet">
   
      
      <!-- ===================== Fonts  ==================================== -->
      <!-- Don't do both font methods. Choose one option -->
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
      
    </head>
        <body class="bdy">
            <header>
            <!-- Link to header-->
            <?php include 'ssi/Header.ssi'; ?>
            </header>
    <main>
         <?php
      print "<h1>Marvin the Moose</h1> "
          ?>
        
        <h2><img src="../img/Marvin Moose.png" alt="Marvin Moose" width="300" height="300"></h2>
        
        <?php
    print "<h2>$4.99</h2>"
          ?>
        <?php
    print "<p>The KONG Cozies are cute, soft and cuddly plush toys made with an extra layer of material, so they’re extra tough. Cozies are perfect for a game of fetch or as a comfort toy for your furry friend. Grab one of the 10 amazingly cute Cozie characters for your dog and we know your dog will love you for it</p>"
          ?>
        <?php
    print "<h3>Key Benefits</h3>"
          ?>
        <?php
    print "<p>Soft and cuddly plush toys made with an extra layer of material, so they’re extra tough.</p>"
          ?>
        <?php
    print "<p>Minimal filling for less mess around the house.</p>"
          ?>
        <?php
    print "<p>Perfect for a game of fetch or as a comfort toy for your furry friend.</p>"
          ?>
        <?php
    print "<p>Squeaks to help entice play for extra excitement.</p>"
          ?>
        <?php
    print "<p>Available in two different sizes: Small and Medium, so you can pick the perfect size for your pup</p>"
          ?>
        <?php
    print "<h3>Shipping Information</h3>"
          ?>
        
        <form action="Shipping.php" method="post">
        Name: <input type="text" name="name"><br>
        Street Address: <input type="text" name="address"><br>
        City: <input type="text" name="city"><br>
        State: <input type="text" name="state"><br>
        Zip Code: <input type="text" name="zip"><br>
        Credit Card Number: <input type="number" name="credit card number"><br>
        Expiration Date: <input type="date" name="expiration date"><br>
        CCV Number: <input type="number" name="CCV"><br>
        <input type="submit">
        </form>

            </main>
           
            
            
        
            
            
    </body>
    
        <!--Link to footer-->
        <?php include 'ssi/Footer.ssi'; ?>
    
</html>