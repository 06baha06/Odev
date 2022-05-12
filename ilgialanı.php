<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <title>İletişim</title>
    <link rel="stylesheet" href="form.js">
    <script src="form.js"></script>
    <style type="text/css">
        div{
            color: #ff0000;
            float: none;
        }
        h3{
            margin-bottom: -4px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <nav id="Anasayfa" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Hoşgeldiniz</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="hakkımda.html">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="özgeçmiş.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="şehir.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="takım.html">Takımımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ilgialanı.php">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletişim.html">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="giriş.html">Giriş</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);
?>
<p>
    <h3>
        Güncel Döviz Kurları
    </h3>
</p>
<div class="align-middle p-2 mb-0">
    <ul class="align-center">
        <li class="">
            <span>USD</span>
            <span>Fiyat: <?php echo $JSON['USD']['satis']; ?></span>
            <span>Değişim: <?php echo $JSON['USD']['degisim']; ?></span>
        </li>
        <li>
            <span>EUR</span>
            <span>Fiyat: <?php echo $JSON['EUR']['satis']; ?></span>
            <span>Değişim: <?php echo $JSON['EUR']['degisim']; ?></span>
        </li>
        <li>
            <span>GBP</span>
            <span>Fiyat: <?php echo $JSON['GBP']['satis']; ?></span>
            <span>Değişim: <?php echo $JSON['GBP']['degisim']; ?></span>
        </li>
        <li>
            <span>CHF</span>
            <span>Fiyat: <?php echo $JSON['CHF']['satis']; ?></span>
            <span>Değişim: <?php echo $JSON['CHF']['degisim']; ?></span>
        </li>
        <li>
            <span>CAD</span>
            <span>Fiyat: <?php echo $JSON['CAD']['satis']; ?></span>
            <span>Değişim: <?php echo $JSON['CAD']['degisim']; ?></span>
        </li>
     </ul>
</div>
<h3>
    Güncel Kripto Para Değerleri
</h3>
<?php
    $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/kripto.json'), true);
?>
<div class="align-middle p-2 mb-0">
<?php
    $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/kripto.json'), true);
?>
<ul>
    <li>
        <span>Bitcoin</span>
        <span>Fiyat: <?php echo $JSON['BTC']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['BTC']['degisim']; ?></span>
    </li>
    <li>
        <span>Ethereum</span>
        <span>Fiyat: <?php echo $JSON['ETH']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['ETH']['degisim']; ?></span>
    </li>
    <li>
        <span>Ripple</span>
        <span>Fiyat: <?php echo $JSON['XRP']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['XRP']['degisim']; ?></span>
    </li>
    <li>
        <span>Bitcoin Cash</span>
        <span>Fiyat: <?php echo $JSON['BCH']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['BCH']['degisim']; ?></span>
    </li>
    <li>
        <span>Litecoin</span>
        <span>Fiyat: <?php echo $JSON['LTC']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['LTC']['degisim']; ?></span>
    </li>
</ul>
</div>

   


    <footer class="bg-dark text-light text-center fixed-bottom">
        <p class="align-middle p-3 mb-0">
            <span>Tüm Hakları Saklıdır &copy; | 2022</span> <br>
            <span>Designed by <b>Baha Yıldız</b></span>
        </p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>