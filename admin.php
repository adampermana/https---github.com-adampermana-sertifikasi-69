<?php
require 'function.php';

$admin = query("SELECT * FROM admin ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Admin</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<style>
		body{
         background-image: url(1109233.jpg);
         height: 600px;
         width:100%;
         background-position: center;
         background-size: cover;
         margin: 0px;
         padding: 0px;
         background-attachment: fixed;
     }
      .nomor{
      	background-color: blueviolet;
      	text-decoration: none;
      	color: white;
      	border: 2px solid white;
      	box-shadow: 1px 2px 8px whitesmoke;
      	padding: 7px 20px;
      	border-radius: 12px;
      }
      .nomor:hover{
      	box-shadow: 5px 5px grey;
      	opacity: 90%;
      }
     .nav{
     	color: white;
     	background-color: blue;
     	height: 60px;
     	width: 1350px;
     	list-style-type: none;
     	display: flex;

     }

     .knn {
     	color: white;
     	text-decoration: none;
     	font-size: 20px;

     }
     .knnn {
     	margin-left: 70%;
     }
 		</style>
 	</head>
 	<body>
 		<div class="nav">
 			<li style=" width: 20%"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONTACTS</h1>
 			</li> 
 			
 			<li  class="knnn"><h1><a class="knn" href="home.php">Home</a></h1></li>
 		</div>

<br><br>
<form action="" method="POST">
	<div><a class="nomor" href="tambah.php">CREATE</a>
	</div><br><br>

	<table border="1" cellpadding="10" cellspacing="0" >

<tr>
	<th>#</th>
	<th style="width: 100px;">Nama</th>
	<th style="width: 300px;">Email</th>
	<th style="width: 200px;">No. Telp</th>
	<th style="width: 400px;">Pekerjaan</th>
	<th>Aksi</th>
	
</tr>
<?php foreach ($admin as $row): ?>
<tr>
	<td><?php echo$row["id"];  ?></td>
	<td><?php echo $row["nama"];  ?></td>
	<td><?php echo $row["email"];  ?></td>
	<td><?php echo $row["no_tlp"];  ?></td>
	<td><?php echo $row["pekerjaan"];  ?></td>
	<td>
		<a href="ubah2.php?id=<?= $row["id"];?>"onClick= "return confirm ('yakin mau di ubah');">EDIT<i class="fa-solid fa-user-pen"></i></a>|
		<a href="hapus.php?id=<?= $row["id"];?>"onClick= "return confirm ('yakin mau di hapus?');">DELETE<i class="fa-solid fa-user-minus"></i></a></td>
</tr>
<?php endforeach; ?> 
</html>