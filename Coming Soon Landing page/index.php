<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Landing Page</title>

      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Fonts -->
      <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
      <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Amatica+SC" rel="stylesheet">
    </head>
    <body>

      <section id="logo">

        <div class="container">
            <div class="row">

              <div class="col-md-12">
                <img src="img/my-logo.png" class="img-fluid">
              </div>

            </div>
        </div>
        
      </section>


      <section id="intro">
        
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>We're working hard, we'll be ready to launch in...</p>
            </div>
          </div>
        </div>
        
      </section>

        <section id="counter">
        
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="countDown"></div>
            </div>
          </div>
        </div>
        
      </section>

     <section id="icons">
        
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              	<ul class="list-inline">
              		<a href="#"><li class="list-inline-item"><i class="fa twitter fa-twitter-square fa-3x" aria-hidden="true"></i></li></a>
              		<a href="#"><li class="list-inline-item"><i class="fa facebook fa-facebook-square fa-3x" aria-hidden="true"></i></li></a>
              		<a href="#"><li class="list-inline-item"><i class="fa google fa-google-plus-square fa-3x" aria-hidden="true"></i></li></a>
              		<a href="#"><li class="list-inline-item"><i class="fa instagram fa-instagram fa-3x" aria-hidden="true"></i></li></a>
              	</ul>
            </div>
          </div>
        </div>
        
      </section>

      <section id="signup">
        
        <div class="container">
          <div class="row">

            <div class="col-md-12">
            	<form class="form-inline" role="form" method="post" action="#signup">
            		<input type="email" class="form-control form-control-sm" name="email" placeholder="enter your email">
            		<button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">Find out more</button>
            	</form>
            </div>

          </div>
        </div>
        
      </section>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery.countdown.js"></script>
      <script>
      $(function() {
        $('.countDown').countdown({
           date: "september 7, 2017 15:03"
           });
      });
      </script>
    </body>
  </html>
