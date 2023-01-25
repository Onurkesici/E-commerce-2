<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    <ul class="settings-title">
        <li class="active"><a href="javascript:void(0)" ><b>Uye Islemleri</b></a></li>
        <?php
        if ($kullanicicek["kullanici_magaza"] != 2) { ?>
        <li><a href="magaza-basvuru" >Magaza Basvuru</a></li>
        <?php } ?>
        <li><a href="hesabim" >Siparislerim</a></li>
        <li><a href="hesabim" >Hesap Bilgilerim</a></li>
        <li><a href="adres-bilgileri" >Adres Bilgileri</a></li>
        <li><a href="profil-resim-guncelle" >Profil Resmi Guncelle</a></li>
        <li><a href="sifre-guncelle" >Sifre Guncelle</a></li>
    </ul>


    <?php
        if ($kullanicicek["kullanici_magaza"] == 2) { ?>
    <br>

    <ul class="settings-title">

        <li class="active"><a href="javascript:void(0)" ><b>Magaza Islemleri</b></a></li>
        <li><a href="urun-ekle" >Urun Ekle</a></li>
        <li><a href="hesabim" >Urunlerim</a></li>
        <li><a href="adres-bilgileri" >Yeni Siparisler</a></li>
        <li><a href="sifre-guncelle" >Tamamlanan Siparisler</a></li>
        <li><a href="sifre-guncelle" >Mesajlar</a></li>
        <li><a href="sifre-guncelle" >Ayarlar</a></li>
    </ul>

    <?php } ?>
</div>