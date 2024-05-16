<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Disney+ clone</title>
  <link rel="stylesheet" href="./assets/user-css/styles.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <!-- navbar ---------------------- -->
  <?php include 'common/navbar.php' ?>
  <!-- main coursel -->
  <div class="carousel-container">
    <div class="carousel">

    </div>
  </div>
  <!-- main coursel -->

  <div class="card-container">
    <div class="video-card-container">
      <div class="video-card">
        <img src="images/disney.PNG" class="video-card-image" alt="" />
        <video src="videos/disney.mp4" muted loop class="card-video"></video>
      </div>
      <div class="video-card">
        <img src="images/pixar.PNG" class="video-card-image" alt="" />
        <video src="videos/pixar.mp4" muted loop class="card-video"></video>
      </div>
      <div class="video-card">
        <img src="images/marvel.PNG" class="video-card-image" alt="" />
        <video src="videos/marvel.mp4" muted loop class="card-video"></video>
      </div>
      <div class="video-card">
        <img src="images/star-wars.PNG" class="video-card-image" alt="" />
        <video src="videos/star-war.mp4" muted loop class="card-video"></video>
      </div>
      <div class="video-card">
        <img src="images/geographic.PNG" class="video-card-image" alt="" />
        <video src="videos/geographic.mp4" muted loop class="card-video"></video>
      </div>
    </div>
  </div>

  <h1 class="title">Latest & Trending</h1>
  <div class="movies-list">
    <button class="pre-btn" title="btn">
      <img src="images/pre.png" alt="" />
    </button>
    <button class="nxt-btn" title="btn">
      <img src="images/nxt.png" alt="" />
    </button>
    <div class="card-container">

      <?php include 'config.php';

      $sql = "SELECT * FROM `movies` ORDER BY `id` DESC ;";
      $run = mysqli_query($con, $sql);

      if (mysqli_num_rows($run) > 0) {
        while ($data = mysqli_fetch_assoc($run)) {
      ?>
          <div class="card" data-id="">
            <img src="admin/upload/poster/<?php echo $data['poster_path']; ?>" class="card-img" alt="" />
            <div class="card-body">
              <h2 class="name"><?php echo $data['oringal_title']; ?></h2>
              <h6 class="des"><?php echo $data['overview']; ?></h6>
              <a href="./videoplayer.php?id=<?php echo $data['id']; ?>"><button class="watchlist-btn">WACTH NOW</button></a>
            </div>
          </div>
      <?php
        }
      }
      ?>

    </div>
  </div>

  <!-- sports ----- -->

  <h1 class="title">Best in Sports</h1>
  <div class="movies-list">
    <button class="pre-btn" title="btn">
      <img src="images/pre.png" alt="" />
    </button>
    <button class="nxt-btn" title="btn">
      <img src="images/nxt.png" alt="" />
    </button>
    <div class="card-container">

      <?php include 'config.php';

      $sql = "SELECT * FROM `movies` WHERE `generes` = 'drama'";
      $run = mysqli_query($con, $sql);

      if (mysqli_num_rows($run) > 0) {
        while ($data = mysqli_fetch_assoc($run)) {
      ?>
          <div class="card" data-id="">
            <img src="admin/upload/poster/<?php echo $data['poster_path']; ?>" class="card-img" alt="" />
            <div class="card-body">
              <h2 class="name"><?php echo $data['oringal_title']; ?></h2>
              <h6 class="des"><?php echo $data['overview']; ?></h6>
              <a href="./videoplayer.php?id=<?php echo $data['id']; ?>"><button class="watchlist-btn">WACTH NOW</button></a>
            </div>
          </div>
      <?php
        }
      }
      ?>

    </div>
  </div>


  <!-- best of years  ----- -->
  <h1 class="title">Best of the Year</h1>
  <div class="movies-list">
    <button class="pre-btn" title="btn">
      <img src="images/pre.png" alt="" />
    </button>
    <button class="nxt-btn" title="btn">
      <img src="images/nxt.png" alt="" />
    </button>
    <div class="card-container">

      <?php include 'config.php';

      $sql = "SELECT * FROM `movies` WHERE `generes` = 'drama'";
      $run = mysqli_query($con, $sql);

      if (mysqli_num_rows($run) > 0) {
        while ($data = mysqli_fetch_assoc($run)) {
      ?>
          <div class="card" data-id="">
            <img src="admin/upload/poster/<?php echo $data['poster_path']; ?>" class="card-img" alt="" />
            <div class="card-body">
              <h2 class="name"><?php echo $data['oringal_title']; ?></h2>
              <h6 class="des"><?php echo $data['overview']; ?></h6>
              <a href="./videoplayer.php?id=<?php echo $data['id']; ?>"><button class="watchlist-btn">WACTH NOW</button></a>
            </div>
          </div>
      <?php
        }
      }
      ?>

    </div>
  </div>

  <!-- recommended  ----- -->



  <h1 class="title">Recommended For You</h1>
  <div class="movies-list">
    <button class="pre-btn" title="btn">
      <img src="images/pre.png" alt="" />
    </button>
    <button class="nxt-btn" title="btn">
      <img src="images/nxt.png" alt="" />
    </button>
    <div class="card-container">

      <?php include 'config.php';

      $sql = "SELECT * FROM `movies` WHERE `generes` = 'drama'";
      $run = mysqli_query($con, $sql);

      if (mysqli_num_rows($run) > 0) {
        while ($data = mysqli_fetch_assoc($run)) {
      ?>
          <div class="card" data-id="">
            <img src="admin/upload/poster/<?php echo $data['poster_path']; ?>" class="card-img" alt="" />
            <div class="card-body">
              <h2 class="name"><?php echo $data['oringal_title']; ?></h2>
              <h6 class="des"><?php echo $data['overview']; ?></h6>
              <a href="./videoplayer.php?id=<?php echo $data['id']; ?>"><button class="watchlist-btn">WACTH NOW</button></a>
            </div>
          </div>
      <?php
        }
      }
      ?>

    </div>
  </div>

  <!-- propular   ----- -->


  <h1 class="title">Popular Shows</h1>
  <div class="movies-list">
    <button class="pre-btn" title="btn">
      <img src="images/pre.png" alt="" />
    </button>
    <button class="nxt-btn" title="btn">
      <img src="images/nxt.png" alt="" />
    </button>
    <div class="card-container">
      <div class="card">
        <img src="images/poster 12.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 11.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 10.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 9.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 8.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 7.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 6.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 5.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 4.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 3.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 2.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 1.png" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movies Name</h2>
          <h6 class="des">Lorem ipsum dolor sit amet.</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
    </div>
  </div>


  <h1 class="title">Movies</h1>
  <div class="movies-list">
    <button class="pre-btn" title="btn">
      <img src="images/pre.png" alt="" />
    </button>
    <button class="nxt-btn" title="btn">
      <img src="images/nxt.png" alt="" />
    </button>
    <div class="card-container">

      <div class="card">
        <img src="images/trending11.jpeg" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Repeat</h2>
          <h6 class="des">Thriller, Drama Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending2.jpg" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">RamSetu</h2>
          <h6 class="des">Thriller, Drama Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending6.jpg" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Freedy</h2>
          <h6 class="des">Action, Drama Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending5.jpeg" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Monster</h2>
          <h6 class="des">Thriller, Drama Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending7.webp" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Willow</h2>
          <h6 class="des">Thriller, Drama Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending1.jpg" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Wednesday</h2>
          <h6 class="des">Thriller, Drama Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending8.webp" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Sita Ramam</h2>
          <h6 class="des">Thriller, Love, Drama Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending9.jpg" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Brahmastra</h2>
          <h6 class="des">Thriller, Drama Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending4.jpeg" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">FALL</h2>
          <h6 class="des">Thriller, Drama Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending12.chjklwvtcy1hc3nldhmvbw92awvzlzk5zjm1mdzllwu4zwetndrjmi05y2viltk4zmy1ymq3nju2ms5qcgc=" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Strange World</h2>
          <h6 class="des">Intertainment Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending3.webp" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Govinda Naam Mera</h2>
          <h6 class="des">Romance, Drama, comedy Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/trending10.jpg" class="card-img" alt="" />
        <div class="card-body">
          <h2 class="name">Movie</h2>
          <h6 class="des">Thriller, Drama Movies</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
    </div>
  </div>



  <script src="index.js" async></script>
</body>

</html>