<!DOCTYPE html>
<html lang="tr">
<head> 
        <meta charset="UTF-8">
        <title>Anasayfa | Balıkesir Büyükşehir Belediyesi</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/6329f6a5b9.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">    
</head>
<body>
         <section id="menu">
            <div id="logo">Balıkesir Büyükşehir Belediyesi</div>
            <nav> 
                <a href="AnaSayfa.php">AnaSayfa</a>
                <a href="Kurumsal.php">Kurumsal</a>
                <a href="Kent Portalı.php">Kent Portalı</a>
                <a href="Eğitimlerimiz.php">Eğitimlerimiz</a>
                
                <input type="button" onClick="location.href='panelgiris.php'" value="Admin Girişi" />
</nav>
         </section>
         

         <section id="anasayfa">
             <div id="black">
             </div>

        
             <div id="icerik">
                <h2 style="color:DarkWhite;">Balıkesir Büyükşehir Belediyesi</h2>
                
                <hr width=410 align=left>
                <head>
                <style>
        body {
         font-family:"Arial, Helvetica, sans-serif";
        }
        p.b  {
        font-style: italic;
        }

        </style>
        </head>
        <body>
        <p style ="color:DarkWhite;"><i><b>Tarihin,doğanın ve kültürün buluştuğu Şehir</i></b></p>
        </body>
        </div>
        </section>
        

         <section id="hakkimizda"> 

                <h3>Biz Kimiz?</h3>
                <div class="container">
                        <div id="sol">
                                <h5 id="h5sol">
                                Kuva-yı Milliye bilincinin beslediği
                                <br> milli değerleriyle,</br>
                                Dünya şehri Balıkesir…
                                </h5>
                        </div>
                        <div id="sag">
                                <span>B</span>
                                <p id="psag">alıkesirlinin temiz, huzurlu, güvenli bir hayat sürmesi için, her bir ilçenin ihtiyaçları özelinde, şehrin sahibi hemşehrilerimizin ve bütün paydaşların katılımıyla, tüm şehri Büyükşehir imkânlarıyla buluşturmak ve Balıkesir’in geleneksel değerlerini çağdaş hizmetlerle geliştirmek azmiyle, kanunların verdiği görev ve yetkiler çerçevesinde yılmadan çalışmak.</p>
                        </div>

                        <img src="img/gorsel2.jpg" alt=""
                        class="img-fluid mt100">
                        <p id="pson">Temiz deniz suyunun kumlu plajlara kavuştuğu, parlak yeşil renkli zeytinliklerle sarılmış koyları, irili ufaklı adaları, dünyada oksijenin en çok bulunduğu Homeros'un destanındaki İda Dağı, insanlara binlerce yıldır şifa dağıtan termal kaynakları ile Balıkesir, ülkede turizmin ilk başladığı yerlerdendir.</p>

                    
                </div>



         </section>
         <section id="egitimler">
                <div class="container">

                        <h3>Eğitimler</h3>

                        <div>   

                                <div class="card">
                                <img src ="img/gorsel3.jpeg" alt=""
                                class="img-fluid">
                                <h5 class="baslikcard">Arıcılık</h5>
                                <p class="cardp"></p>
                                </div>
                                
                                <div class="card">
                                        <img src ="img/gorsel4.jpg" alt=""
                                        class="img-fluid">
                                        <h5 class="baslikcard">Zeytin Yetiştiriciliği</h5>
                                        <p class="cardp"></p>
                                        </div>

                                        <div class="card">
                                                <img src ="img/gorsel5.jpg" alt=""
                                                class="img-fluid">
                                                <h5 class="baslikcard">Bitki Yetiştiriciliği</h5>
                                                <p class="cardp"></p>
                                         </div>

                                                
                                
                                 
              
                        </div>
                </div>
         </section>

          <section id="Balıkesirliyiz">   
                <div class="container">
                        <h3 id="balıkesir3">Balıkesir'de Turizm</h3>
                        <div id="son">
                        <span>B</span>
                        <p id="pson"> alıkesir, Marmara ve Ege’de uzanan kıyıları, sahip olduğu jeotermal kaynakları, biyolojik çeşitliliği ve tarihsel atmosferi bir arada yaşatan güçlü bir turizm profili çizmektedir.<br> Kıyı turizminden termal turizme, kültür turizminden doğa turizmine çok çeşitli turizm faaliyetlerine ev sahipliği yapan il, yıl boyunca turistlerle buluşmaktadır.</br>
                       
 </div>
                        <img src="img/turizm.jpg" alt="">
                        <h4 class="balıkesirad"></h4> 
                        <p class="balıkesirr"> 

                        

                </div>

                

          </section>
          <section id="iletisim">
                <div class="container"> 
                        <h3 id="h3iletisim">İletişim</h3>
                        <form action="index.php" method="post">
                        <div id="iletisimopak">
                                <div id="formgroup">
                                        <div id="solform">
                                                <input type="text" 
                                                name="isim"
                                                placeholder="Ad Soyad" required class="form-control">
                                                <input type="text" 
                                                name="tel" placeholder="Telefon Numarası" required class="form-control">
                                        </div>
                                        <div id="sagform">
                                                <input type="email" 
                                                name="mail"
                                                placeholder="Email Adresiniz" required class="form-control">
                                                <input type="text" 
                                                name="konu" placeholder="Konu Başlığı" required class="form-control">
                                        </div>
                                        <textarea name="mesaj"
                                        id="" cols="30"
                                        placeholder="Mesaj Giriniz" rows="10" required
                                        class="form-control"></textarea>

                                        <input type="submit"
                                        value="Gönder">
                                         </div>
                                        
                                <div id="adres">
                                       <h4 id="adresbaslik"> Adres :</h4>
                                       <p class ="adresp">Eski Kuyumcular Mah.</p>
                                       <p class="adresp">Mekik sk. No:25B</p>
                                       <p class="adresp">Merkez/Balıkesir</p> 
                                       <p class="adresp">Telefon :444 4 010</p>
                                       <p class="adresp">E-mail :alobelediye@balikesir.bel.tr</p>


                                </div>
                                
                        </div>
                        </form>
                        <footer>

                                <div id="copyright">
                                        2023-Tüm Hakları Balıkesir Büyükşehir Belediyesi tarafından Saklıdır.
                                        
                                </div>
                                <div id="socialfooter">
                                        <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope social"></i></a>  
                                        <a href="#"><i class="fa-solid fa-phone social"></i></a>
                                </div>

                                <a href="#menu"><i class="fa-solid fa-up"></i></a>

                        </footer>


                </div>


          </section>





</body>
</html>


<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
   $adsoyad=$_POST["isim"];
   $telefon=$_POST["tel"];
   $email=$_POST["mail"];
   $konu=$_POST["konu"];
   $mesaj=$_POST["mesaj"];

   $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";


   if($baglan->query($ekle)===TRUE)
   {
        echo "<script>alert('Mesajınız Gönderildi.')</script>";
   }
        else
        {
                echo "<script>alert('Mesajınız Gönderilmediiii!!! eyvah.')</script>";
        }

}


?>