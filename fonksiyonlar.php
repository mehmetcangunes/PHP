<?php
isset  = Orada bir değer alıp almadığına bakar .Mesela aşağıdaki örnekte username gelen değer var mı yok mu kontrolü yapmıştır.
  Kısaca kullanımı şu şekildedir ; 

if(isset($_POST['username']))
	echo "post var";
else 
	echo "post yok "; 


highlight_file(__FILE__); -->yazdığınız kodun webde gözükmesini sağlar yani şu şekilde eğer bunu kodunuza eklerseniz
	<?php  ve içerisindekiler ?> görünecek.



empty =  Boşlukları göstermek için kullanılır . Örneğin username | password girişi . Kısaca şu şekilde kullanılır ;

if(empty($_POST['username'])) //username de boşluk var mı yok mu onun kontrolünü yapıyor .
echo "Boşluk var";
else
echo "Boşluk yok"


Yukarıdaki işlemi parola ile birlikte yapılmasını da sağlayabiliriz . 

if(empty($_POST['username']) || empty($_POST['password']))
	echo "bOŞLUK VAR	";
else 
	echo "BOŞLUK YOK ";




print_r  = print_r($_POST); //Post methodu ile gönderilen verileri array şeklinde bize verir . Çıktısı bu şekilde olur ;
Array ( [username] => sa [password] => sa )


strlen =  Girilen girdinin ya da değişkenin kaç harf ya da sayıdan oluştuğunu 0 dan başlayarak sayıp bize veriyor . Kısaca kullanımı şu şekildedir . 

$username = $_POST['username'];
echo strlen($username);

Bir de deniyelim . 


$username = $_POST['username'];
$maks = 10; //Burada maksimum 10 karakter olması gerektiği değişkenini giriyoruz . 
$user= mb_strlen($username); //burada ise strlen kaç karakter olduğunu bulması için strlen($username) komutunu kullandık .  Ve burda unutmayın ki eğer girdide  türkçe karakter var ise 2 olarak sayar yani ç yazarsak 1 çıktısını delde ederiz 0 dan başladığımız için 5 tane ç yazarsak error verecektir .  mb_strlen($username) olarak yazarsak bu sorun ortadan kalkacatır . 


if ($user > $maks)
	echo "Maksimum 10 karakter kullanabilirsiniz .";
else
	echo "Hoşgeldiniz . ";



strpos = Girilen girdideki " " içinde belirlediğimiz kelimenin kaçıncı sırada olduğunu ekrana basar.
$username = $_POST['username'];

$cıktı = strpos($username, "."); //burada öncelikle değişken adımızı girdik o değişken girdisinin içerisiinde araması için , dan sonra ise ne arayacağını girdik . strlen de olduğu gibi burada da mb_strpos kullanmanız önemlidir . 

echo $cıktı ;
<?
