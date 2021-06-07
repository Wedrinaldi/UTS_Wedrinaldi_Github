<?php

class database{

	var $host ="localhost";
	var $uname ="root";
	var $pass ="";
	var $db = "wedrinaldi_1tia";
	var $con;

	function __construct()
	{
		$this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db); 
		mysqli_select_db($this->con, $this->db);
	}


	function tampil_data()
	{
		$data = mysqli_query($this->con,"select * from wedri");
		while($d = mysqli_fetch_array($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}


	function input($nama,$email,$program,$asal,$nilai)
	{
		mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass, $this->db),"insert into wedri values('','$nama','$email','$program','$asal','$nilai')");
	}


function hapus($id){
	mysqli_query(mysqli_connect($this->host,$this->uname,$this->pass,$this->db), "delete from wedri where id='$id'");
}


	function edit($id){
		$data = mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass, $this->db),"select * from wedri where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
}	
	function update($id,$name,$email,$program,$asal,$nilai){
		mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass, $this->db),"update  wedri set nama='$nama',email='$email',program='$program',asal='$asal',nilai='$nilai' where id='$id'");
	}
}

?>