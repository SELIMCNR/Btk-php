<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <title>Site</title>
 
    </head>
    <body>
<?php
 /* Değişken : Girilen değerleri alan veri tutan kodlar
   kurallar : 1 değişkenler $ile başlar 2.Değişken isimleri mutlaka bir harfa veya _ (alt çizgi) ile başlar
   3.Rakamla başlamaz, 4.Değişken isimleri içinde hiçbirzaman boşluk olmaz
   5.Özel kelimeler kullanılamaz if class vs
   */
   
  $ISIM = "Selim Çınar";
  echo $ISIM;

  
  $_ISIM = "Selim Çınar";
  echo $_ISIM;

  
  /*$1ISIM = "Selim Çınar";   DEĞİŞKEN İSMİ RAKAMLA BAŞLADI HATA*/
  
  
  $ISI_M = "Selim Çınar";
  echo $ISI_M;
  
  /*Birden fazla değişken */
  $OrnekBir = "Selim";
  $Soyisim = "Çınar";
  $Deneme = "Merhaba {$OrnekBir} $Soyisim nasılsın?";
  echo $OrnekBir;
  echo $Deneme ;

  /*Referansa bağlı değer atama*/
  $DegerBir = "Selim";
  $DegerIkı = $DegerBir;
  echo "<br />";
  echo $DegerBir ;
  echo "<br />";
  echo  $DegerIkı;

  $DegerBir = "Hakan";
  $DegerIkı = $DegerBir;
  echo "<br />";
  echo $DegerBir ;
  echo "<br />";
  echo  $DegerIkı;

  /*Değişken Değişkenler tanımlama */
    $Deger = "Selim";
    $$Deger = "Çınar"; /*Değişken değişkenler */
    echo $Deger;
    echo "<br/>";
    echo $$Deger ; /*Değişken değişkenler */

    $Deger = "Selim";
    $$Deger = "Çınar"; /*Değişken değişkenler */
    echo $Deger;
    echo "<br/>";
    echo $Selim ; /*Değişken değişkenler */

    /*Birden çok değişkeni tek değişkene bağlama */

    $Isım = "Selım";
    $Soyısım = "Çınar";
    $yas = 30;
    $Sonuc   = "Merhaba".$Isım ." ". $Soyisim;

    $Sonuc   = "Merhaba $Isım <br /> $Soyisim";
    $Sonuc= "{$Isım} {$Soyısım}";

    $ISIMSOYISIM = "Selim Cinar";

    
    echo $ISIMSOYISIM[0] . "<br />";
    echo $ISIMSOYISIM[1] . "<br />";
    echo $ISIMSOYISIM[2] . "<br />";
    echo $ISIMSOYISIM[3] . "<br />";
    echo $ISIMSOYISIM[4] . "<br />";
    echo $ISIMSOYISIM[5] . "<br />";
    echo $ISIMSOYISIM[6] . "<br />";
    echo $ISIMSOYISIM[7] . "<br />";
    echo $ISIMSOYISIM[8] . "<br />";
    echo $ISIMSOYISIM[9] . "<br />";
    echo $ISIMSOYISIM[10] . "<br />";
    echo $ISIMSOYISIM[11] . "<br />";





    


  


   echo "Merhaba dünya!";
?>
        <p>Selim Çınar</p>
    </body>
</html>