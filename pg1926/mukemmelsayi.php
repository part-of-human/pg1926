<html>
<head>
    <title>Mukemmel Sayi</title>
</head>
<body>
<?php 
    //TAMAMLANDI
        
    
        echo '
        <form name="mukemmelsayi" action="" method="POST">
            Sayıyı giriniz: <input type="integer" name="sayi" value="">
            <br> <br>
            <input type= "submit" name="buton" value="Yolla">
        </form>';


        if($_POST){
            $z=$_POST['sayi'];
        }
        $liste = array();
        
        $x = 1;
        
        while( $x<$z ) {
            
            if($z % $x == 0) {
                $liste[]=$x; //liste.push($liste,$x);
            }
            $x++;
        }

        $a = array_sum($liste);

        if($a == $z) {
            echo '<script>alert("Mükemmmel sayı!")</script>';
            
        }
        else {
            echo '<script>alert("Malesef bu bir mükemmel sayı değil :(")</script>';
        }
        

    ?>
</body>
</html>