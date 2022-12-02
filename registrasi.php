<?php
require 'connection.php';

//ketika tombol regis ditekan,proses fungsi registrasi
if (isset($_POST["register"])){
  if (registrasi($_POST)>0){
    echo"<script>
    alert('user baru berhasil ditambahkan!');
    document.location.href ='login.php';
    </script>";
  } else {
    echo mysql_error($db);
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN LOGIN</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Login</title>
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
  height: 650px;
  margin: 6rem auto 8.1rem auto;
  width: 500px;
  
}
#card-content {
  padding: 12px 44px;
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
  width: 100%;
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
  width: 89px;
}
li{
  list-style-type: none;
}
label{
display: block;
}
.panjang {
  width: 370px;
  height: 30px;
  text-align: center;
  background: #b0acac;
  border: none;
  outline: none;
  padding-top: 14px;
}


 	</style>
 </head>
 <body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2><i class="fa-solid fa-user-plus"></i>REGISTRASI</h2>
        <div class="underline-title"></div>
      </div>
      <form action="" method="post" class="form">
        <ul><li>
      <label for="username">USERNAME :</label>
      <input class="form-content" type="text" name="username" id="username" placeholder="Masukan username..." required>
      <div class="form-border"></div><br>
    </li>
    <li>
      <label for="password">PASSWORD :</label>
      <input class="form-content" type="password" name="password" id="password" placeholder="Masukan password..." required>
      <div class="form-border"></div><br>
    </li>
    <li>
      <label for="password2">KONFIRMASI PASSWORD :</label>
      <input class="form-content" type="password" name="password2" id="password2" placeholder="konfirmasi password..." required>
      <div class="form-border"></div><br>
    </li>
    <li>
      <label for="tgl_lahir">TANGGAL LAHIR :</label>
      <input  class="panjang" type="date" name="tgl_lahir" id="tgl_lahir" required>
      <div class="form-border"></div><br>
    </li>
    <li>
      <label for="jenis_kelamin">JENIS KELAMIN :</label>
      
      <select id="browsers" class="panjang" name="jenis_kelamin" onchange="combo(this,'jenis_kelamin'">
      <option value="LAKI-LAKI">LAKI-LAKI</option>
        <option value="PEREMPUAN">PEREMPUAN</option>
      </select>
      <div class="form-border"></div><br>
    </li>
  <li>
      
      <label for="email">Email :</label>
      <input class="form-content" type="text" name="email" id="email" placeholder="Masukan Email..." required>
      
      <div class="form-border"></div>
    </li><center><input id="submit-btn" type="submit" name="register" value="REGISTRASI" /></center></ul>
  </form>
    </div>
  </div>
</body>
</html>