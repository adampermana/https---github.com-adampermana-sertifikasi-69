<?php
//koneksi ke database
$db = mysqli_connect("localhost","root","","adp");

function query ($query){
global $db;
$result = mysqli_query($db,$query);
$rows = [];
while ($row = mysqli_fetch_assoc($result)){
	$rows [] = $row;
}
return $rows;

}

function tambah ($POST) {
	global $db;
	$id =$_POST["id"];
	$nama =$_POST["nama"];
	$email =$_POST["email"];
	$no_tlp =$_POST["no_tlp"];
	$pekerjaan =$_POST["pekerjaan"];
	

	$query = "INSERT INTO admin values ('$id','$nama','$email','$no_tlp','$pekerjaan')";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
} 

function hapus ($id){
	global $db;
	mysqli_query($db,"DELETE FROM admin WHERE id=$id");
	return mysqli_affected_rows($db);
}

function ubah ($POST){
	global $db;
	
	$username =($POST["username"]);
	$password =($POST["password"]);
	$tgl_lahir =($POST["tgl_lahir"]);
	$jenis_kelamin =($POST["jenis_kelamin"]);
	$email =($POST["email"]);
	

	$query = "UPDATE user SET
			
			username = '$username',
			password = '$password',
			tgl_lahir = '$tgl_lahir',
			jenis_kelamin = '$jenis_kelamin',
			email = '$email'
			WHERE id = 1";

	mysqli_query($db,$query);
	return mysqli_affected_rows($db);
}

function ubah2 ($POST){
	global $db;
	
	$id =($POST["id"]);
	$nama =($POST["nama"]);
	$email =($POST["email"]);
	$no_tlp =($POST["no_tlp"]);
	$pekerjaan =($POST["pekerjaan"]);
	
	

	$query = "UPDATE admin SET
			
			id = '$id',
			nama = '$nama',
			email = '$email',
			no_tlp = '$no_tlp',
			pekerjaan = '$pekerjaan'
			WHERE id = $id";

	mysqli_query($db,$query);
	return mysqli_affected_rows($db);
}


function registrasi ($POST) {
	global $db;

	$username = strtolower($POST ["username"]);
	$password = mysqli_real_escape_string($db,$POST ["password"]);
	$password2 = mysqli_real_escape_string($db,$POST ["password2"]);
	$tgl_lahir = mysqli_real_escape_string($db,$POST ["tgl_lahir"]);
	$jenis_kelamin = mysqli_real_escape_string($db,$POST ["jenis_kelamin"]);
	$email = mysqli_real_escape_string($db,$POST ["email"]);

	//cek userame udh ada ato blm
$result = mysqli_query($db,"SELECT username FROM user WHERE username = '$username'");

	if(mysqli_fetch_assoc($result)) {
		echo"<script>
		alert ('username sudah terdaftar!');
		</script>";
		return false;
	}

	//konfirmasi pw

	if($password !== $password2){
		echo"<script>
		alert ('konfirmasi password tidak sesuai!');
		</script>";
		return false;
	}

	$password = ($password);
	//$password = password_hash($password,PASSWORD_DEFAULT);
	//$password = md5($password);

	mysqli_query($db,"INSERT INTO user values ('','$username','$password','$tgl_lahir','$jenis_kelamin','$email')");

	return mysqli_affected_rows($db);
}


?>