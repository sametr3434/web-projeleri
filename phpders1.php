<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //xampp içinde  htdocs dosyanına dosyayı atıp sonra xammp açıp apache aktif ediyoruz.
    //sonra localhost/dosyaadı yazıp giriyoruz 
    //bura için sitenin alanı http://localhost/phpders1.php
/*
php 101
php başlamak için html içine
<?php yazılır ve sonuna ?> gelir
ekrana yazı yazmak için echo komutu var ; koyuyoruz 
*/
echo "merhaba dünya <br>";
/*if(koşul) {yapılacak işlem}*/
$s=5;
if($s==5)
{
    echo "s 5 e eşittir <br>";
}
else {echo "s 5 değildir";}
$s=6;
if($s==6)
{
    echo "s 6 e eşittir <br>";
}
else {echo "s 6 değildir";}
//yeni değişken değeri alır python gibi sonda ne dediğsek yeni işlem budur.
if(1==1){echo 1;} //echo içine int degerli direk yazdırabiliriz ama ekranda string olarak gözükür.
//else {echo "1";} //altında sarı olması bu kod çalışmayacağını söylüyor çümkü yukarında if keşin çalışacak.
//else {işlem;} ; koymayı unutma php ; kullanılır python gibi ; almama durumu yok yani
/*yorum satırı iki şekilde olur * / * / şekilinde olur boşuluk bide ili slach // şekilinde olur.*/
//tekli torum satarlarında hiç bir kod çalışmaz lakin php kapatma kodu ? > çalışır.
/*çokluda ise ?> php kapatma satırı çalışmaz*/

//
/*PHP DE DEĞİŞKEN TANIMLAMA 
Değişkenler oluşurkeb,çağırken php de hep $ işareti ile başlar. değişken adı = değeri ; noktalı virgül koyulabilir.
değişken adı koyulurken ad kuralları python ile aynı rakam ile başlayamaz, özel karater olarak sadece altan çizgi olur büyük 
kücük duyarlığı vardır. değişkenin türünü yazmayız  otomatik kendisi tanımlar zaten
$
*/
$a=1;
$b=10;
$c=$a*$b; //değişkeni çapırken bile başuında dolar işareti olur kodun bittiğini göstermek için ; konur.
echo $c . "<br>"; //  php de . koyarak birleştirme yapılır, pyton daki + mantığını aynısıdır. ohode . ile birleşir
var_dump($a."<br>"); /*ekrana türünü ve a nın değerini yazdırur int(1) ; koymayı unutma kodun bitti ise ; koy*/ 
var_dump($a,$b); /*ekrana türünü ve a nın değerini yazdırur int(1)*/
var_dump($a+$b); /*ekrana türünü ve a nın ve b nin değerini toplar türü ile değrini yazar int(11) yazar*/
var_dump("merhaba dünya","a"); /*" string(14) yazıp merhaba dünya"  string 1 de yazar"a "*/
$ad="samet";

