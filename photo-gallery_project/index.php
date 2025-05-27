<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photo Gallery</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <style>
    body {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .carousel-inner > .item > img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .thumbnail {
      padding: 0;
      border-radius: 4px;
      border: none;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      margin-bottom: 20px;
      background-color: #fff;
    }
    .thumbnail:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }
    .thumbnail img {
      height: 200px;
      object-fit: cover;
      border-radius: 4px 4px 0 0;
    }
    .thumbnail .caption {
      padding: 15px;
      text-align: center;
    }
    .page-header {
      border-bottom: 2px solid #eee;
      margin-top: 30px;
      padding-bottom: 10px;
    }
    .carousel-caption {
      background-color: rgba(0,0,0,0.6);
      padding: 10px 20px;
      border-radius: 4px;
      bottom: 40px;
    }
    .carousel-caption h5 {
      font-size: 24px;
      font-weight: bold;
      text-shadow: 1px 1px 2px #000;
    }
    .carousel-caption p {
      font-size: 16px;
      text-shadow: 1px 1px 2px #000;
    }
    .modal-content {
      border-radius: 0;
      border: none;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
    .modal-header {
      background-color: #343a40;
      color: white;
      border-radius: 0;
    }
    .modal-footer {
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
    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-nav > li > a:hover {
      color: #ddd;
    }
    footer.navbar-default {
      background-color: #343a40;
      color: #fff;
    }
    .img-thumbnail {
      border: none;
      padding: 0;
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
  </style>
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><i class="fa fa-camera-retro"></i> Photo Gallery</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="space.php"><i class="fa fa-star"></i> Space</a></li>
        <li><a href="others.php"><i class="fa fa-image"></i> Others</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div id="slider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
            <li data-target="#slider" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/space1.jpg" alt="Space 1">
              <div class="carousel-caption">
                <h5>Galaxy Nebula</h5>
                <p>Stunning view of a distant galaxy nebula</p>
              </div>
            </div>
            <div class="item">
              <img src="img/space2.jpg" alt="Space 2">
              <div class="carousel-caption">
                <h5>Solar Flare</h5>
                <p>Powerful eruption from our sun</p>
              </div>
            </div>
            <div class="item">
              <img src="img/space3.jpg" alt="Space 3">
              <div class="carousel-caption">
                <h5>Star Cluster</h5>
                <p>Thousands of stars in a dense cluster</p>
              </div>
            </div>
            <div class="item">
              <img src="img/space4.jpg" alt="Space 4">
              <div class="carousel-caption">
                <h5>Planetary Rings</h5>
                <p>Magnificent rings of a gas giant</p>
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
      <h3><i class="fa fa-photo"></i> Photo Gallery</h3>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="#m1" data-toggle="modal">
            <img src="img/space1.jpg" alt="Space 1">
          </a>
          <div class="caption">
            <h4>Galaxy Nebula</h4>
            <p>Cosmic clouds of dust and gas</p>
          </div>
        </div>
        <div class="modal fade" id="m1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h4>Galaxy Nebula</h4></div>
              <div class="modal-body text-center">
                <img src="img/space1.jpg" alt="Space 1" class="img-thumbnail">
                <div class="photo-info">
                  <p>This breathtaking image captures the vibrant colors of a distant nebula where new stars are born.</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="thumbnail">
          <a href="#m2" data-toggle="modal">
            <img src="img/space2.jpg" alt="Space 2">
          </a>
          <div class="caption">
            <h4>Solar Flare</h4>
            <p>Powerful eruption from our sun</p>
          </div>
        </div>
        <div class="modal fade" id="m2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h4>Solar Flare</h4></div>
              <div class="modal-body text-center">
                <img src="img/space2.jpg" alt="Space 2" class="img-thumbnail">
                <div class="photo-info">
                  <p>A massive solar flare captured by NASA's Solar Dynamics Observatory showing the sun's incredible power.</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="thumbnail">
          <a href="#m3" data-toggle="modal">
            <img src="img/space3.jpg" alt="Space 3">
          </a>
          <div class="caption">
            <h4>Star Cluster</h4>
            <p>Thousands of stars together</p>
          </div>
        </div>
        <div class="modal fade" id="m3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h4>Star Cluster</h4></div>
              <div class="modal-body text-center">
                <img src="img/space3.jpg" alt="Space 3" class="img-thumbnail">
                <div class="photo-info">
                  <p>A globular cluster containing hundreds of thousands of stars bound together by gravity.</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="thumbnail">
          <a href="#m4" data-toggle="modal">
            <img src="img/space4.jpg" alt="Space 4">
          </a>
          <div class="caption">
            <h4>Planetary Rings</h4>
            <p>Magnificent rings of Saturn</p>
          </div>
        </div>
        <div class="modal fade" id="m4">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h4>Planetary Rings</h4></div>
              <div class="modal-body text-center">
                <img src="img/space4.jpg" alt="Space 4" class="img-thumbnail">
                <div class="photo-info">
                  <p>Saturn's spectacular ring system composed of ice and rock particles orbiting the planet.</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="thumbnail">
          <a href="#m5" data-toggle="modal">
            <img src="img/space5.jpg" alt="Space 5">
          </a>
          <div class="caption">
            <h4>Aurora Borealis</h4>
            <p>Northern lights from space</p>
          </div>
        </div>
        <div class="modal fade" id="m5">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h4>Aurora Borealis</h4></div>
              <div class="modal-body text-center">
                <img src="img/space5.jpg" alt="Space 5" class="img-thumbnail">
                <div class="photo-info">
                  <p>The aurora borealis as seen from the International Space Station, showing Earth's atmospheric light show.</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="thumbnail">
          <a href="#m6" data-toggle="modal">
            <img src="img/space6.jpg" alt="Space 6">
          </a>
          <div class="caption">
            <h4>Black Hole</h4>
            <p>First image of a black hole</p>
          </div>
        </div>
        <div class="modal fade" id="m6">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h4>Black Hole</h4></div>
              <div class="modal-body text-center">
                <img src="img/space6.jpg" alt="Space 6" class="img-thumbnail">
                <div class="photo-info">
                  <p>Historic first image of a supermassive black hole at the center of galaxy M87.</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
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
  </div>

</body>
</html>