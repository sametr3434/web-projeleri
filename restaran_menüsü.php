<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Restoran Menüsü</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f8f8f8;
      color: #333;
    }

    /* Üst Bar */
    #üst_bar {
      background-color: #d32f2f;
      padding: 15px;
      text-align: center;
      position: sticky;/*sürekli sabit kalmasını sağlıyor*/
      top: 0;
      z-index: 1000;
    }

    #linkler a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-size: 18px;
      font-weight: bold;
      transition: 0.3s;
    }

    #linkler a:hover {
      color: #ffcc80;
    }

    .menu-container {
        max-width: 1000px;/*genişlüği en fazla 1000 yapıyor*/
        margin: 40px auto;/*buda ortalma sağşıyor */
      padding: 20px;/*her yerden 20  px içe gidiyor*/
    }

    .menu-section {
      display: none;
      background: white;
      padding: 20px;
      border-radius: 40px;
      box-shadow: 0 4px 12px rgba(199, 61, 7, 1);/*menünün container kenarına renk veriyor */
      margin-bottom: 20px;
    }

    .menu-section.active {
      display: block;
    }

    .menu-section h2 {
      color: #c62828;
      font-size: 28px;
      margin-bottom: 15px;
    }

    .menu-item {
      margin-bottom: 12px;
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    .menu-item:last-child {
      border-bottom: none;
    }

    .menu-item strong {
      font-size: 18px;
      color: #444;
    }

    .menu-item span {
      float: right;
      font-weight: bold;
      color: green;
    }

    @media (max-width: 600px) {
      #linkler a {
        display: block;
        margin: 10px 0;
      }

      .menu-item span {
        float: none;
        display: block;
        margin-top: 5px;
      }
    }
  </style>
</head>
<body>

  <div id="üst_bar">
    <div id="linkler">
      <a href="#" onclick="showMenu('menuler')">Menüler</a>
      <a href="#" onclick="showMenu('corbalar')">Çorbalar</a>
      <a href="#" onclick="showMenu('anayemekler')">Ana Yemekler</a>
      <a href="#" onclick="showMenu('tatlilar')">Tatlılar</a>
    </div>
  </div>

  <div class="menu-container">
    
    <!-- Menüler -->
    <div id="menuler" class="menu-section active">
      <h2>Menüler</h2>
      <div class="menu-item"><strong>Köfte Menü</strong><span>900₺</span></div>
      <div class="menu-item"><strong>Tavuk Menü</strong><span>850₺</span></div>
      <div class="menu-item"><strong>Et Döner Menü</strong><span>950₺</span></div>
      <div class="menu-item"><strong>Izgara Sucuk Menü</strong><span>880₺</span></div>
      <div class="menu-item"><strong>Karışık Izgara</strong><span>1100₺</span></div>
      <div class="menu-item"><strong>Vejetaryen Menü</strong><span>700₺</span></div>
      <div class="menu-item"><strong>Balık Menü</strong><span>980₺</span></div>
      <div class="menu-item"><strong>Spesiyal Menü</strong><span>1150₺</span></div>
      <div class="menu-item"><strong>Fast Food Menü</strong><span>790₺</span></div>
      <div class="menu-item"><strong>Çocuk Menüsü</strong><span>600₺</span></div>
    </div>

    <!-- Çorbalar -->
    <div id="corbalar" class="menu-section">
      <h2>Çorbalar</h2>
      <div class="menu-item"><strong>Mercimek Çorbası</strong><span>70₺</span></div>
      <div class="menu-item"><strong>Ezogelin Çorbası</strong><span>75₺</span></div>
      <div class="menu-item"><strong>Tavuk Suyu Çorbası</strong><span>85₺</span></div>
      <div class="menu-item"><strong>Domates Çorbası</strong><span>65₺</span></div>
      <div class="menu-item"><strong>İşkembe Çorbası</strong><span>90₺</span></div>
      <div class="menu-item"><strong>Yoğurtlu Yayla</strong><span>70₺</span></div>
      <div class="menu-item"><strong>Mantar Çorbası</strong><span>80₺</span></div>
      <div class="menu-item"><strong>Brokoli Çorbası</strong><span>75₺</span></div>
      <div class="menu-item"><strong>Kremalı Sebze Çorbası</strong><span>85₺</span></div>
      <div class="menu-item"><strong>Kelle Paça</strong><span>100₺</span></div>
    </div>

    <!-- Ana Yemekler -->
    <div id="anayemekler" class="menu-section">
      <h2>Ana Yemekler</h2>
      <div class="menu-item"><strong>İskender</strong><span>1300₺</span></div>
      <div class="menu-item"><strong>Adana Kebap</strong><span>1200₺</span></div>
      <div class="menu-item"><strong>Urfa Kebap</strong><span>1150₺</span></div>
      <div class="menu-item"><strong>Tavuk Şiş</strong><span>980₺</span></div>
      <div class="menu-item"><strong>Lahmacun</strong><span>60₺</span></div>
      <div class="menu-item"><strong>Kuzu Tandır</strong><span>1400₺</span></div>
      <div class="menu-item"><strong>Karnıyarık</strong><span>850₺</span></div>
      <div class="menu-item"><strong>Sebzeli Güveç</strong><span>790₺</span></div>
      <div class="menu-item"><strong>Kaşarlı Köfte</strong><span>950₺</span></div>
      <div class="menu-item"><strong>Fırın Tavuk</strong><span>920₺</span></div>
    </div>

    <!-- Tatlılar -->
    <div id="tatlilar" class="menu-section">
      <h2>Tatlılar</h2>
      <div class="menu-item"><strong>Künefe</strong><span>90₺</span></div>
      <div class="menu-item"><strong>Sütlaç</strong><span>60₺</span></div>
      <div class="menu-item"><strong>Baklava</strong><span>100₺</span></div>
      <div class="menu-item"><strong>Profiterol</strong><span>85₺</span></div>
      <div class="menu-item"><strong>Cheesecake</strong><span>95₺</span></div>
      <div class="menu-item"><strong>Trileçe</strong><span>80₺</span></div>
      <div class="menu-item"><strong>Dondurma</strong><span>50₺</span></div>
      <div class="menu-item"><strong>İrmik Helvası</strong><span>70₺</span></div>
      <div class="menu-item"><strong>Tulumba</strong><span>65₺</span></div>
      <div class="menu-item"><strong>Aşure</strong><span>75₺</span></div>
    </div>

  </div>

  <script>
    function showMenu(menuId) {
      const sections = document.querySelectorAll('.menu-section');
      sections.forEach(section => {
        section.classList.remove('active');
      });
      document.getElementById(menuId).classList.add('active');
    }
  </script>
</body>
</html>
