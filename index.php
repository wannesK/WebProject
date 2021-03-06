<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://kit.fontawesome.com/77ed0515d6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
    
    <title>Anasayfa | WannesGames</title>
</head>
<body>
    <section id="menu"> 
        <div id="logo">Wannes Games</div>
        <nav>
            <a href=""><i class="fas fa-home icon"></i>Anasayfa</a>
            <a href="#hakkimizda"><i class="fas fa-info icon"></i>Hakkımızda</a>
            <a href="#oyunlar"><i class="fas fa-mobile icon"></i>Oyunlarımız</a>
            <a href="#ekip"><i class="fas fa-users icon"></i>Ekip</a>
            <a href="#iletisim"><i class="fas fa-map-pin icon"></i>İletişim</a>
        </nav>
    </section>

    <section id="anasayfa">
        <div id="black">

        </div>
        <div id="icerik">
            <h2> Biz Kimiz ? </h2>
            <hr width ="300" align =left>
            <p> Unity oyun motoru ile oyun geliştiriyoruz! </p>
            <p> Eğer sende oyun yaptırmak istersen </p>   
            <p> Bizimle hemen iletişime geç! </p> 
        </div>
    </section>

    <section id="hakkimizda">
        <h3> Hakkımızda </h3>

        <div class="container">
            <div id="sol">
                <h5 id="h5sol"> Oyunlarla hayata renk katıyoruz!
                </h5>
            </div>

            <div id="sag">
                <span>M</span>
                <p id="psag">aceramız 2020 yılında, benzersiz mobil oyun deneyimleri yaratma hayali ile başladı. 
                    Edindiğimiz tecrübeler ve veriye dayalı yaklaşımımızla geliştirdiğimiz oyunları milyonlarca insana ulaştırmaya devam ediyoruz.                    
                </p>
            </div>

            <img src="images/about.jpg" alt=""
            class="img-fluid mt100">
            <p id="pson">
                Hayallerinin peşinden koşmak için, genç ve dinamik ekibimizin bir parçası olmak ister misin?
                Bizimle hemen iletişime geç !
            </p>
        </div>
    </section>

    <section id="oyunlar">
        <div class="container">
            <h3>Oyunlarımız</h3>

            <div>
                <div class="card">
                    <img src="images/LittleKnight.png" alt="" class="img-fluid">
                    <h5 class="baslikcard">Little Knight</h5>
                    <p class="cardp">Platform tabanlı macera oyunu olan little knight yayınladığım ilk oyun.
                    </p>
                </div>              
            </div>

        </div>
    </section>

    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Ekip</h3>

            <div class="sutun-sol-sag">
                <img src="images/profil.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Ad Soyad</h4>

                <p class="ekipp">Kişi açıklaması.               
                </p>

                <div class="ekip-icon">
                    <a href="#"><i class="fab fa-linkedin social"></i></a>  
                    <a href="#"><i class="fab fa-instagram social"></i></a>
                    <a href="#"><i class="fab fa-twitter-square social"></i></a>        
                </div>
            </div>

            <div class="sutun">
                <img src="images/profil.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Yasin Kağan Kaya</h4>

                <p class="ekipp">Kişi açıklaması.                 
                </p>

                <div class="ekip-icon">
                    <a href="#"><i class="fab fa-linkedin social"></i></a>  
                    <a href="#"><i class="fab fa-instagram social"></i></a>
                    <a href="#"><i class="fab fa-twitter-square social"></i></a>        
                </div>
            </div>

            <div class="sutun-sol-sag">
                <img src="images/profil.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Ad Soyad</h4>

                <p class="ekipp">Kişi açıklaması.                
                </p>

                <div class="ekip-icon">
                    <a href="#"><i class="fab fa-linkedin social"></i></a>  
                    <a href="#"><i class="fab fa-instagram social"></i></a>
                    <a href="#"><i class="fab fa-twitter-square social"></i></a>        
                </div>
            </div>
            
        </div>
    </section>

    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>
            <form action="index.php" method="post">
            <div id="iletisimopak">
                <div id="formgrup"> 
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="formkontrol">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="formkontrol">
                    </div>
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="Email Adres" required class="formkontrol">
                        <input type="text" name="konu" placeholder="Konu Başlıgı" required class="formkontrol">
                    </div>
                    
                    <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz"  rows="10" required class="formkontrol"></textarea>

                    <input type="submit" value="Gönder">
                </div>

                <div id="adres">
                    <h4 id="adresbaslik">Adres : </h4>
                    <p class="adresp">Topçu Mahallesi</p>
                    <p class="adresp">1558.cadde 1559.sokak</p>
                    <p class="adresp">Ankara Etimesgut Elvankent</p>
                    <p class="adresp">Email : wannes.kagan@gmail.com</p>
                </div>

                </div>
            </div>
            </form>

            <footer>
                <div id="copyright">2021 | Tüm hakları saklıdır                    
                </div>
                <div id="socialfooter">
                    <a href="#"><i class="fab fa-linkedin social"></i></a>  
                    <a href="#"><i class="fab fa-instagram social"></i></a>
                    <a href="#"><i class="fab fa-twitter-square social"></i></a>
                </div>

                <a href="#menu"><i class="fas fa-angle-up" id="up"></i></a>

            </footer>

        </div>
    </section>
</body>
</html>

<?php

include("baglanti.php");

if (isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"])) 
{
    $adsoyad = $_POST["isim"];
    $telefon = $_POST["tel"];
    $email = $_POST["mail"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    $ekle = "INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."', '".$telefon."', '".$email."', '".$konu."', '".$mesaj."')";

    if ($baglan-> query($ekle) === TRUE) 
    {
        echo "<script> alert('Mesaj Başarılı Şekilde İletildi !')</script>";
    }
}

?>