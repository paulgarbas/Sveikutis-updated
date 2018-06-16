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

<!DOCTYPE html>
<html lang="lt" class="no-js">
  <head>
     <!-- Global Site Tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118109330-1"></script>
     <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-118109330-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sveikutis - Susisiekite su mumis!</title>
    <meta name="description" content='Parašykite, paskambinkite ar atvykite į „Sveikutį".'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Js -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
    </script>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>

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
                    <li><a href="classes.html">Veiklos</a></li>
                    <li><a class="page-scroll" href="index.html#feature">Mūsų komanda</a></li>
                    <li><a class="page-scroll" href="index.html#service">Tvarkaraštis</a></li>                    
                    <li><a class="page-scroll" href="work.html">Šeimos knyga</a></li>
                    <li><a class="page-scroll" href="index.html#testimonial">Atsiliepimai</a></li>                    
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
                  <h1>Susisiekite su mumis</h1>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->



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
                    <button class="btn btn-default send" type="submit">Siųsti</button>
                </div>
              </div>
            </form>
            </div>
            <div id="contact-box" class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>Susisiekite su mumis</h2>
                  <ul class="lectures-contact">
                    <li>
                      <a href="all-classes/pregnant.html">Nėščiųjų muzikinis ugdomasis sveikatinimas</a> 
                      <div><i class="fas fa-phone"></i>+370 659 33041</div>
                    </li>
                    <li>
                      <a href="all-classes/mazutukai.html">„Mažutukų dainos”. Ankstyvasis muzikinis ugdomasis sveikatinimas</a> 
                      <div><i class="fas fa-phone"></i>+370 659 33041, +370 620 20870</div>
                    </li>
                    <li>
                      <a href="all-classes/taputukai.html">„Taputukų dainos”. Ankstyvasis muzikinis ugdomasis sveikatinimas</a> 
                      <div><i class="fas fa-phone"></i>+370 659 33041, +370 620 20870</div>
                    </li>
                    <li>
                      <a href="all-classes/orff.html">Ansamblinis muzikavimas Karlo Orfo instrumentariumu vaikams</a> 
                      <div><i class="fas fa-phone"></i>+370 620 20870</div>
                    </li>
                    <li>
                      <a href="all-classes/piano.html">Fortepijono pamokos suaugusiems</a> 
                      <div><i class="fas fa-phone"></i>+370 603 81702</div>
                    </li>
                    <li>
                      <a href="all-classes/vocal.html">Vokalo pamokos suaugusiems ir vaikams</a> 
                      <div><i class="fas fa-phone"></i>+370 620 20870</div>
                    </li>
                    <li>
                      <a href="all-classes/workers.html">„Darboholikų” muzikinis ugdomasis sveikatinimas</a> 
                      <div><i class="fas fa-phone"></i>+370 659 33041</div>
                    </li>
                    <li>
                      <a href="all-classes/music-therapy-babies.html">Aktyvioji muzikos terapija kūdikiams ir vaikams, turintiems raidos sutrikimų</a> 
                      <div><i class="fas fa-phone"></i>+370  640 40510</div>
                    </li>
                    <li>
                      <a href="all-classes/music-therapy-children.html">Muzikos terapija specialiųjų poreikių turintiems vaikams</a> 
                      <div><i class="fas fa-phone"></i>+370  670 83240</div>
                    </li>
                    <li>
                      <a href="all-classes/help-yourself.html">Praktinių mokymų ciklas „Padėk sau, pažindamas save”</a> 
                      <div><i class="fas fa-phone"></i>+370 614 14063</div>
                    </li>
                    <li>
                      <a href="all-classes/babies-massage.html">„Prisilietimo galia”. Glostomasis masažas kūdikiams „Drugelio sparnas”</a> 
                      <div><i class="fas fa-phone"></i>+370 614 14063</div>
                    </li>
                    <li>
                      <a href="all-classes/adult-relationship.html">Paskaitų ciklas paaugliams „Apie suaugusių santykius atvirai”</a> 
                      <div><i class="fas fa-phone"></i>+370 614 14063</div>
                    </li>
                    <li>
                      <a href="all-classes/psychology-group.html">Grupinės teminės paskaitos aktualiomis psichologinėmis temomis</a> 
                      <div><i class="fas fa-phone"></i>+370 601 00538</div>
                    </li>
                  </ul>


                  <ul class="address-block">
                    <li>
                      <i class="fas fa-map-marker-alt"></i>Panerių g. 37/14P korpusas, Vilnius
                    </li>
                    <li>
                      <i class="far fa-envelope"></i>info@sveikutis.lt
                    </li>
                  </ul>
                  <ul class="social-icons">
                    <li>
                      <a href="https://www.facebook.com/sveikutis/"><i class="fab fa-facebook-square"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>Mes esame čia</h2>
                  <iframe class="iframe-map-find-us" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2307.29497271027!2d25.26938959541112!3d54.66923625644569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd946f499e767b%3A0xad65333c33739b4e!2s14P%2C+Paneri%C5%B3+g.+37%2C+Vilnius+03209!5e0!3m2!1slt!2slt!4v1529152861844" width="600" height="450" style="border:0" allowfullscreen></iframe>
                  <div id="find-us"><strong>„Sveikutį" rasite:</strong></div>
                  <ul class="find-us-description">
                    <li>važiuojant iš miesto centro į Vilniaus oro uostą, jūs pravažiuojate „Spartos" sankryžą, o kita sankryža yra Švitrigailos ir Panerių</li>
                    <li>Jūsų dešinėje bus „IRIS" parduotuvė, tad ir sukate į dešinę pusę</li>
                    <li>už ~ 25 metrų bus įvažiavimas prie „IRIS", o priešais – įvažiavimas gylyn į kiemą (matyti užrašas „Metalo gaminiai")</li>
                    <li>kai įvažiuosite gylyn (~25 metrus) iš karto sukite į kairę (pamatysite žalią renovuotą pastatą, kuris priklauso įmonei „BALTVITA"). Ant jo parašyta „14 P"</li>
                    <li>pasistatykite automobilį kur patogu, nes parkavimas nemokamas</li>
                    <li>prie „14 P" pažymėto žalio pastato durų spauskite 402 mygtuką su užrašu „Sveikutis”</li>
                    <li>dabar erdviais laiptas pakilkite į ketvirtą aukštą (nemokama mankšta prieš užsiėmimus) ir, žvilgtelėję į dešinę pusę, pamatysite 402 kabinetą, o ten – </li>
                    <li>mes Jūsų laukiame<span class="smile">&#9786;</span></li>
                  </ul>
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
                <p>
                  Copyright &copy; Crafted by <a href="https://dcrazed.com/">Dcrazed</a>
                  <br>Copyright &copy; Updated by <a href="https://www.linkedin.com/in/paulius-garbasauskas">Paulius Garbašauskas</a>
                  <br>Copyright &copy; Sveikutis
                  <br>Copyright &copy; Rūta Čigriejūtė, piešiniai
              </p>            
              </div>
            </div>
          </div>
        </footer>
        
        
        <script src="js/main.js"></script>

      </body>
    </html>