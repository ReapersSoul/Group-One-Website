<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Pet Planet</title>
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- ours -->
        <link rel="stylesheet" href="css/Global.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?     family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">

    </head>
    <header>
        <!-- Link to Header.ssi-->
        <?php include 'ssi/Header.ssi'; ?>
    </header>
    <body>
        <div class="jumbotron">
            <div class="container">
                <h2 class="display-3">Pet Planet Animal Items</h2>
                <p>All of your pet's needs and wants online and in store!</p>
                <p><a class="btn btn-primary btn-lg" href="product.php" role="button" class="button">Shop Now! &raquo;</a></p>
            </div>
        </div>
          <div class="container">
                    <div class="row">
              <div class="col-md-4">
                 <div class="thumbnail">
                    <div class="caption">
                        <h3 class="mycenter">Get to know us!</h3>
                        <p>
                            If you've never visited us before you might want to get to know what our business is and how we operate. Check out who we are, what we are, and why we do it
                        </p>
                        <p>
                            <a href="about.php" class="btn btn-primary" role="button">About us</a>
                        </p>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail" >
                    <div class="caption">
                        <h3 class="mycenter">Ask us something!</h3>
                        <p>
                            Have any questions this page doesnt answer? you can ask us with a call, email, or even a letter and we would be happy to get back to you as soon as we can!
                        </p>
                        <p>
                            <a href="contact.php" class="btn btn-primary" role="button">Contact us</a>
                        </p>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="thumbnail">
                    <div class="caption">
                        <h3 class="mycenter">Start an account!</h3>
                        <p>
                            Would you like to be updated on all of our deals and any special events we put on? If so please feel free to make an account with us so we can send you an email any time an event happens.
                        </p>
                        <p>
                            <a href="register.php" class="btn btn-primary" role="button">Register</a>
                        </p>
                    </div>
                </div>
             </div>
            </div>
            <hr>
        </div>

    </body>

    <!-- Link to Footer.ssi -->
    <?php include 'ssi/Footer.ssi'; ?>
</html>
