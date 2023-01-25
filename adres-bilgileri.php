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
                            <h2 class="title-section">Adres Bilgilerimi Duzenle</h2>
                            <div class="personal-info inner-page-padding">


                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Bireysel/Kurumsal </label>
                                    <div class="col-sm-9">
                                        <div class="custom-select">
                                            <select name="kullanici_tip" id="kullanici_tip" class='select2'>

                                                <option <?php
                                                if ($kullanicicek["kullanici_tip"] == "PERSONAL") {
                                                    echo "selected";
                                                }
                                                ?> value="PERSONAL">Bireysel</option>

                                                <option <?php
                                                if ($kullanicicek["kullanici_tip"] == "PRIVATE_COMPANY") {
                                                    echo "selected";
                                                }
                                                ?> value="PRIVATE_COMPANY">Kurumsal</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div id="tc">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">T.C</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="first-name" name="kullanici_tc"
                                                value="<?php echo $kullanicicek["kullanici_tc"] ?>" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div id="kurumsal">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Firma Unvan</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="first-name" name="kullanici_unvan"
                                                value="<?php echo $kullanicicek["kullanici_unvan"] ?>" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Firma V.Dairesi</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="first-name" name="kullanici_vdaire"
                                                value="<?php echo $kullanicicek["kullanici_vdaire"] ?>" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Firma V.No</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="first-name" name="kullanici_vno"
                                                value="<?php echo $kullanicicek["kullanici_vno"] ?>" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Acik Adres</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required id="first-name" name="kullanici_adres"
                                            value="<?php echo $kullanicicek["kullanici_adres"] ?>" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Il</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required id="first-name" name="kullanici_il"
                                            value="<?php echo $kullanicicek["kullanici_il"] ?>" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Ilce</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required id="first-name" name="kullanici_ilce"
                                            value="<?php echo $kullanicicek["kullanici_ilce"] ?>" type="text">
                                    </div>
                                </div>



                                <div align="right" class="form-group">
                                    <div class="col-sm-12">
                                        <button class="update-btn" name="musteriadresguncelle"
                                            id="login-update">Guncelle</button>
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

                        <?php } ?>


                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Settings Page End Here -->


<?php require_once "footer.php" ?>

<script type="text/javascript">


    $(document).ready(function () {

        $("#kullanici_tip").change(function () {

            var tip = $("#kullanici_tip").val();

            if (tip == "PERSONAL") {

                $("#kurumsal").hide();

                $("#tc").show();

            } else if (tip == "PRIVATE_COMPANY") {

                $("#kurumsal").show();

                $("#tc").hide();
            }

        }).change();

    });
</script>
