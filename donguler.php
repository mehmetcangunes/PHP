<?php
Döngülerde dikkat etmemiz gereken şey koşulun gerçekleşmesinde bir sonun belirtilmesidir . Bunu belirlemezsek eğer sürekli 
döndüreceği için çökmelere neden olacaktır. 

while döngüsü : 

while ( $koşul ) {
koşul doğru ise yapılacaklar
}

Örnek : 

$sayi = 0 ;
while ($sayi <= 10) { //$sayi değişkeni 10 dan küçükse ekrana  "php den selam " mesajını 11 basar.  eğer ki $sayi değişkeni 10 dan büyükse boş ekran döner . eğer ki <= den sonra 10 yerine 9 verseydik 10 defa "php den selam" basacaktı . 
	$sayi ++ ;  //Burada  birer birer artması gerektiğini söylüyoruz  .Eğer ki söylemezsek döngü kendi kendini tekrara alır ve çökmelere neden olabilir.
	echo "$sayi php den selam<br>";
}


for döngüsü : 

for( $değişken ; dönme şartı  ; dönüş işlemi) // dönmeşartı = if konutudur  .  Dönme işleminde her zaman birer birer arttırmak zorunda değilsiniz. bu işlemi değiştirip üçer üçer veya beşer beşer saydırabilirsiniz.

	Örnek : 
for($i = 0 ; $i < 10 ; $i ++){
	echo "Selam<br>";
}

Do while döngüsü : 

	?>
