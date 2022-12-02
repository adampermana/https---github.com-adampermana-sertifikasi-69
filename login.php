<?php
session_start();

if(isset($_SESSION["home"])) {
    header("Location:home.php");
    exit;
}

require 'function.php';
if (isset($_POST["login"])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];


	$result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' AND password ='$password'");


	if (mysqli_num_rows($result) === 1 ){
//set session
    $_SESSION["login"] = true;

		echo "<script>
		alert ('Login Berhasil!');
    document.location.href='home.php';
		</script>
		";
    } else {
		echo "<script>
		alert ('Login Gagal!');
    document.location.href='login.php';
		</script>
		";

		$row = mysqli_fetch_assoc($result);

		if(password_verify($password, $row ["password"])) {

      $_SESSION["login"] = true;
      
      header("location: home.php");
      exit;
      
			
    }	
  }
	$error = true;
}

if(isset ($error)):	

endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN LOGIN</title>
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
  height: 410px;
  margin: 6rem auto 8.1rem auto;
  width: 329px;
  
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

 	</style>
 </head>
 <body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form action="" method="post" class="form">
        <label for="username" style="padding-top:13px">
            &nbsp;USERNAME:
          </label>
        <input id="username" class="form-content" type="username" name="username" id="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">&nbsp;PASSWORD:
          </label>
        <input id="password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="login" value="LOGIN" />
        <a href="registrasi.php" id="signup">Belum Punya Akun?</a>
      </form>
    </div>
  </div>
</body>
</html>