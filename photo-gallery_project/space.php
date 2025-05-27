<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Photo Gallery</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
    body {
      padding-top: 70px;
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar-default {
        background-color: #343a40;
        border-color: transparent;
    }
    .navbar-default .navbar-brand,
    .navbar-default .navbar-nav > li > a {
      color: #ecf0f1;
    }
    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-nav > li > a:hover {
      color: #bdc3c7;
    }
    .carousel-inner > .item > img {
      width: 100%;
      max-height: 500px;
      object-fit: cover;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .carousel-caption {
      background-color: rgba(0,0,0,0.6);
      padding: 15px;
      border-radius: 4px;
      bottom: 40px;
      left: 10%;
      right: 10%;
      text-shadow: 1px 1px 2px #000;
    }
    .page-header {
      margin: 40px 0 30px;
      border-bottom: 2px solid #eee;
      text-align: center;
    }
    .thumbnail {
      border: none;
      padding: 0;
      border-radius: 4px;
      margin-bottom: 30px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      overflow: hidden;
    }
    .thumbnail:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }
    .thumbnail img {
      height: 200px;
      width: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    .thumbnail:hover img {
      transform: scale(1.05);
    }
    .thumbnail-caption {
      padding: 15px;
      text-align: center;
      background: white;
    }
    footer.navbar-default {
      background-color: #343a40;
      color: #ecf0f1;
      border-color: transparent;
    }
    .carousel-control {
      background-image: none !important;
      width: 50px;
    }
    .carousel-control .glyphicon {
      color: #fff;
      text-shadow: 0 0 5px #000;
      font-size: 30px;
    }
    .lightbox .lb-image {
      border: 5px solid white;
      border-radius: 2px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><i class="fa fa-camera-retro"></i> Space Gallery</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="space.php"><i class="fa fa-star"></i> Space</a></li>
        <li><a href="others.php"><i class="fa fa-image"></i> Others</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="slider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="img/space1.jpg" alt="Galaxy Nebula">
              <div class="carousel-caption">
                <h3>Galaxy Nebula</h3>
                <p>Cosmic clouds of dust and gas</p>
              </div>
            </div>
            <div class="item">
              <img src="img/space2.jpg" alt="Solar Flare">
              <div class="carousel-caption">
                <h3>Solar Flare</h3>
                <p>Powerful eruption from our sun</p>
              </div>
            </div>
            <div class="item">
              <img src="img/space3.jpg" alt="Star Cluster">
              <div class="carousel-caption">
                <h3>Star Cluster</h3>
                <p>Thousands of stars in a dense cluster</p>
              </div>
            </div>
          </div>

          <a class="left carousel-control" href="#slider" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#slider" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    </div>

    <div class="page-header">
      <h2><i class="fa fa-photo"></i> Explore the Universe</h2>
      <p class="text-muted">Click images to view in fullscreen</p>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <a href="img/space1.jpg" data-lightbox="gallery" data-title="Galaxy Nebula - Cosmic clouds of dust and gas">
            <img src="img/space1.jpg" alt="Galaxy Nebula">
          </a>
          <div class="thumbnail-caption">
            <h4>Galaxy Nebula</h4>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <a href="img/space2.jpg" data-lightbox="gallery" data-title="Solar Flare - Powerful eruption from our sun">
            <img src="img/space2.jpg" alt="Solar Flare">
          </a>
          <div class="thumbnail-caption">
            <h4>Solar Flare</h4>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <a href="img/space3.jpg" data-lightbox="gallery" data-title="Star Cluster - Thousands of stars in a dense cluster">
            <img src="img/space3.jpg" alt="Star Cluster">
          </a>
          <div class="thumbnail-caption">
            <h4>Star Cluster</h4>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <a href="img/space4.jpg" data-lightbox="gallery" data-title="Planetary Rings - Magnificent rings of a gas giant">
            <img src="img/space4.jpg" alt="Planetary Rings">
          </a>
          <div class="thumbnail-caption">
            <h4>Planetary Rings</h4>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <a href="img/space5.jpg" data-lightbox="gallery" data-title="Aurora Borealis - Northern lights from space">
            <img src="img/space5.jpg" alt="Aurora Borealis">
          </a>
          <div class="thumbnail-caption">
            <h4>Aurora Borealis</h4>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <a href="img/space6.jpg" data-lightbox="gallery" data-title="Black Hole - First image of a black hole">
            <img src="img/space6.jpg" alt="Black Hole">
          </a>
          <div class="thumbnail-caption">
            <h4>Black Hole</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="text-center" style="padding: 15px; margin: 0;">Created by TJ Yumul</p>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

</body>
</html>