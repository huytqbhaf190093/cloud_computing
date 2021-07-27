<?php 
session_start();
require_once("Inc/conn.php");
include("Inc/header.php");
 ?>
 <div class="container">
 <div class="row">
    <?php 
    $id=$_GET["id"];
    $sql="SELECT * FROM song,singer,genre Where song.singer=singer.singer_id and song.genre=genre.genre_id and song.ID={$id} ";
    $rs= mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($rs)) {
     ?>
        <div class="col-md-6" style=" text-align: left;">
        <h2 class="name-pro">Name Of Music: <?php echo $row['Song'] ?></h2>
        <p style="color: red;padding-left: 20px;"> Price: <?php echo $row['Price']." $"; ?></p>
          <audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="width: 250px">
          <source src="song/<?php echo $row['Song'] ?>" type="audio/mpeg">
          </audio>
          <script type="text/javascript">
            function myAudio(event){
              if(event.currentTime >60){
                event.currentTime=0;
                event.pause();
                alert ("Sign in to continue!")
              }
            }
          </script>
        <br>
        <br>
        <div style="border-bottom: 1px solid black"></div>
        <br>
        <p>
          Basic song info:
        </p>
        <h4>Singer: <?php echo $row["Singer"]; ?></h4>
        <h5>Genre: <?php echo $row["Genre"]; ?></h5>
        <p><?php echo $row["Song"]; ?></p>
        </div>
        <div class="col-md-5">
          <img src="Image/<?php echo $row['Image']?>" style="width: 600px;height: 500px" >
        </div>
        <?php
    	}
    	?>
     </div>
     </div>
     <?php 
     include("inc/footer.php")
      ?>