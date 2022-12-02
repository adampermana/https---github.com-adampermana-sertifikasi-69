<?php
require 'function.php';
//cek button tambah data sudah ditekan atau belom
if(isset($_POST ["submit"])) {

	
if (tambah($_POST) >0) {
	echo "<script> 
	alert ('data berhasil di tambahkan!');
	document.location.href = 'home.php';
	</script>";
} else {
	echo "<script> 
	alert ('data gagal di tambahkan!');
	document.location.href = 'tambah.php';
	</script>";
}

}
?>

<DOCTYPE html>
	<html>
		<head>
			<title>Create</title>
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
.link {
	text-decoration: none;
	color: white;
	font-family: "Raleway SemiBold", sans-serif;

}
.kembali:hover{
	box-shadow: 0px 1px 18px whitesmoke;
}
      		</style>
		</head>
		<body>
			<div id="card">
				<div id="card-title">
        <h2><i class="fa-solid fa-user-plus"></i>CREATE</h2>
        <div class="underline-title"></div>
      </div>
    <div id="card-content">
    <div>
    	<form action="" method="post" class="form">
    	<ul>
    		<li>
						<label for="id"> ID :</label>
						<div>
						<input class="form-content" type="text" name="id" id="id" required>
						<div class="form-border"></div><br>
					</div>
					</li>
					<li>
						<label for="nama"> NAMA :</label>
						<div>
						<input class="form-content" type="text" name="nama" id="nama" required>
						<div class="form-border"></div><br>
					</div>
					<li>
						<label for="email"> EMAIL :</label>
						<div>
						<input class="form-content" type="text" name="email" id="email" required>
						<div class="form-border"></div><br>
					</div>
					</li>
					<li>
						<label for="no_tlp"> No. Telp :</label>
						<div>
						<input class="form-content" type="text" name="no_tlp" id="no_tlp" required>
						<div class="form-border"></div><br>
					</div>
					</li>
					<li>
						<label for="pekerjaan"> PEKERJAAN :</label>
						<div>
						<input class="form-content" type="text" name="pekerjaan" id="pekerjaan" required>
						<div class="form-border"></div><br>
					</div>
					</li>
					<input id="submit-btn" type="submit" name="submit" value="CREATE" />

    	</ul>
    </div>
     <div>
     	<ul>
					<button  class="kembali"><a class="link" href="index.php">Kembali</a></button>
     	</ul>
     </form>
     </div> 
      
   </div>
  </div>
			
		</body>
	</html>