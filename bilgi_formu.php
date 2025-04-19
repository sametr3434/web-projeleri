
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tasarımı</title>
    <?php include 'yan-bar.php'; ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            
        }
        iframe, video {
    height: 300px; /* Varsayılan yüksekliği artırdık */
}

        .form-container {
            width: 40%;
            margin: 100px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="tel"], input[type="password"], input[type="date"], input[type="file"], input[type="color"], input[type="submit"], input[type="image"], input[type="range"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="image"] {
            width: 40px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e7f5e9;
            border: 2px solid #c6f1d1;
            border-radius: 5px;
        }

        .result p {
            font-size: 16px;
        }

    </style>
</head>
<body>

<div class="form-container">
    <h1>Bilgilerinizi Girin</h1>
    <form action="" method="get">
        <label for="name">Ad:</label>
        <input type="text" id="name" name="name" placeholder="Adınızı girin"><br>

        <label for="surname">Soyad:</label>
        <input type="text" id="surname" name="surname" placeholder="Soyadınızı girin"><br>

        <label for="telefon">Telefon Numarası:</label>
        <input type="tel" id="telefon" name="telefon" placeholder="Telefon numaranızı girin"><br>

        <label for="color">Yazı Rengi Seçin:</label>
        <input type="color" id="yazi_rengi" name="yazi_rengi"><br>

        <input type="submit" name="submit" value="Gönder"><br>

        <audio src="müzik.mp3" controls autoplay></audio><!--audio oynatılabilir bir müzk calar verir src ise kmzügü yolu contorlde bu müzğin çıkmasını saglar xamp içindeki dosyaya müzik dosyası at aynı şekil videoda-->
        <p>Ses düzeyinizi ayarlayarak istediğiniz seviyeye getirin:</p>
    <!-- web siteye vido koyma-->
    <input type="range" name="ses" min="0" max="100"><br>
        <video src="video.mp4" width="400px" controls></video>

    <p><del>üstü çizer</del><ins>altını çizer</ins></p>

    </form>

    <div class="result">
    <?php
if (isset($_GET["name"]) && isset($_GET["surname"]) && isset($_GET["telefon"])) {
    // "Kayıt başarılı" mesajı
    echo "<p style='color:green;'>Kayıt başarılı şekilde oldu, bilgileriniz aşağıda:</p>";
    
    // Kullanıcı bilgilerini yazdırma
    echo "<p style='color: " . htmlspecialchars($_GET["yazi_rengi"]) . ";'>Ad: " . htmlspecialchars($_GET["name"]) . "</p>";
    echo "<p style='color: " . htmlspecialchars($_GET["yazi_rengi"]) . ";'>Soyad: " . htmlspecialchars($_GET["surname"]) . "</p>";
    echo "<p style='color: " . htmlspecialchars($_GET["yazi_rengi"]) . ";'>Telefon Numaranız: " . htmlspecialchars($_GET["telefon"]) . "</p>";

}

/*
 <input type=text name="soyad">
  <input type="submit" name="submit" value="Gönder"><br>
  gönder butona basınca text içine yazılan veri name e gidiyor.
 */
?>
<iframe src="reklam.php" frameborder="0" width="600"hight="500"></iframe>
<a href="https://www.apple.com/tr/?cid=aos-tr-kwgo-brand">
    <button style="background-color:#45a049;color:#c6f1d1; border-radius: 10px;width:600px;height:40px;">apple satın almak için tıklayın</button> <!--a href içine yazılan buton link görevi alır baısnca gider
        buttonu kapatmak için disaple kullanıyoruz -->
    </div>
</div>

</a>
</body>
</html>
