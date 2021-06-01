<?php
class database{
var $host = "localhost";
var $uname = "root";
var $pass = "";
var $db = "registrasiPMB";
var $con;

	
	function __construct(){
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}
	function tampil_data(){
		$data = mysqli_query($this->con, "select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}		
	return $hasil;
    }
	function input($username,$prodi,$email
    ){
		mysqli_query(mysqli_connect($this->host, $this->uname,$this->pass,$this->db), "insert into mahasiswa values('','$username','$prodi','$email')");
	}
	function hapus($id){
		mysqli_query(mysqli_connect($this->host,$this->uname,$this->pass,$this->db), "delete from mahasiswa where id='$id'");
	}
	function edit($id){
		$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from mahasiswa where id ='$id'");
		
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id,$username,$prodi,$email){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update mahasiswa set nama='$username', alamat='$prodi', usia='$email' where id='$id'");
	}
}
?>
