<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelecek: Başarı, Azim ve Kararlılıkla İnşa Edilir</title>

    <!-- CSS Stilleri Burada -->
    <style>
        /* Genel stil ayarları */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        /* Header stili */
        header {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ecf0f1;
        }

        /* Sayfa içeriği */
        section {
            padding: 100px 20px;
            margin-top: 80px; /* Header'ın altına yazının kaymaması için boşluk bırakıyoruz */
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            text-align: center;
        }

        h1, h2 {
            color: #2c3e50;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 30px;
        }

        blockquote {
            font-style: italic;
            color: #34495e;
            border-left: 5px solid #2c3e50;
            padding-left: 20px;
            margin-top: 30px;
            font-size: 1.3rem;
        }

        /* Başarı Hikayeleri Bölümü */
        .hike {
            margin-bottom: 40px;
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .hike:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .hike h3 {
            color: #2c3e50;
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .hike p {
            color: #7f8c8d;
            font-size: 1.1rem;
        }

        /* İletişim formu stil */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        form label {
            margin: 10px 0;
            font-size: 1.1rem;
            color: #2c3e50;
        }

        form input, form textarea {
            padding: 12px;
            margin: 10px 0;
            width: 400px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        form input:focus, form textarea:focus {
            border-color: #2c3e50;
            outline: none;
        }

        form button {
            padding: 12px 20px;
            border: none;
            background-color: #2c3e50;
            color: white;
            font-size: 1.1rem;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #34495e;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            font-size: 1rem;
        }

        footer a {
            color: #ecf0f1;
            text-decoration: none;
            margin-left: 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <!-- Başlangıç: Header -->
    <header>
        <nav>
            <ul>
                <li><a href="">Ana Sayfa</a></li>
                <li><a href="#basari-hikayeleri">Başarı Hikayeleri</a></li>
                <li><a href="#motivasyon">Motivasyon</a></li>
                <li><a href="#iletisim">İletişim</a></li>
            </ul>
        </nav>
    </header>

    <!-- Ana Sayfa -->
    <section id="ana-sayfa">
        <div class="container">
            <h1>Gelecek: Başarı, Azim ve Kararlılıkla İnşa Edilir</h1>
            <p>Hayatındaki büyük değişimler, azim ve kararlılıkla atacağın küçük adımlarla başlar. Geleceğini şekillendirmek için atacağın her adım önemli.</p>
        </div>
    </section>

    <!-- Başarı Hikayeleri -->
    <section id="basari-hikayeleri">
        <div class="container">
            <h2>Başarı Hikayeleri</h2>
            <p>Gerçek başarı öykülerini keşfedin. Azim ve kararlılık, her zaman zorlukları aşmanın anahtarıdır.</p>
            <div class="hike">
                <h3>Steve Jobs</h3>
                <p>Apple’ın kurucusu Steve Jobs, birçok başarısızlık yaşadıktan sonra, inancını kaybetmeden çalışmaya devam etti. Bugün dünya çapında büyük bir etki yarattı.</p>
            </div>
            <div class="hike">
                <h3>Oprah Winfrey</h3>
                <p>Oprah, zorlu çocukluk dönemine rağmen, azimle hayatına yön vererek, medya dünyasında devrim yarattı. Kararlılığı, ona başarıyı getirdi.</p>
            </div>
        </div>
    </section>

    <!-- Motivasyon -->
    <section id="motivasyon">
        <div class="container">
            <h2>Motivasyon</h2>
            <p>Her gün bir adım daha atın, çünkü başarının anahtarı kararlılıktır.</p>
            <blockquote>"Başarı, kararlılıkla inşa edilen bir yolculuktur." - [Yazar Adı]</blockquote>
        </div>
    </section>

    <!-- İletişim Formu -->
    <section id="iletisim">
        <div class="container">
            <h2>İletişim</h2>
            <form action="#">
                <label for="isim">Adınız:</label>
                <input type="text" id="isim" name="isim" required>
                <label for="mesaj">Mesajınız:</label>
                <textarea id="mesaj" name="mesaj" required></textarea>
                <button type="submit">Gönder</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 Gelecek İnşa Ediliyor. Tüm Hakları Saklıdır. <a href="#">Gizlilik Politikası</a> | <a href="#">İletişim</a></p>
    </footer>
</body>
</html>
