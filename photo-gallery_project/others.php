<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Planets Gallery</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />
  <style>
    body {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #f8f9fa;
    }
    .navbar-default {
      background-color: #343a40;
      border-color: transparent;
    }
    .navbar-default .navbar-brand,
    .navbar-default .navbar-nav > li > a {
      color: #fff;
    }
    .carousel-inner > .item > img {
      width: 100%;
      max-height: 450px;
      object-fit: cover;
    }
    .carousel-caption {
      background-color: rgba(0,0,0,0.6);
      padding: 10px;
      margin-bottom: 25px;
      border-radius: 4px;
    }
    .page-header {
      margin-top: 30px;
      margin-bottom: 20px;
      text-align: center;
    }
    .thumbnail {
      border: none;
      padding: 0;
      margin-bottom: 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .thumbnail img {
      height: 200px;
      width: 100%;
      object-fit: cover;
    }
    footer.navbar-default {
      background-color: #343a40;
      color: #fff;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Planets Gallery</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="space.php">Space</a></li>
        <li class="active"><a href="others.php">Others</a></li>
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
              <img src="img/space7.jpg" alt="Mercury">
              <div class="carousel-caption">Mercury</div>
            </div>
            <div class="item">
              <img src="img/space8.jpg" alt="Venus">
              <div class="carousel-caption">Venus</div>
            </div>
            <div class="item">
              <img src="img/space9.jpg" alt="Earth">
              <div class="carousel-caption">Earth</div>
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
      <h3 class="text-center">Explore the Planets</h3>
      <p class="text-center">Click images to view in fullscreen</p>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-3">
        <a href="img/space7.jpg" data-lightbox="planets" data-title="Mercury" class="thumbnail">
          <img src="img/space7.jpg" alt="Mercury">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="img/space8.jpg" data-lightbox="planets" data-title="Venus" class="thumbnail">
          <img src="img/space8.jpg" alt="Venus">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="img/space9.jpg" data-lightbox="planets" data-title="Earth" class="thumbnail">
          <img src="img/space9.jpg" alt="Earth">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="img/space10.jpg" data-lightbox="planets" data-title="Mars" class="thumbnail">
          <img src="img/space10.jpg" alt="Mars">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="img/space11.jpg" data-lightbox="planets" data-title="Jupiter" class="thumbnail">
          <img src="img/space11.jpg" alt="Jupiter">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="img/space12.jpg" data-lightbox="planets" data-title="Saturn" class="thumbnail">
          <img src="img/space12.jpg" alt="Saturn">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="img/space13.jpg" data-lightbox="planets" data-title="Uranus" class="thumbnail">
          <img src="img/space13.jpg" alt="Uranus">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="img/space14.jpg" data-lightbox="planets" data-title="Neptune" class="thumbnail">
          <img src="img/space14.jpg" alt="Neptune">
        </a>
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