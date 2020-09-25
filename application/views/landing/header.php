<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ;?>assets/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/mystyle.css') ;?>">
    <script src="http://kit.fontawesome.com/e8dac964cf.js" crossorigin="anonymous"></script>

   
    <title>KGM TV</title>
   
</head>
  <body>
    
        <!-- Navbar  -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">
            <a class="navbar-brand" style="color: white;font-weight:bold;" href="<?= base_url() ;?>">KGMTV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto" style="font-weight:bold;">
                <li class="nav-item active">
                    <a class="nav-link" style="color: white;" href="<?= site_url();?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white;" href="<?= site_url('about') ;?>">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="color: white;" href="<?= site_url('live') ;?>">Live</a>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Follow Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" target="_blank" href="https://web.facebook.com/Karawang-Golden-Memories-119093799835750/"><i class="fab fa-facebook-square"></i> Karawang Golden Memories</a>
                    <a class="dropdown-item" target="_blank" href="https://www.youtube.com/channel/UCYgFWijKlo5LK96gGbSGFxA"><i class="fab fa-youtube"></i> Official KGM Karawang TV</a>
                    <a class="dropdown-item" target="_blank" href="https://www.instagram.com/kgmtvindonesia/?hl=en"><i class="fab fa-instagram-square"></i> kgmtvindonesia</a>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- Akhir Navbar -->
