<?php
$sayi1= 13;
$sayi2 = 11 ; 
if($sayi1 < $sayi2){  //eğer sayi1 sayi2 den küçükse "sayi1 sayi2 den küçüktür basacaktır . "
echo "sayi1 sayi2 den küçüktür <br>";
echo"sorun yok";
}elseif ($sayi1 > $sayi2){ // eğer sayi1 sayi2 den büyükse "sayi1 sayi2 den bütüktür basacaktır . 
echo "sayi1 sayi2 den büyüktür <br>";
echo"sorun yok";
} else { // eğer ki sayılar ikisi de değil yani eşitse sayılar eşit basacaktır .
	echo "sayılar eşit <br>";
echo"sorun yok";
}
?>

--------------------------------------------------------------------
 <?php
$sayi1= 11;
$sayi2 = 1 ; 
$bitis = $sayi1 ==  $sayi2 ? "Sayılar eşit" : "Sayılar eşit değil.";
 echo $bitis 
 /* 
 == eşit ifadesine geliyor  
< küçüktür anlamına geliyor
> büyüktür anlamına geliyor  
!= eşit değildir 
*/
?>


