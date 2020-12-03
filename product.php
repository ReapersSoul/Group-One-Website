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
    <link href="css/Product.css" rel="stylesheet">


    <!-- ===================== Fonts  ==================================== -->
      <!-- Don't do both font methods. Choose one option -->
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
      <!--
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@1,700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Clicker+Script&family=Lobster+Two:ital,wght@1,700&display=swap');
         </style>
      -->
      <!-- ===================== Custom styles for this page only ============ -->


  </head>
    <body class="bdy">
      <!-- ==========================  TOP MENU =========================== -->
      <header>
            <!--Link to Header-->
            <?php include 'ssi/Header.ssi'; ?>
          
        </header>


       <!-- ==========================  MAIN CONTENT ====================== -->
<!-- ==========================  JUMBOTRON ====================== -->
        <main> 
       <!-- Main jumbotron for a primary marketing message or call to action -->
          <div class="jumbotron">
            <div class="container">
                <h2 class="display-3">Pet Supplies</h2>
                <p>Shop our selection of Pet Supplies!</p>
                <p><a class="btn btn-primary btn-lg removebackground" href="#" role="button">Shop Now! &raquo;</a></p>
            </div>
          </div>
       <!-- ============== Main Container ====================== -->
          <div class="container">
            <!-- ==============  Row 2 ============================= -->
            <div class="row">
              <div class="col-md-4">
                 <div class="thumbnail">
                    <p class="mycenter"><img class="mycenter" src="../img/Burts%20Bees%20Shampoo.png" alt="Burt's Bees Shampoo" width="300" height="200"></p>
                    <div class="caption">
                        <h3 class="mycenter">Burt's Bees Dog Shampoo</h3>
                        <p>
                            Burt’s Bees Oatmeal with Colloidal Oat Flour Dog Shampoo is made with natural ingredients like colloidal oat flour and honey for a product you can trust!
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                        </p>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail" >
                    <p class="mycenter"><img src="../img/Purina%20Dog%20Food.png" alt="Purina Dog Food" width="300" height="200"></p>
                    <div class="caption">
                        <h3 class="mycenter">Purina Dog Food</h3>
                        <p>
                            Keep your pup happy and healthy with the essential nutrition and satisfying flavor of Dog Chow Complete Dry Dog Food.
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                        </p>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="thumbnail">
                    <p class="mycenter"><img src="../img/Leash%20Product.png" alt="Leash and Harness" width="300" height="200"></p>
                    <div class="caption">
                        <h3 class="mycenter">Leash and Harness</h3>
                        <p>
                            With its two adjustment points, the Petmaker Dog Harness & Leash Set fits like a glove on your pup who is prone to pulling while walking.
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                        </p>
                    </div>
                </div>
             </div>
            </div>
            <hr>
           <!-- ====================================================== -->
           <!-- =================  Row 3 =================================== -->
         <div class="row">
              <div class="col-md-4">
                 <div class="thumbnail">
                    <p class="mycenter"><img src="../img/Marvin%20Moose.png" alt="Marvin the Moose" width="300" height="200"></p>
                    <div class="caption">
                        <h3 class="mycenter">Marvin the Moose Plush Dog Toy</h3>
                        <p>
                            Description
                            The KONG Cozies are cute, soft and cuddly plush toys made with an extra layer of material, so they’re extra tough.
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                        </p>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail" >
                    <p class="mycenter"><img src="../img/Meow%20Mix.png" alt="Meow Mix" width="300" height="200"></p>
                    <div class="caption">
                        <h3 class="mycenter">Meow Mix Cat Food</h3>
                        <p>
                            Meow Mix Original Choice Dry Cat Food is specially formulated to help adult cats stay healthy and happy.
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                        </p>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="thumbnail">
                    <p class="mycenter"><img src="../img/Bird%20Disco%20ball.png" alt="Bird Disco Ball" width="300" height="200"></p>
                    <div class="caption">
                        <h3 class="mycenter">Bird Disco Ball Toy</h3>
                        <p>
                            The JW Pet Activitoy Birdie Disco Ball Toy is a fun, interactive toy made to engage your pet bird’s senses and provide extra stimulation.
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Buy Now</a>
                        </p>
                    </div>
                </div>
             </div>
            </div>
            </div>
              
            <hr> <!-- /container --> 
         </main>
      
    </body>
    
        <!-- Link to footer-->
        <?php include 'ssi/Footer.ssi'; ?>
      
</html>
