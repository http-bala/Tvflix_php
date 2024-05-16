<?php
include './config.php';

session_start();
if (!isset($_SESSION['loginuser'])) {
    header("location: user-login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/user-css/videoplayer.css">
    <link rel="stylesheet" href="./assets/user-css/videoplayernav.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>video player</title>
</head>

<body>
    <?php include 'common/navbar.php' ?>
    <div class="box-container">
        <div class="main-video">
            <div class="video">

                <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM `movies` where `id` = {$id}";
                $query =  mysqli_query($con, $sql);
                if (mysqli_num_rows($query) > 0) {
                    $data = mysqli_fetch_assoc($query);
                    $view = $data['views'];
                    $viewsupdate = "UPDATE `movies` SET `views`= $view+1  WHERE `id` = {$id}";
                    $viewsquery = mysqli_query($con, $viewsupdate);
                }
                ?>
                <video src="./admin/upload/video/<?php echo $data['video_path'] ?>" controls></video>
                <h3 class="title"><?php echo $data['oringal_title'] ?></video></h3>
            </div>
        </div>
        <div class="video-list">
            <div class="container" style="margin-left :20px; display:flex; align-items:center">
                <span class="material-symbols-outlined">
                    visibility
                </span>
                <span style="margin-left: 10px;">views:<?php echo $data['views'] ?></span>
                <span class="material-symbols-outlined" style="margin-left: 10px;">
                    thumb_up
                </span>
                <span style="margin-left: 10px;">likes: 0</span>
            </div>
            <div class="" style="margin-top: 20px;">
                <?php echo $data['overview'] ?>
            </div>
        </div>
    </div>
    <h1 class="title" style="margin-top:100px">Related movies</h1>
    <div class="movies-list">
        <button class="pre-btn" title="btn">
            <img src="images/pre.png" alt="" />
        </button>
        <button class="nxt-btn" title="btn">
            <img src="images/nxt.png" alt="" />
        </button>
        <div class="card-container">

            <?php
            $keyword = $data['generes'];
            $sql2 = "SELECT * FROM `movies` WHERE `generes` = '$keyword'";
            $run2 = mysqli_query($con, $sql2);

            if (mysqli_num_rows($run2) > 0) {
                while ($data2 = mysqli_fetch_assoc($run2)) {
            ?>
                    <div class="card" data-id="">
                        <img src="admin/upload/poster/<?php echo $data2['poster_path']; ?>" class="card-img" alt="" />
                        <div class="card-body">
                            <h2 class="name"><?php echo $data2['oringal_title']; ?></h2>
                            <h6 class="des"><?php echo $data2['overview']; ?></h6>
                            <a href="./videoplayer.php?id=<?php echo $data2['id']; ?>"><button class="watchlist-btn">WACTH NOW</button></a>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
    <script>
        let listVideo = document.querySelectorAll('.video-list .vid');

        let mainVideo = document.querySelector('.main-video video');

        let title = document.querySelector('.main-video .title');

        listVideo.forEach(video => {
            video.onclick = () => {
                listVideo.forEach(vid => vid.classList.remove('active'));
                video.classList.add('active');
                if (video.classList.contains('active')) {

                    let src = video.children[0].getAttribute('src');

                    mainVideo.src = src;
                    let text = video.children[1].innerHTML;
                    title.innerHTML = text;
                };
            };
        });
    </script>

</body>

</html>