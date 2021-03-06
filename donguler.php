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

Do while döngüsü : Herhangi bir koşula bakılmaksızın do küme parantezi içindeki kod çalışacaktır . 
	do while öngüsünde öncelikle yapılması gereken işlem yapılır daha sonrasında koşula bakılır . while döngüsünden farkı budur.
		
Örnek : 		

$sayi = 1; //Değişkenimizi oluşturuyoruz . 

do{
	echo "Php ye selam <br>"; // Koşula bakılmaksızın ilk do {} içindeki kodlar çalışacaktır.Döngü sağlanmasa da ekrana bu basılacaktır. 
	$sayi ++;
}while ($sayi <= 10) ; // Daha sonra ise while döngüsüne geçmek için koşula bakılıyor . 
	echo "Döngü bitti"; // while döngüsü tamamlanmasa da bu mesaj ekrana basılır . 


foreach döngüsü : 
dizi(array) veya obje(object) içindeki verileri otomatik olarak listeleme işlemi yapmaktadır.
	
array kullanımı : 	
$bilgisayarlar = array("Lenovo", "MSI","COMPUTER"); //Dizi tanımlıyoruz .
echo $bilgisayarlar[1]; //Hangi elemanı yazdırmak istiyorsanız onun index numarasını giriyorsunuz . Her programlama dilinde olduğu gibi burda da saymaya 0'dan başlıyoruz. ben 1 seçtim ekrana MSI basacaktır. 

foreach kullanımı : 
foreach ($bilgisayarlar as $yazdir){  //  $bilgisayar yazarak array değeri verdiğimiz değişkeni yazdık ve onu da $yazdir 'a atadık .
	echo $yazdir ."<br>"; // Burada ise yukarıda oluşturduğumuz $yazdir degiskenimizi ekrana basıyoruz . Ve ekranda <br> etiketi açtığımız için alt alta Lenovo MSI COMPUTER basılıyor. 
}


foreach ($bilgisayarlar as $index => $yazdir) { //burada ise $yazdir degerini önünde index numaraları olarak yazdırdık . 

	echo $index ." - ".$yazdir ."<br>"; // Burada ise yukarıda oluşturduğumuz $yazdir degiskenimizi ekrana basıyoruz . Ve ekranda <br> etiketi açtığımız için alt alta önlerinde index numaraları olmuş şekilde Lenovo MSI COMPUTER basılıyor. 
}



?>
