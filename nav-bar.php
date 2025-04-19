<div id="nav-bar">
    <a href="ana_sayfa.php"><img  src="..\resimler/web_logo.png" alt="logo"></a>
    <a href="ana_sayfa.php" class="a">Ana Sayfa</a>
    <a href="kullanıcı_girişi.php" class="a">Kullanıcı Girişi</a>
    <a href="bilgi_formu.php" class="a">Kayıt Ol</a>
</div>

<style>
    #nav-bar {
        display: flex;
        justify-content: space-around; /* Menü öğelerini eşit dağıt */
        align-items: center;
        background-color: black;
        padding: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    

    #nav-bar a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        padding: 10px;
        
    }

    #nav-bar a:hover {
        color: red;
        background-color: lightblue;
    }

    #nav-bar img {
        width: 80px; /* Logo boyutu */
        
    }
    

    @media (max-width: 768px) {
        #nav-bar {
            flex-direction: column;
        }
        #nav-bar img {
            width: 50px; /* Küçük ekranlarda logo boyutunu küçült */
        }
    }
</style>
