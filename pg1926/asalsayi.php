<html>
<head>
    <title>AsalSayi</title>
</head>
<body>
    <?php 
    //TAMAMLANDI

    
        echo '
        <form name="asalsayi" action="" method="POST">
            Sayıyı giriniz: <input type="integer" name="sayi" value="">
            <br> <br>
            <input type= "submit" name="buton" value="gönder gelsin">
        </form>';

        if($_POST){
            $a=$_POST['sayi'];
        }
        $x = 2;
        $z = 2;

        while($x <= $a) {
            if($a % $z == 0) {
                if($a == $z) {
                    echo ("Asal sayı");
                }
                elseif($a != $z) {
                    echo ("Asal sayı değil");
                }
            break;    
            }
            else {
                $x++;
                $z++;
            }
        }

        
        

    ?>
</body>
</html>