<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AMEAN PHP - Nükleer Hesaplamalar </title>

    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
  <header class="main-header">
    <div class="header-wrapper">
      <div class="main-logo">Nükleer</div>
      <nav>
        <ul class="main-menu">
          <li><a href="#section-2">Hakkımızda</a></li>
          <li><a href="#section-5">Hizmetlerimiz</a></li>
          <li><a href="#section-7">Hesaplamalar</a></li>
          <li><a href="giris_yap.php">Giriş</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Merhaba Bizi Keşfedin</h2>
            <h1>Nükleer Santral</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="giris_yap.php">Hesaplamalara Başla</a></div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Ne Kadar Enerji Üretir?</h2>
            <h1>Şimdi<br> enerji miktarını hesapla</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="giris_yap.php">Hesaplamalara Başla</a></div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span>01</span> Stok</label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span>02</span> Enerji Hesaplama</label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span>03</span> Santral Geçmişi</label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span>04</span> Santral Bilgisi</label>
        </div>
      </nav>
    </div>
  </section>
</body>

</html>