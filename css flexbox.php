<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--
flexbox nedir  aslında esne kutu modelidir. contarin varsa belirli elemanları konumlarımıız flexbox ile kolay şekilde gerçekleştirri flexbox kapsayıcıdır
containerda flex contarie gibi alır
https://css-tricks.com/snippets/css/a-guide-to-flexbox/ bu siteyi incele daha iyi anlarsın
flexbox aktif etmek için display özelliğni flex yapıyoruz
flexbox şöyle birden fazla kutuları(elementleri) hizalamk için kullanıyor.
main axis x ekseni olarak geciyor
croos axis y ekseni olarak geciyor
main size genel genişliği teslim ediyor
cross size genel yükseklik teslim ediyor.
-->
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;


    }
    .contrain
    { 
        width: 75%;
        margin: 0 auto;
        display: flex;/*contrain özelligini flex yapıtk */
        justify-content: flex-start;/*standart olandır sol yukarıda başlayıp  işlem yapar */
        justify-content: flex-end;/* artık işlem sondan başlar x düzleminde sona git */
        justify-content: center;/* artık işlem ortadan başlar x düzleminde ortalama yap */
        /*justify-content: space-between;*/ /*bir kutu alır, boşluk bırakır arka planı dolduru tabi 2çce başlar yani kaç tane varsa böler 1 yaz 2 boşluk 3 yazı 4 boluşk 5 boşluk 6 yazı olur aşagıda  h1 e bak a1 başlık yazar, boşluk a2 yazar boşluk a3 yazar.*/
        /*justify-content: space-around;*//*1boşluk a1, 2boşluk a2 2 bpşluk a3 1 boşluk */
        justify-content: space-evenly;/*boşluk a1, bpluk a2 boşluk a3 ve boşluk koyar */
        min-height: 600px;/*eğer kont degerin aşarsa otomatik larak artırma yapar  minium 600 makismi sınıır yok */
        background-color: burlywood ;
        color:wheat;
        /* flex-direction: row;*/ /*SIRALI SEKİLDE YAN YANA OLUYOR hicibr flex-direction yazmaksak row olur flex(esnek) direction(yön) yükskelik yerilmez ise contrain kapladıgı yere kadar gider*/
       /* flex-direction: column;*/ /*column olursa alt alta gecer */
       align-items: center;/*öge hizasını merkezler  y eksneinde yükskeligin yarında gelir ortalar*/
       align-items:stretch;/*stretch kısmı standartır baştan sona giderç buda y kısmında hareet ettirme */
       align-items: flex-start;/*flex start sol yukarıda yapar justify-content de  flex star yaparsak ikide en yukarıda olur YUKARI hizalam yapmış oluruz 
       flex-end olsa ikisde end-bar yapabiliriz
       */
       flex-wrap: nowrap;/*sıgdırmak için kutuları auto kücült */
       /*eğer kutu fazla geldiyse  ve aşagı inmesini istiyorsak flex-wrap:wrap; kullanılır ; */
       flex-wrap: wrap;/*taşma olsa bile aşagı eklemye devam eder ona göre heightnı ayarla
       */

   
       
    }
    .box
    {
        text-align: center;
        background-color:rgb(60, 54, 189);
        width: 300px;
        border:1px solid red;
        padding: 20px;
        margin: 20px;
        border :5px solid rgba(25, 25, 25, 0.5);
        border-radius: 25px;
    }
    .box:hover
    {
        background-color:cadetblue;
        font-style: bold ;
        cursor: pointer; /* El işareti yapar */
        color: pink;
    }
    .box a
    {
        text-decoration: none;
        color: wheat;
    }
    .contrain
    {
        padding-top: 40px;
        padding-left:40px ;
        
    }
</style>
<body>
<!-- flex contarin-->
<div class="contrain">
    <a href="http://localhost/web-projeleri/cesaret.php#http://localhost/web-projeleri/css%20flexbox.php">
        <div class="box">
            <h1>Gelecek</h1>
            <p>Başarı, azim ve kararlılıkla inşa edilir.</p></a>
            <hr>
        </div>
        <div class="box">
            <h1>Yolculuk</h1>
            <p>Öğrenmek, keşfetmek ve gelişmek için bir fırsattır.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Başarı</h1>
            <p>Hedeflerine ulaşmak için her gün bir adım at.</p>
            <hr>
        </div>
        <div class="box">
            <h1>İnovasyon</h1>
            <p>Yaratıcılık, yeni kapılar açmanın anahtarıdır.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Sabır</h1>
            <p>Büyük işler zaman ve emek ister.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Hayaller</h1>
            <p>Hayallerin, gerçekliğe dönüşmesini bekliyor.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Motivasyon</h1>
            <p>Başarı, motivasyonun ve disiplinin birleşimidir.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Liderlik</h1>
            <p>Gerçek liderler, ilham vererek ilerler.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Vizyon</h1>
            <p>Geleceği görmek, bugünü yönlendirmek demektir.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Başlangıç</h1>
            <p>Her büyük başarı, küçük bir adımla başlar.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Azim</h1>
            <p>Engeller, sadece azmini sınar.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Strateji</h1>
            <p>Doğru planlama, büyük başarılar getirir.</p>
            <hr>
        </div>
        <div class="box">
            <h1>İlham</h1>
            <p>İlham, yaratıcı fikirlerin kaynağıdır.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Odak</h1>
            <p>Başarı, odaklanma ile mümkündür.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Cesaret</h1>
            <p>Risk almadan büyük zaferler kazanılmaz.</p>
            <hr>
        </div>
        <div class="box">
            <h1>Deneyim</h1>
            <p>Deneyimler, en iyi öğretmenlerdir.</p>
            <hr>
        </div>
    </div>
<!---sürekli div nox eklersek standarıtında sıgmadıgında,divleri kücültür koyar. görüntü bozulabilir normal hali flex-wrap:nowap dir  -->
</body>
</html>