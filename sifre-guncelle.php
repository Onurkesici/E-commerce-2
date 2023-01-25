<?php
require_once "header.php";

islemkontrol();
?>


<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">

        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Settings Page Start Here -->
<div class="settings-page-area bg-secondary section-space-bottom">
    <div class="container">
        <div class="row settings-wrapper">

            <?php require_once "hesap-sidebar.php" ?>

            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">




                <form action="nedmin/netting/kullanici.php" method="post" class="form-horizontal"
                    id="personal-info-form">
                    <div class="settings-details tab-content">
                        <div class="tab-pane fade active in" id="Personal">
                            <h2 class="title-section">Sifre Guncelleme</h2>
                            <div class="personal-info inner-page-padding">


                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Eski Sifre</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="first-name" name="kullanici_eskipassword"
                                            placeholder="Eski Sifrenizi Giriniz." type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Sifreniz</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="first-name" name="kullanici_passwordone"
                                            placeholder="Sifrenizi Giriniz." type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Sifreniz Tekrar</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="first-name" name="kullanici_passwordtwo"
                                            placeholder="Sifrenizi Tekrar Giriniz." type="password">
                                    </div>
                                </div>





                                <div align="right" class="form-group">
                                    <div class="col-sm-12">
                                        <button class="update-btn" name="musterisifreguncelle" id="login-update">Sifre
                                            Guncelle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <?php

                        if ($_GET['durum'] == "hata") { ?>

                            <div class="alert alert-danger">
                                <strong>Hata!</strong> Islem basarisiz.
                            </div>

                        <?php } elseif ($_GET['durum'] == "ok") { ?>

                            <div class="alert alert-success">
                                <strong>Bilgi!</strong> Basariyla guncelleme yapildi.
                            </div>

                        <?php } elseif ($_GET['durum'] == "eskisifrehata") { ?>

                            <div class="alert alert-danger">
                                <strong>Bilgi!</strong> Eski sifreniz hatali.
                            </div>

                        <?php } elseif ($_GET['durum'] == "sifreleruyusmuyor") { ?>

                            <div class="alert alert-danger">
                                <strong>Bilgi!</strong> Sifreler uyusmuyor.
                            </div>

                        <?php } elseif ($_GET['durum'] == "eksiksifre") { ?>

                            <div class="alert alert-danger">
                                <strong>Bilgi!</strong> Sifreniz en az 6 karakter olmali!
                            </div>

                        <?php } ?>


                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Settings Page End Here -->


<?php require_once "footer.php" ?>