<!DOCTYPE html>
<html lang = "en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

     <div class="container">
     	<h2> CREATE TABLE AS BELOW </h2>
     	<p></p>
     	<table class = "table table-bordered">
     	      <thead>
     	      	<tr>
     	      		<th rowspan="2">STT</th>
     	      		<th rowspan="2">Họ Tên</th>
     	      		<th colspan="2">Giới Tính</th>
     	      		<th rowspan="2">Chức Vụ</th>
     	      	</tr>
     	      	    <tr>
     	      	    	<th>Nam</th>
     	      	    	<th>Nữ</th>
     	      	    </tr>
     	      </thead>
     	      <tbody>
     	       
     	       <tr>
     	      	<td>1</td>
     	      	<td>Trần Đức Anh</td>
     	      	<td>X</td>
     	      	<td> </td>
     	      	<td>Lớp Trưởng</td>
     	       </tr>

               <tr>
               	<td>2</td>
               	<td>Kiều Thị Thu Hằng</td>
               	<td> </td>
               	<td>X</td>
               	<td>Lớp Phó</td>
               </tr>

               <tr>
               	<td>3</td>
               	<td>Vương Thị Lê Na</td>
               	<td> </td>
               	<td>X</td>
               	<td>Tổ Phó</td>
               </tr>
     	      </tbody>
     	  </table>
     </div>
     
</body>
</html>

<?php
 include('Inc/conn.php')
  ?>