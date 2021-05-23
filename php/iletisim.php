<?php
$_ad=$_POST['ad'];
$_soyad=$_POST['soyad'];
$_email=$_POST['email'];
$_mesaj=$_POST['mesaj'];
echo "Ad: $_ad";
echo "<br>";
echo "Soyad: $_soyad";
echo "<br>";
echo "Email: $_email";
echo "<br>";
echo "Mesaj: $_mesaj";
echo "<br>";
if(empty ($_POST['cinsiyet'])){
    echo "Lütfen Cİnsiyet Seçiniz";
}
elseif(isset( $_POST['cinsiyet'])){
    $_cinsiyet=$_POST['cinsiyet'];
    echo "Cinsiyet: $_cinsiyet";
}


?>