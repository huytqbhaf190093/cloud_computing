<?php
require_once('Inc/conn.php');
include('Inc/header.php'); 
$search = "";
if( !empty($_GET['Search'])){
  $search = $_GET['Search'];
}
?>
 <h3 class="title">Search Results for: <?= $search ?></h3>
<div class="container" style="margin-top: 20px">
<div class="row">
    <?php
    if( !empty($search)) {
      $rs = mysqli_query( $conn ,"SELECT * FROM song,singer,genre WHERE song.song LIKE '%{$search}%' and song.singer_id=singer.singer_id and song.genre_id=genre.genre_id");
      while( $row = mysqli_fetch_assoc($rs) ){
    ?>
    <div class="card" style="background-color: white;margin-top: 20px;margin-left: 35px;overflow: auto;width: 270px; 
          border: 2px solid #F8ABAB;border-radius: 1px;border-bottom: 6px solid #FCA5A5; float: left;">
              <a href="single.php?id=<?php echo $row['ID']?>" style=" text-decoration: none; 
            text-align: center;">
            <div style="height:80px">
              <h2><?php echo $row['Name'] ?></h2>
              </div>
              <div><img src="Image/<?php echo $row['Image']?>" style="width: 247px;height: 200px;padding: 7px"></div>
              <p style="color: red"><?php echo $row['Price']." $"; ?></p>
              <h4 style="color: #3BA33D"><?php echo $row['Singer'] ?></h4>
            <h5>Category: <?php echo $row['Genre'] ?></h5>
            </a>
          </div>
         <?php
     }
    }
    ?>
  </div>
  </div>
  <?php 
  include('Inc/footer.php');
   ?>