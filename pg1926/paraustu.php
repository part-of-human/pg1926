<html>
<head>
    <title>ParaUstu</title>
</head>
<body>
    <?php
    //TAMAMLANDI

        echo '
        <form name="paraustu" action="" method="POST">
            Para üstünü kuruş değerinden giriniz: <input type="integer" name="sayi" value="">
            <br> <br>
            <input type= "submit" name="buton" value="Yolla">
        </form>';

        if($_POST){
            $z=$_POST['sayi'];
        }
        
       
             if($z>=100) {
                $kac100var = $z/100;
                $kac100var = floor($kac100var);
                $kalan1 =$z%100;

                if($kalan1!=0) {

                   
                    $kac50var=$kalan1/50;
                    $kac50var=floor($kac50var);
                    $c=$kalan1-$kac50var*50;
                    
                        
                    $kac25var = $c/25;
                    $kac25var = floor($kac25var);
                    $k= $c - $kac25var*25 ;
                    
                            
                    $kac10var = $k/10;
                    $kac10var = floor($kac10var);
                    $l=$k-$kac10var*10;
                    
                            
                    $kac5var = $l/5;
                    $kac5var = floor($kac5var);
                    $m=$l-$kac5var*5;
                    
                                
                    $kac1var = $m/1;
                    $kac1var = floor($kac1var);
                    
                    echo "Para üstü:", $kac100var ," tane 100 kuruş ", $kac50var ," tane 50 kuruş ", $kac25var," tane 25 kuruş ",$kac10var," tane 10 kuruş ",$kac5var," tane 5 kuruş ",$kac1var," tane 1 kuruş";
                }

                elseif($kalan1 === 0) {
                    echo "Para üstü:", $kac100var ," tane 100 kuruş ";
                }   
            }     
            
            

            elseif( $z>= 50 AND 100 > $z) {
                $kac50var= $z/50;
                $kac50var = floor($kac50var);
                $kalan2 =$z%50;

                if($kalan2 != 0) {
                    
                    $kac25var = $kalan2/25;
                    $kac25var = floor($kac25var);
                    $k= $kalan2 - $kac25var*25 ;
                    
                        
                    $kac10var = $k/10;
                    $kac10var = floor($kac10var);
                    $l=$k-$kac10var*10;
                        
                           
                    $kac5var = $l/5;
                    $kac5var = floor($kac5var);
                    $m =$l-$kac5var*5;
                            
                               
                    $kac1var = $m/1;
                    $kac1var = floor($kac1var);

                    echo "Para üstü:", $kac50var ," tane 50 kuruş ", $kac25var," tane 25 kuruş ",$kac10var," tane 10 kuruş ",$kac5var," tane 5 kuruş ",$kac1var," tane 1 kuruş";
                    }

                elseif($kalan2 == 0) {
                    echo "Para üstü:",$kac50var," tane 50 kuruş";
                }
            }
            
            elseif(50>$z AND $z>=25) {
                $kac25var= $z/25;
                $kac25var = floor($kac25var);
                $kalan3 =$z%25;

                if($kalan3 != 0) {
                    $kac10var = $kalan3/10;
                    $kac10var = floor($kac10var);
                    $l=$kalan3-$kac10var*10;
                
                       
                    $kac5var = $l/5;
                    $kac5var = floor($kac5var);
                    $m=$l-$kac5var*5;
            
                          
                    $kac1var = $m/1;
                    $kac1var = floor($kac1var);
                    
                    echo "Para üstü:", $kac25var," tane 25 kuruş ",$kac10var," tane 10 kuruş ",$kac5var," tane 5 kuruş ",$kac1var," tane 1 kuruş";
                }
             
                elseif($kalan3 == 0) {
                    echo "Para üstü:", $kac25var,"tane 25 kuruş " ;
                }
            }
            
            
            elseif(25>$z AND $z>=10) {
                $kac10var= $z/10;
                $kac10var = floor($kac10var);
                $kalan4 =$z%10;

                if($kalan4 !=0) {
                    $kac5var = $kalan4/5;
                    $kac5var = floor($kac5var);
                    $m=$kalan4-$kac5var*5;
            
                        
                    $kac1var = $m/1;
                    $kac1var = floor($kac1var);
                    echo "Para üstü:",$kac10var," tane 10 kuruş ",$kac5var," tane 5 kuruş ",$kac1var," tane 1 kuruş" ;
                }        
                
                elseif($kalan4 == 0) {
                    echo "Para üstü:",$kac25var," tane 25 kuruş ";
                }
            }
            
            

            elseif(10>$z AND $z>=5) {
                $kac5var= $z/5;
                $kac5var = floor($kac5var);
                $kalan5 =$z%5;

                if($kalan5 !=0){
                $kac1var = floor($kalan5);

                echo "Para üstü: ",$kac5var," tane 5 kuruş ",$kac1var," tane 1 kuruş" ;
                }

                elseif($kalan5 == 0) {
                    echo "Para üstü: ",$kac5var," tane 5 kuruş " ;
                }
            }
           

            elseif(5>$z AND $z>=1) {
                $kac1var= $z/1;
                $kac1var = floor($kac1var);
                $kalan6 =$z%1;
        
                echo "Para üstü:",$kac1var," tane 1 kuruş";
            }
            
            elseif($z == 0) {
                echo"Para üstü yoookk";
            }

    ?>
</body>
</html>