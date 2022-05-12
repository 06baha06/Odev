<section class="p-5 text-center iletisim">
    <div class="container">


       <?php 
            if (isset($_POST['ad'], $_POST['şifre'] )
            && ($_POST['ad']=='b211210049@sakarya.edu.tr')
            && ($_POST['şifre']=='b211210049')) {
            echo "Hoşgeldiniz ".$_POST['ad'] ;
            
            }else{
            echo"Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın.<br>";
            
            }
            echo "<p> <a href='giris.html'>&lt;GERİ DÖN&gt;</a></p> ";
       ?>
    </div>


</section>