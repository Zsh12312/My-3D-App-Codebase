<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    
    <script type="text/javascript" src="https://www.x3dom.org/download/x3dom.js"></script>
    <link rel="stylesheet" href="https://www.x3dom.org/download/x3dom.css">
    

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/modelInteractions.js"></script>
</head>

<body>
<!--NAVBAR-->
<nav class="navbar navbar-expand-lg bg-dark fixed-top ">
        <a class="navbar-brand" href="index.php">Coca Cola Journey</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.cocacola.co.uk" target="_blank">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Drinks
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cola.php">Coca Cola</a>
                        <a class="dropdown-item" href="sprite.php">Sprite</a>
                        <a class="dropdown-item" href="pepper.php">Dr Pepper</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

<div id="home" class="main_contents">
  <!--CAROUSEL-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" id="carouselContainer">
    <div class="carousel-item active">
    <img class="d-block w-100" src="images/carousel/slide_1.png" alt="First slide" style="width:100%; height: 1100px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h1>Taste the Feeling</h1>
        <h3>Coca-Cola</h3>
      </div>
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="images/carousel/slide_2.png" alt="Second slide" style="width:100%; height: 1100px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h1>Open Happiness</h1>
        <h3>Coca-Cola</h3>
      </div>
    </div>
  </div>
</div>

  <!--MID PAGE DIVIDER-->
  <div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h1 id="our_brands_header">OUR BRANDS</h1>
    </div>
  </div>
</div>
            
<!--ROW OF DRINKS CARDS-->
    <div class="row">
    <div class="col-sm-1"></div>

  <!--COCA COLA-->
  <div class="col-sm-3">
    <div class="card borderless">
      <a href="cola.php" class="home_card_img">
        <img src="images/cards/coke_square.png" class="img-fluid" alt="coca cola logo">
      </a>
      <div class="card-body">
        <div class="card-title">Coca-Cola</div>
        <div class="card-text">It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!</div>
        <a href="cola.php" class="btn btn-sm btn-outline-primary">Find out more...</a>
      </div>
    </div>
  </div>

    <!--SPRITE-->
    <div class="col-sm-3">
    <div class="card borderless">
      <a href="sprite.php" class="home_card_img" >
        <img src="images/cards/sprite_square.png" class="img-fluid" alt="sprite logo">
      </a>
      <div class="card-body">
        <div class="card-title">Sprite</div>
        <div class="card-text">First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories</div>
        <a href="sprite.php" class="btn btn-sm btn-outline-primary">Find out more...</a>
      </div>
    </div>
  </div>

  <!--PEPPER-->
  <div class="col-sm-3">
    <div class="card borderless">
      <a href="pepper.php" class="home_card_img">
        <img src="images/cards/pepper_square.png" class="img-fluid" alt="dr pepper logo">
      </a>
      <div class="card-body">
        <div class="card-title">Dr Pepper</div>
        <div class="card-text">Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.</div>
        <a href="pepper.php" class="btn btn-sm btn-outline-primary">Find out more...</a>
      </div>
    </div>
  </div>

  <div class="col-sm-1"></div>
</div>

<!-- FOOTER -->
    <nav class="navbar navbar-expand-sm footer container-fluid">
        <div class="container-fluid">
            <div class="navbar-text float-left copyright">
                <span>2024 Web 3D Applications</span>
            </div>
            <div class="navbar-text float-right social">
                <a href="https://www.facebook.com/Coca-Cola/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com/CocaCola"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/cocacola/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/user/cocacola"><i class="fa-brands fa-youtube"></i></a>

            </div>
        </div>
    </nav>

</body>


</body>

</html>