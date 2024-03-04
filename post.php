<?php

function sorgula($sayı){
    if(empty($sayı)){
        echo "Bos Deger Girilemez.";
    }
    else if($sayı % 3 == 0){
        echo "3'e tam bölünüyor.";
    }
    else if($sayı % 3 != 0){
        
        while($sayı % 3 != 0){
            $sayı++;
            if($sayı % 3 == 0)
            echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı ". $sayı;                  
        }     
    }
}

$sorgu = array_map('sorgula',$_POST);
echo "<pre>";