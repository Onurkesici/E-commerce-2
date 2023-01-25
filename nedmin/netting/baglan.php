<?php 

//Çoklu Dil Mantiği if/else

//$_SESSION['tr'];
//veya
////$_SESSION['eng'];

try {

	$db=new PDO("mysql:host=localhost;dbname=c2c;charset=utf8",'root','');

	//echo "veritabani bağlantisi başarili";

}


catch (PDOExpception $e) {

	echo $e->getMessage();

}

 ?>