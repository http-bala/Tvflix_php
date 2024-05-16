<?php 

    include 'config.php';

if ($_FILES['backdrop_image']['name'] !== "" && $_FILES['poster_image']['name'] !== "" && $_FILES['video']['name'] !== ""){

    $adult = $_POST['adult'];
    $genres = $_POST['genres'];
    $language = $_POST['language'];
    $orginal_title = $_POST['orgtitle'];
    $title = $_POST['orgtitle'];
    $overview = $_POST['overveiw'];


    // backdrop images code
    $backdropimage = $_FILES['backdrop_image']['name'];
    $backdroptmp = $_FILES['backdrop_image']['tmp_name'];
    $bdropext = pathinfo($backdropimage,PATHINFO_EXTENSION);
    $bdropvaildextension = array("jpg","jpeg","png","gif");

    // poster images
    $posterimage =  $_FILES['poster_image']['name'];
    $postertmp = $_FILES['poster_image']['tmp_name'];
    $posterext = pathinfo($posterimage,PATHINFO_EXTENSION);
    $postervaildextension = array("jpg","jpeg","png","gif");

    // videp images
    $video =  $_FILES['video']['name'];
    $videotmp =$_FILES['video']['tmp_name'];
    $videopext = pathinfo($video,PATHINFO_EXTENSION);
    // $videovaildextension = array("jpg","jpeg","png","gif");
    $videovaildextension = array("wmv","avi","avchd","mp4","mov","webm","mkv",);

    if (in_array($bdropext, $bdropvaildextension) && in_array($posterext, $postervaildextension) && in_array($posterext, $postervaildextension )) {
    //    rename this backrop image files
       $backdropNewname = rand() . ".".$bdropext;
       $backdropPath = "../upload/backdrop/".$backdropNewname;

    //    rename this backrop image files
       $posterNewname = rand() . ".".$posterext;
       $posterPath = "../upload/poster/".$posterNewname;

    //    rename this backrop image files
       $videoNewname = rand() . ".".$videopext;
       $videoPath = "../upload/video/".$videoNewname;

       if (move_uploaded_file($backdroptmp, $backdropPath) && move_uploaded_file($postertmp, $posterPath) && move_uploaded_file($videotmp, $videoPath)){
            
        $sql = "INSERT INTO `movies`(`adult`, `backdrop_path`, `generes`, `oringal_title`, `overview`, `poster_path`, `release_date`, `title`, `video_path`, `vote_count`, `language`,`views`) VALUES ('$adult','$backdropNewname','$genres','$orginal_title','$overview','$posterNewname','date',' $title','$videoNewname','0','$language ','0')";
        $query = mysqli_query($con,$sql);
        
        if ($query) {
            echo $output = 1;
        }else{
            echo $output = 0;
        }

       }else{
            echo $output = 4;
       }

    } else{
        echo $output = 5;
    }

}else{
    echo $output = 3;
}








?>