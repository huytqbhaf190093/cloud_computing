<!------------ Header starts --------------------->
<?php 
session_start();
require_once('Inc/conn.php');
include('Inc/header.php'); ?>
<!------------ Header ends ----------------------->   

<div class="container">    
 
  <div class="row mt-5">
    <div class="col-md-12" >
      <h3 style="font-size:18px; font-weight:bold">New Music</h3>
    </div>
    <div class="product-group">    
      <?php 
      $get_pro = " select * from song LIMIT 6";
      $run_pro = mysqli_query($conn, $get_pro);    
      while($row_pro = mysqli_fetch_array($run_pro)){
        $song_id = $row_pro['ID'];
        $song_name = $row_pro['Name'];
        $song_genre = $row_pro['Genre'];
        $song_singer = $row_pro['Singer'];
        $song_mp3 = $row_pro['Song'];
        $song_img = $row_pro['Image'];
        ?>

        <div class="col-md-4 col-sm-6 col-xs-12">
        <h3><?php echo $song_name ?></h3>
        <img src='<?php echo $song_img ?>' width='180px' height='280px' />   
        <audio id='audio_1' controls controlsList="nodownload">
        <source src='song/<?=$song_mp3?>'>
        </audio>
        <a href='single.php?id=<?=$song_id?>'>
        <button style='float:right'>Detail</button>
        </a>
        </div>
        
        <?php
      }?>       
    </div>  
    
    
  </div>
  
</div>
<!------------ Content wrapper ends -------------->

<?php include ('Inc/footer.php'); ?>