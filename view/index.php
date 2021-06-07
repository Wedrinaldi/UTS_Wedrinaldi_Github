<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM wedri ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
	<title>Table #6</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="gaya1.css">
</head>

<body>
<div class="content">  
    <div class="container">
      <h2 class="mb-5">Pendaftaran Mahasiswa</h2>
      <div class="table-responsive">
<a href="input.php">Klik Disini Untuk Mendaftar</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td scope="col">Nama</td>
		<td scope="col">Program</td>
		<td scope="col">Asal Daerah</td>
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr bgcolor='#2ba0ad'>";
		echo "<td>".$res['nama']."</td>";
		echo "<td>".$res['program']."</td>";	
		echo "<td>".$res['asal']."</td>";

	}

	?>
	</table>
	<br>
	<br><br><br><br>
	<a href="LoginAdmin.php"> <h5> Login Admin </h5> <br>
	</div>
</div>
</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>



</body>
</html>
