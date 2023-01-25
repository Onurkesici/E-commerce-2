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
        <h2 class="title-section">Üye Giris İslmleri</h2>
        <div class="registration-details-area inner-page-padding">



            <?php

            if ($_GET['durum'] == "hata") { ?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Hatali giris.
                </div>

            <?php } elseif ($_GET['durum'] == "exit") { ?>

                <div class="alert alert-success">
                    <strong>Bilgi!</strong> Basariyla cikis yapildi.
                </div>

            <?php } ?>


            <form action="nedmin/netting/kullanici.php" method="POST" id="personal-info-form">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="email">Mail Adresiniz *</label>
                            <input type="text" id="email" required class="form-control" name="kullanici_mail"
                                placeholder="Mail adresinizi giriniz...">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="phone">Sifreniz *</label>
                            <input type="password" id="phone" required class="form-control" name="kullanici_password"
                                placeholder="Sifrenizi giriniz...">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pLace-order">
                            <button class="update-btn disabled" type="submit" name="musterigiris">Gönder</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Registration Page Area End Here -->


<?php require_once "footer.php" ?>