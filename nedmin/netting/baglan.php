<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=marangoz",'root','12345678');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}

 ?>