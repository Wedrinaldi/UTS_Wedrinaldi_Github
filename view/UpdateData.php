<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM wedri ORDER BY id DESC");
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="gaya.css">
</head>

<body>
<div class="content">  
    <div class="container">
      <h2 class="mb-5">Data Calon Mahasiswa</h2>
      <div class="table-responsive">

                <table width='80%' border=0>

                    <tr bgcolor='#CCCCCC'>
                        <td scope="col">Nama</td>
                        <td scope="col">Email</td>
                        <td scope="col">Program</td>
                        <td scope="col">Asal Daerah</td>
                        <td scope="col">Nilai Rata-Rata</td>
                        <td scope="col">Update</td>
                    </tr>
                    <?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr bgcolor='#2ba0ad'>";
		echo "<td>".$res['nama']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['program']."</td>";
        echo "<td>".$res['asal']."</td>";	
        echo "<td>".$res['nilai']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
    
	?>
    	</table>
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
