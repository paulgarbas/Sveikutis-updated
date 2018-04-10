<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SVEIKUTIS - Susisiekite su mumis!</title>
    <meta name="description" content="Parašykite, paskambinkite ar atvykite į SVEIKUTĮ, kur inovatyviais metodais grindžiama originali programa muzikuoja būsimi tėvai, kūdikiai ir vaikai iki 3 metų.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map-init.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCiyL_0jSw3-vc0atLtKCyAD0wsMccEgw&callback=initMap"
  type="text/javascript"></script>


    <script src="js/main.js"></script>


  </head>
  <body>
    <!-- Header Start -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- header Nav Start -->
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Meniu</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
<!--                  <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="Logo">
                  </a> --!>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Pradžia</a></li>
                    <li><a class="page-scroll" href="index.html#intro">Apie mus</a></li>
                    <li><a class="page-scroll" href="index.html#feature">Mokytoja</a></li>
                    <li><a class="page-scroll" href="index.html#service">Tvarkaraštis</a></li>                    
<!--                    <li><a href="work.html">Work</a></li> -->
                    <li><a class="page-scroll" href="work.html">Šeimos knyga</a></li>
                    <li><a class="page-scroll" href="index.html#testimonial">Atsiliepimai</a></li>                    
                    <li><a href="contact.html">Kontaktai</a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
          </div>
        </div>
        </header><!-- header close -->
        
        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h1>SUSISIEKITE SU MUMIS</h1>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->

<?php
// define variables and set to empty values
$nameErr =  "Jūsų vardas";
$emailErr = "Jūsų el. pašto adresas";
$commentErr = "Jūsų žinutė";
$destination = "sveikutis@sveikutis.lt";
$emailOK = false;
$name = $email = $comment = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Įveskite savo vardą";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Leidžiami simboliai - raidės ir tarpai"; 
    } else {
      $nameErr = "Jūsų vardas";
      }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Įveskite savo el. pašto adresą";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Netinkamas el. pašto adresas"; 
    } else {
      $emailErr = "Jūsų el. pašto adresas";
      $emailOK = true;
      }
  }
    
  if (empty($_POST["subject"])) {
    $subject = "";
  } else {
    $subject = test_input($_POST["subject"]);
    }


  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
    }
    
  if ($emailOK) {
    mail($destination, "$subject", $comment, "From:" . $email);
    $commentErr = "Jūsų žinutė išsiųsta!";
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

        <section id="contact-form">
          <div class="container">
            <div class="row">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="<?php echo $nameErr;?>">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="email" placeholder="<?php echo $emailErr;?>">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Tema">
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="form-group-2">
                      <textarea class="form-control" rows="3" name="comment" placeholder="<?php echo $commentErr;?>"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit">Siųsti</button>
                </div>
              </div>
            </form>
            </div>
            <div id="contact-box" class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>Susisiekite su mumis</h2>
                  <ul class="address-block">
                    <li>
                      <i class="fa fa-map-marker"></i>Vytenio g. 50, 14B korpusas, Vilnius
                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i>sveikutis@sveikutis.lt
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>+370 659 33041
                    </li>
                  </ul>

                  <ul class="social-icons">
                    <li>
                      <a href="https://www.facebook.com/sveikutis/"><i class="fa fa-facebook"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>Mes esame čia</h2>
                    <div class="google-map">
                      <div id="map"></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- footer Start -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="footer-manu">
                  <ul>
                <li><a class="page-scroll" href="index.html">Į pradžia</a></li>
                <li><a class="page-scroll" href="contact.php">Kontaktai</a></li>
                  </ul>
                </div>
            <p>Copyright &copy; Crafted by <a href="https://dcrazed.com/">Dcrazed</a>
            <br>Copyright &copy; Sveikutis
            <br>Copyright &copy; Rūta Čigriejūtė, piešiniai</p>            
              </div>
            </div>
          </div>
        </footer>
        
        
        
      </body>
    </html>