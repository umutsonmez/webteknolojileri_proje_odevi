<?php

$kullaniciAdi=$_POST['email'];
$şifre=$_POST['pass'];

if(!empty($kullaniciAdi) && !empty($şifre))
{
	
if($kullaniciAdi=="b191210087@sakarya.edu.tr"&&$şifre=="1234")
{
	echo "<center>Hoşgeldiniz b191210087...<a href=javascript:history.back(-1)>Geri Don</a></center>";
}
else
{
	echo "<center>Hatalı Giriş Yaptınız Tekrar Deneyiniz...!<a href=javascript:history.back(-1)>Geri Don</a></center>";
	header("Location:Login.php?$kullaniciAdi");
}

}
else
{
	echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
}


?>
