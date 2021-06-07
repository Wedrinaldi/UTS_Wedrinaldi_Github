<?php
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$program = mysqli_real_escape_string($mysqli, $_POST['program']);
	$asal = mysqli_real_escape_string($mysqli, $_POST['asal']);
	$nilai = mysqli_real_escape_string($mysqli, $_POST['nilai']);	

	if(empty($nama) || empty($email) || empty($program) || empty($asal) || empty($nilai)) {	
			
		if(empty($nama)) {
			echo "<font color='red'>Nama field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		
		if(empty($program)) {
			echo "<font color='red'>Program field is empty.</font><br/>";
		}		
		if(empty($asal)) {
			echo "<font color='red'>Asal Daerah field is empty.</font><br/>";
		}	
		if(empty($nilai)) {
			echo "<font color='red'>Nilai Rata-Rata field is empty.</font><br/>";
		}	
	} else {	
		$result = mysqli_query($mysqli, "UPDATE wedri SET nama='$nama',email='$email',program='$program',asal='$asal',nilai='$nilai' WHERE id=$id");
		

		header("Location: UpdateData.php");
	}
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM wedri WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nama = $res['nama'];
	$email = $res['email'];
	$program = $res['program'];
	$asal = $res['asal'];
	$nilai = $res['nilai'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="UpdateData.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>Program</td>
				<td><input type="text" name="program" value="<?php echo $program;?>"></td>
			</tr>
			<tr> 
				<td>Asal Dearah</td>
				<td><input type="text" name="asal" value="<?php echo $asal;?>"></td>
			</tr>
			<tr> 
				<td>Nilai Rata-Rata</td>
				<td><input type="text" name="nilai" value="<?php echo $nilai;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
