<nav class="navbar">
    <a href="index.php"><img src="images/download.png" class="brand-logo" alt="" /></a>
    <ul class="nav-links">
      <li class="nav-items"><a href="#">TV</a></li>
      <li class="nav-items"><a href="#">Movies</a></li>
      <li class="nav-items"><a href="#">Sports</a></li>
      <li class="nav-items"><a href="#">Disney+</a></li>
      <li class="nav-items"><a id="kids" href="#">KiDS</a></li>
    </ul>
    <div class="right-container">
      <input type="text" class="search-box" placeholder="search" />
      <?php
      include 'config.php';

      if (!isset($_SESSION['loginuser'])) {

        echo '<a href="user-login.php" ><button class="sub-btn">login</button></a>';
      } else {
        echo '<a href="controls/logout.php" ><button class="sub-btn">logout</button></a>';
      }
      ?>
      <img src="images/menu-btn.png" alt="Menu Button" class="menu-btn">
    </div>
  </nav>