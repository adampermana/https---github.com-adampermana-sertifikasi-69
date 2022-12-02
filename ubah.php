<?php
require 'function.php';

$id = $_GET["id"];

$user = query ("SELECT * FROM user WHERE id = $id")[0];

//cek button tambah data udh bisa di tekan atau belom
if(isset($_POST["submit"])){

	if (ubah($_POST)>0){
		echo"<script>
		alert('data berhasil diubah!');
		document.location.href ='home.php';
		</script>";
	}else{
		echo"<script>
		alert('data gagal diubah!');
		document.location.href ='ubah.php?id=1';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ubah Data User</title>
	</head>
	<style>
	a {
  text-decoration: none;
}
 body{
   background-image: url(1109233.jpg);
  opacity : 95%;
   background-size: cover;
   background-repeat: no-repeat;
   background-position: center;
            }
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}

#card {
  background: #b0acac ;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 600px;
  margin: 6rem auto 8.1rem auto;
  width: 700px;
  

  
}
#card-content {
  padding: 12px 44px;
  display: flex;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}
#signup {
  color: black;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #574c4c, #dbbfbd);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px grey;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px whitesmoke;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(#574c4c, #dbbfbd);
  height: 3px;
  width: 200px;
}
.form-content {
  background: #b0acac;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(#574c4c, #dbbfbd);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 200px;
}
li{
  list-style-type: none;
}

.kanan {
	float: right;

}
h2{
	text-align: center;
}
.kembali {
	background: -webkit-linear-gradient(right, #574c4c, #dbbfbd);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px grey;
  cursor: pointer;
  color: white;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
  float: right;
}
.kembali2 {
	background: -webkit-linear-gradient(right, #574c4c, #dbbfbd);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px grey;
  cursor: pointer;
  color: white;
  height: 42.3px;
  margin: 50px;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
  float: right;
}
.link {
	text-decoration: none;
	color: white;
	font-family: "Raleway SemiBold", sans-serif;

}
.kembali:hover{
	box-shadow: 0px 1px 18px whitesmoke;
}
.bw {
	margin-top: 30px;
}
	</style>

<body>
<h1 class="bw" align="center">EDIT DATA</h1>
<div id="card">
				<div id="card-title">
        <h2><i class="fa-solid fa-user-plus"></i>EDIT USER</h2>
        <div class="underline-title"></div>
      </div>
    <div id="card-content">
    <div>
    	<form action="" method="POST" class="form">
    	<ul>
		<li>
			<label for="username">username :</label>
			<div><input class="form-content" type="text" name="username" id="username" required value="<?=$user["username"];?>">
			<div class="form-border"></div><br>
		</div>
		</li>
		<li>
			<label for="password">Password :</label>
			<div><input class="form-content" type="text" name="password" id="password" required value="<?=$user["password"];?>">
			<div class="form-border"></div><br>
		</div>
		</li>
		<li>
			<label for="tgl_lahir">Tanggal Lahir</label>
			<div><input class="form-content" type="text" name="tgl_lahir" id="tgl_lahir" required value="<?=$user["tgl_lahir"];?>">
			<div class="form-border"></div><br>
		</div>
		</li>
		<li>
			<label for="jenis_kelamin">Jenis Kelamin :</label>
			<div><input class="form-content" type="text" name="jenis_kelamin" id="jenis_kelamin" required value="<?=$user["jenis_kelamin"];?>">
			<div class="form-border"></div><br>
		</div>
		</li>
		<li>
			<label for="email">Email :</label>
			<div><input class="form-content" type="email" name="email" id="email" required value="<?=$user["email"];?>">
			<div class="form-border"></div><br>
		</div>
		</li>
					<input id="submit-btn" type="submit" name="submit" value="EDIT" />

    	</ul>
    </div>
     <div>
     	<ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<button class="kembali2"><a class="link" href="home.php">Kembali</a></button>
     	</ul>
     </form>
     </div> 
      
   </div>
  </div>
</body>
</html>      
