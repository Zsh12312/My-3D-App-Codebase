<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coca Cola</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="https://www.x3dom.org/download/x3dom.js"></script>
    <link rel="stylesheet" href="https://www.x3dom.org/download/x3dom.css">
    <script src="js/modelInteractions.js"></script>
</head>
<body>

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

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div id="model_container" style="width: 100%; height: 400px;">
                    <x3d id="model_x3d" width="100%" height="100%">
                        <scene>
                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="models/cola.x3d"></inline>
                        </scene>
                    </x3d>
                </div>

                <div class="row mt-3 justify-content-center">
                    <div class="col-4 text-center">
                        <a href="cola.php">
                            <img src="images/cards/coke_square.png" alt="Coca-Cola" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="sprite.php">
                            <img src="images/cards/sprite_square.png" alt="Sprite" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="pepper.php">
                            <img src="images/cards/pepper_square.png" alt="Pepper" class="img-thumbnail">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1>Coca Cola</h1>
                <p>Coca-Cola is a carbonated soft drink manufactured by The Coca-Cola Company. Originally marketed as a temperance drink and intended as a patent medicine, it was invented in the late 19th century by John Pemberton.</p>
                <!-- Botton -->
                <div class="card mt-3">
                    <div class="card-body">
                        <div id="playSpin">
                            <h6>Animation options
                                <div class="btn-group btn-group-toggle">
                                    <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="spin();">Play</a>
                                    <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="stopRotation();">Pause</a>
                                    <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="showModel()">Show Model</a>
                                    <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="hideModel()">Hide Model</a>
                                </div>                            
                            </h6>
                            <hr>
                        </div>
                        <h6>Camera views 
                            <div class="btn-group btn-group-toggle">
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="cameraFront();">Front</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="cameraBack();">Back</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="cameraTop();">Top</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="cameraBottom();">Bottom</a>
                            </div>
                        </h6>
                        <hr>                    
                        <h6>Render options
                            <div class="btn-group btn-group-toggle">
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="setRenderView(1);">Vertex</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="setRenderView(2);">Wire</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="setRenderView(0);">Default</a>
                            </div>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Gallery Image -->
     <div class="container my-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="models/cola-gallery.png" alt="Coca-Cola Gallery" class="img-fluid cursor-pointer" data-toggle="modal" data-target="#galleryModal">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel">Coca-Cola Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="models/cola-gallery.png" alt="Coca-Cola Gallery" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>