//HTML KODUNU PHP DE KULLANMA
echo $a."<hr>"; // iki tırnak içine string yazıp işlem yapılıyor.  eğer stirng içinde ise normla şekilde <html_kodu> yazılır
//burada değişken ile stirng ifadeyi birleştirmek için . kullandık
$ad="samet"; 
echo $ad."<br>";
$bool=true; //bool türündeki true yada false alır 
var_dump($bool);//bool(true)
var_dump($bool."<br>");//bool değerini string yapr true ise 1 , false ise "" boş string döner dır
echo "<br>";
if($bool)
{
    echo "dogrudur";
}
echo "<br>";
$dizi1=["a",1,3,"hello"];
//0. index a a da birinci elemandır dizi1 3 index oluşur 4 karakter uzunluğundadır.
//eger var_dump($dizi 1 ) dersek [0]=string(1) "a" [1]=int(1)... gidecek ve array yazacak array dizi demekdir.
class örnekclasım
{
    function toplama($x,$y)  {echo $x+$y ."<br>";}
} 
$nesnem=new örnekclasım;
$nesnem->toplama(5,4);/*kısa bir fonkisyon yazıldı */
//yeni class örnegi araç bilgilierini girp ekrana yazdırma
class class_arac_bilgileri
{
    function aracın_bilgilerini_göster($aracın_modeli,$aracın_beygiri,$aracın_fiyatı)
    {
        echo "aracın modeli = ".$aracın_modeli." aracın beygiri =".$aracın_beygiri." aracın fiyatı = ".$aracın_fiyatı."<br>";
    }
}
//clasın nesneye cevirme
$arac_biligisi_nesnesi=new class_arac_bilgileri;
$arac_biligisi_nesnesi->aracın_bilgilerini_göster("fiat","10","1000$");
$arac_biligisi_nesnesi->aracın_bilgilerini_göster("megan","15","2000$");
//dizi tanımlarken sınır belirtmeye gerek yok sadece değişken tanımlarken farkı kapalı parantez oluyor.
$dizi=[1,2,3,4,"a","b"];
var_dump($dizi);
/*array(6) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> string(1) "a" [5]=> string(1) "b" }
şeklinde bize bilgi verir. dikkali bkaınca rahat anlaşılıyor [0] 0 index 1. eleman yani int türünde 1 degerinde ... diye gidiyor
array ise dizi demektir.
array(6) derse 6 elemanlıdır. demek
*/
echo "\n"; // bu da yeni satıra iner
//obje oluşturmak için class içinde olur genelde
//class oluştumak için class clasınadı ...
//class clasınadı {işlemler},işlemlerde biri= fonksiyon tanımlamak
// fonksiyon tanımlamak için function değip fonksiyon  adı () {işlemler}
//function  foknsiyon_adı  parantez aç() {yapılacak işlemi yaz}
class insanlar
{
    function erkekler(){echo "erkekler";}
    function kadinlar(){echo "kadinlar";}
}
echo "\n";
//classı direk çağıramayız, onları nesneye tanımlamınız lazım
//Bir class (sınıf), bir şablondur ve tek başına çalışmaz. Kullanabilmek için bir nesne (instance) oluşturman gerekir.
// şöyle düşün sen classı oluşturdun bunu sınırsız çoğaltma yapabilirsin sınırsız nesneye tanımlayabilirsin, 
//Class = Şablon, Nesne = Gerçek Kullanım Bir class, sadece bir taslaktır.
// Gerçek veriyi ve işlemi yapmak için bir nesne (object) oluşturmalısın.
//Bir class sadece bir taslaktır ve hafızada yer kaplamaz. Ama nesne oluşturduğunda hafızada yer kaplar ve kullanabilirsin
/*Yapı	Açıklama
Class (Sınıf)	Bir şablondur, tek başına çalışmaz.
Nesne (Object)	Class'ı kullanmak için new ile oluşturulmalıdır.
Nesne olmadan class çalışmaz.	Çünkü class'ın içine özgü veri atanmaz. */
// gelenim konuya class oluştu onu nesneye baglayacz kullanmak isteğimiz  nesne adını yazıyoruz = new değio class_adını(); yazıyoruz
$insanlar1=new insanlar();
//insanlar1 nesnesi oluşturldu  nesne_adi-> tire büyüktür(ok işarti ile) insanlar-> diyerek fonksiyonları çağırma yapabilirsin
$insanlar1->erkekler(); //insanlar clasın içindeki erkekler fonksiyonu çağırmasını yaptık ; unutma
$dizi=["a" ,new insanlar()]; 
echo "\n";
var_dump($dizi); //çağrıldıgında erkeklerarray(2) { [0]=> string(1) "a" [1]=> object(insanlar)#2 (0) { } } yazıyor 2.elaman index1 olan object oluyor.
//https://www.youtube.com/watch?v=uTJNdPGzrMI&list=PLvDYObN1J9DJurXmMzoZnpXVQGI6cELmc&index=8 devam et
echo "<br>";
?>
<script>//buraya html,java script yazılabilir. yani bir sayfada birden fazla php olabilir sıkıntı çıkmaz</script>
<?php
//iç içe dizi
$birinci_dizi=[1,2,3,"a"];
$ikinci_dizi=[1,2,3,"a",$birinci_dizi];
echo "<br>";
var_dump( $ikinci_dizi);
//array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> string(1) "a" [4]=> array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> string(1) "a" } }
//dizi elemanı 6 dir, sıfırcı index birinci eleman int 1 oluyor. 4. indeks elemanı 4 indexli bir dizi varmış dizinin içeriğini yazıyor bide sınırsız dizi
//içinde dizi kullanabilir
$dizi1=["türkiye "];
$dizi_sehir=["istanbul , ankra , izmir "];
$dizi_ilceler=["pendik ","kartal ","ataşehir "];
$dizi2=[$dizi1,$dizi_sehir,$dizi_ilceler];// dizi birleştirken , kullanılır nokta kullanılmaz
print_r ($dizi2);// print_r(dizi_adı) kullanarakArray ( [0] => Array ( [0] => türkiye ) [1] => Array ( [0] => istanbul , ankra , izmir ) [2] => Array ( [0] => pendik [1] => kartal [2] => ataşehir ) )
// böyle yazdırma olur var_drump daha yaygın kullanımdır
//tek tek yazdırmak için döngü kullanılır
for($i=0;$i<count($dizi2);$i++)// count(dizi) eleman sayısını belirtir for($i=0;$i<count($dizi2);i++)(i değerini sıfırdan başlat count dizi 2 ise dizi uzunluğudur ; i++ seklinde olur){}
{
    echo "<br>";
 echo $dizi_ilceler[$i];
  
}
/**$dizi = ["elma", "armut", "muz"];
echo count($dizi); // Çıktı: 3 yani elema sayısı kdar olur 1 den başlar. */
//nokta ile . strignleri birbirlerine bağlayabiliriz.
$merhaba="merhaba ";
$word="dünya ";
echo  $merhaba." ".$word;
echo "<br>";
//çok boyutlu diziler
$cokboyutlu_dizi=
[
    "yiyecek"=> "elma ",
    "konum"=>"istnabul pendik ",
    "araba"=>"fiat ",
    "arabalar"=>
    ["BMW "=>"i20",
    "mercedes"=>"c180",
    "toyata"=>"corolla"
    ]
];
print_r($cokboyutlu_dizi);/**Array ( [yiyecek] => elma [konum] => istnabul pendik [araba] => fiat ) diye çıktı veriyor */
//dizinin içinde elmayı almak istersem
print_r($cokboyutlu_dizi["yiyecek"]); //bunu yazarsam elma yazar
echo "<br>";
print_r($cokboyutlu_dizi["araba"]);
echo "<br>";
print_r($cokboyutlu_dizi["arabalar"]);// [arabalar] => Array ( [BMW ] => i20 [mercedes] => c180 [toyata] => corolla ) ) elma fiat Array ( [BMW ] => i20 [mercedes] => c180 [toyata] => corolla ) diye yazıyor
print_r($cokboyutlu_dizi["arabalar"]["toyata"]);
//arabalr içinde diziye gectik, oradaki toyata karşılıpını aldık
echo "<br>";

