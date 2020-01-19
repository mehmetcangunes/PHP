
//veritabanıayar.php=

//bağlantı için login ayarları yapılıyor. 
<?php

$host   =  "localhost";
  $user   =  "root";
  $pass   =  "";
  $db    =  "site"; 

//try ve catch yapısı ile bağlantımızı yapıyoruz 
try { 
$conn = new PDO("mysql:host={$host};dbname={$db}",$user,$pass); //$conn değişkeni içerisine new PDO diyerek yeni bağlantı oluşturuyoruz .


}catch (PDOException $e){ //eğer bir sorun olursa getMessage() yap diyor kodumuz.
$e->getMessage();
}

?>


//yapılan bağlantıların kullanılması .
<?php

include 'veritabanıayar.php';  //veritabanıayar.php dosyamızı kullanacağımızı söyleyip kodumuz içine alıyoruz. 

$titleBaglanti= $conn->prepare("SELECT * FROM sitebilgileri WHERE anahtar= :deger"); //$conn değişkeni oluşturduğumuz için $conn değişkeninden devam ediyoruz . ve sql sorgusu yazarak veri tabanından dosyamızı çekiyoruz .

$titleBaglanti->execute(array(':deger'=>'title'));

$titlee = $titleBaglanti->fetch(PDO::FETCH_ASSOC);

?>
