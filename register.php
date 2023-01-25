<?php require_once "header.php" ?>


<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">

        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h2 class="title-section">Üye Kayit İslmleri</h2>
        <div class="registration-details-area inner-page-padding">


            <?php

            if ($_GET['durum'] == "farklisifre") { ?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
                </div>

            <?php } elseif ($_GET['durum'] == "eksiksifre") { ?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalidir.
                </div>

            <?php } elseif ($_GET['durum'] == "mukerrerkayit") { ?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Bu kullanici daha önce kayit edilmiş.
                </div>

            <?php } elseif ($_GET['durum'] == "basarisiz") { ?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Kayit Yapilamadi Sistem Yöneticisine Danişiniz.
                </div>

            <?php }
            ?>


            <form action="nedmin/netting/kullanici.php" method="POST" id="personal-info-form">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="first-name">Mail Adresiniz *</label>
                            <input type="text" id="first-name" required class="form-control" name="kullanici_mail"
                                placeholder="Mail adresinizi giriniz (Kullanici adiniz olacaktir)">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="first-name">Adiniz *</label>
                            <input type="text" id="first-name" required class="form-control" name="kullanici_ad"
                                placeholder="Adinizi giriniz...">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="last-name">Soyadiniz *</label>
                            <input type="text" id="last-name" required class="form-control" name="kullanici_soyad"
                                placeholder="Soyadinizi giriniz...">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="email">Sifreniz *</label>
                            <input type="password" id="email" required class="form-control" name="kullanici_passwordone"
                                placeholder="Sifrenizi giriniz...">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="phone">Sifreniz Tekrar *</label>
                            <input type="password" id="phone" required class="form-control" name="kullanici_passwordtwo"
                                placeholder="Sifrenizi tekrar giriniz...">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pLace-order">
                            <button class="update-btn disabled" type="submit" name="musterikaydet">Gönder</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Registration Page Area End Here -->


<?php require_once "footer.php" ?>