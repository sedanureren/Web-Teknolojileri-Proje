<?php

session_start();
ob_start();


if(($_POST["username"]=="b201210030@sakarya.edu.tr") && ($_POST["password"]=="b201210030"))
{

$_SESSION["login"] = "true";
$_SESSION["username"] = "b2012100304@sakarya.edu.tr";
$_SESSION["password"] = "b201210030";

echo "Hosgeldiniz b201210030. Giriş basarili. Anasayfaya yonlendiriliyorsunuz. Lütfen bekleyin..";
header("Refresh:2; url=index.html");

}
elseif(($_POST["username"]==null) && ($_POST["password"]==null))
{
echo "Kullanici adi veya sifre bos birakilamaz. ";
header("Refresh: 2; url=login.html");
}
else
{
echo "Kullanici adi veya sifre yanlis. Lütfen kontrol ediniz .";
header("Refresh: 2; url=login.html");
}


ob_end_flush();
?>