<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Tıklanabilir Dünya Haritası</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>
    #map {
      height: 100vh;
      width: 100%;
    }
  </style>
</head>
<body>

<div id="map"></div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<!-- GeoJSON Dünya Ülkeleri -->
<script src="https://unpkg.com/world-atlas/countries-50m.json"></script>
<script src="https://unpkg.com/topojson-client@3"></script>

<script>
  // Harita oluştur
  const map = L.map('map').setView([20, 0], 2);

  // Tile Layer (arka plan haritası)
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 10,
    attribution: '© OpenStreetMap'
  }).addTo(map);

  // Ülke bağlantılarını burada tanımlayabilirsin
  const countryLinks = {
  "Turkey": "https://www.trtizle.com/",
  "Germany": "https://www.ardmediathek.de/",
  "France": "https://www.france.tv/",
  "United Kingdom": "https://www.bbc.co.uk/iplayer", // UK = BBC iPlayer (VPN gerekebilir)
  "United States of America": "https://www.pbs.org/livestream/", // PBS kanalı (ücretsiz)
  "Italy": "https://www.raiplay.it/",
  "Spain": "https://www.rtve.es/play/",
  "Canada": "https://gem.cbc.ca/",
  "Japan": "https://www.nhk.or.jp/",
  "Russia": "https://smotrim.ru/", // VGTRK – devlet medya servisi
  "Brazil": "https://globoplay.globo.com/", // Ücretsiz + ücretli karışık
  "Netherlands": "https://www.npostart.nl/live",
  "Sweden": "https://www.svtplay.se/",
  "Norway": "https://tv.nrk.no/",
  "India": "https://www.ddfree.dth.gov.in/",
  "Pakistan": "https://ptv.com.pk/",
  "Egypt": "https://www.ontvtime.com/live/egypt-tv-live-streaming", // 3rd party aggregator
  "Indonesia": "https://www.rctiplus.com/tv/rtv",
  // Asya
  "Japan": "https://www.nhk.or.jp/",
  "South Korea": "https://www.wavve.com/", // SBS, KBS, MBC içerikleri (VPN gerekebilir)
  "China": "https://tv.cctv.com/live/", // CCTV canlı yayın
  "India": "https://www.ddfree.dth.gov.in/", // Doordarshan – devlet yayını
  "Pakistan": "https://ptv.com.pk/",
  "Indonesia": "https://www.rctiplus.com/tv/rtv",
  "Philippines": "https://www.gmanetwork.com/gmanews/tv/live", // GMA canlı yayını

};


  // Ülke isimlerini alıp GeoJSON'a çevir
  fetch("https://unpkg.com/world-atlas/countries-50m.json")
    .then(res => res.json())
    .then(worldData => {
      const countries = topojson.feature(worldData, worldData.objects.countries);

      L.geoJSON(countries, {
        onEachFeature: function (feature, layer) {
          const name = feature.properties.name;
          layer.on('click', () => {
            const link = countryLinks[name];
            if (link) {
              window.location.href = link;
            } else {
              alert(`Bağlantı tanımlı değil: ${name}`);
            }
          });
          layer.bindTooltip(name, {sticky: true});
        },
        style: {
          color: "#333",
          weight: 1,
          fillColor: "#cce5ff",
          fillOpacity: 0.6
        }
      }).addTo(map);
    });
</script>

</body>
</html>
