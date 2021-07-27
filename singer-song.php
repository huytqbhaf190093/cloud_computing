<?php
session_start();
require_once('inc/conn.php');
include('inc/header.php');

?>

<?php  
$id = $_GET['id'];
$sql = " SELECT * FROM song WHERE ID  = {$id}";
$rs = mysqli_result($conn,$sql);
while ($row=mysqli_fetch_assoc($rs)) {

?>
<div class="singer-song">
	<div class="song-image">
		<img src="Image/<?php echo $row ['SongImage']?>">
	</div>

	<div class="song-information">
		<h2 class="singersong-title">
			<?php echo $row ['SongName']?>
		</h2>

		<div class="singersong-content"></div>
		<p>Song Information</p><br>
		<div class="singernote">
			<?php echo $row['content']?>
		</div>
	</div>

	<p class="singersong-price">
		<?php echo $row['SongPrice'] . "$"?>
	</p>
    
    <form method="POST" action="cart.php">
    	Quantity:
    	<input type = "number" name = "sl" value = "1"><br>
    	<input type = "hidden" name = "ID" value="<?=$id?>">
    	<input type = "submit" class="button-buy" value = "buy">
    </form>
    </div>

    <?php
    }
    ?>
</div>

<?php  
include('Inc/footer.php') ;
?>