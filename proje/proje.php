
<html>
<head>
<title>hatırlatıcı</title>
<link rel="stylesheet" type="text/css" href="proje.css" />
</head>
<body>
<?php
$x = array();
$tarih = array();
?>



<form action="?" method="POST" name="form1">
<h4>HATIRLATICI UYGULAMASINA HOŞGELDİNİZ.<br>
UYGULAMAYI NASIL KULLANACAĞINIZI ÖĞRENMEK İÇİN "BİLGİLENDİRME" BUTONUNA TIKLAYINIZ.</h4>
<br><br>
<h5>Size Neyin Hatırlatılmasını İstiyorsunuz?</h5>
<input type="text" name="ekle" placeholder="" autocomplete="off">
<br> <h5>Bitiş Tarihini Giriniz:</h5>
<input type="time" name="tarih" id="tarih" placeholder="" autocomplete="off">
<br><br>
<button type="submit" name="onayla" id="onayla">Ekle</button>
<input type="submit" name="bilgilendirme" id="bilgilendirme" value="Bilgilendirme">
</form>
<?php

$z=1;
$k= 0;
if(isset($_POST["bilgilendirme"])) {
    echo "<h3>BİLGİLENDİRME</h3><br><h5>Yapmanız gerekenleri bilgisayarda vakit geçirirken unutmamanız için bu uygulamaya not alabilirsiniz. <br> Yapmanız gerekenleri yazıp bitiş tarihini de seçip 'ekle' butonuna basınız.</h5>";
}
if(isset($_POST["onayla"])) {
    echo "YAPILACAK İŞ:<br>";
    $a=$_POST["ekle"];
    $b=$_POST["tarih"];
    $x[]=$a;
    //$tarih[]=$b;
    //array_push($x,$a);
    array_push($tarih,$b);
    $t = count($x);
    $t = (int)$t;
    while($z<=$t) {
        echo $x[$k];
        echo "   bitiş saati:(",$tarih[$k],")";
       
        $z++;
        $k++;
    }
}

?>
</body>
</html>