$tekboyutludizi=
[
"samet",1,2,3
];
//print_r($coklutanımlıdizi['samet']);
for($i=0;$i<count($tekboyutludizi);$i++)
{   
    echo "<br>";
    print_r( $tekboyutludizi[$i]);
}

echo "<br>";
$cokludizi_1=
[
    "samet"=>"üner",
    "berk"=>"tilki",
    "can"=>"altay"
];
//foreach döngüsü, (döngünün_adı as $key=>$value) key burada yukarıdaki samet,berk,can olur . value değeri ise samete karşılık gelen üner, berk karşılık gelen tilki... seklinde olur
foreach ($cokludizi_1 as $key => $value)
{
    echo $key . " => " . $value . "<br>";
}
/*samet => üner
berk => tilki
can => altay  şeklinde çıktı verir.*/

$dizi=
[
"istanbul"=>"osmanlı imparatorluğu",
"ankara"=>"türkiye cumhuriyeti",
"konya"=>"anadolu selçuklu devleti"
];
foreach($dizi as $key=>$value)
{
    echo "$value , <br>";
    /*osmanlı imparatorluğu ,
türkiye cumhuriyeti ,
anadolu selçuklu devleti , şeklinde yazar.*/ 
}

$dizi=
[
"istanbul"=>"osmanlı imparatorluğu",
"ankara"=>"türkiye cumhuriyeti",
"konya"=>"anadolu selçuklu devleti"
];



$diziler=
[
"1",2,34,5,6,$dizi
];
printf($diziler[5]["konya"]);
//$diziler[5] ifadesi, $dizi dizisini temsil eder.
//$diziler[5]["konya"] ifadesi ile "konya" anahtarına erişilir.
//Yanlış kullanım: $diziler[$dizi] çünkü $dizi bir dizi olduğu için indeks olarak kullanılamaz.
//Doğru kullanım: $diziler[5]["konya"] çünkü $diziler[5] dizinin içinde var ve "konya" anahtarı doğru erişim sağlar.
//ekrana anadolu selçuklu devleti yazar









?>
</body>
<!--< ?="merhaba dünya 2 "//kısa şekilde php içini ani açıp kapattık sondaki ?,> ile kapatma yaptık genelde dönüşümlü yazukur    q?>-->
</html>
