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




                <form action="nedmin/netting/adminislem.php" method="post" enctype="multipart/form-data"
                    class="form-horizontal" id="personal-info-form">

                    <div class="settings-details tab-content">
                        <div class="tab-pane fade active in" id="Personal">
                            <h2 class="title-section">Urun Ekleme</h2>
                            <div class="personal-info inner-page-padding">



                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Fotograf</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="first-name" name="urunfoto_resimyol" required
                                            type="file">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <div class="custom-select">
                                            <select name="kategori_id" class='select2'>


                                                <?php

                                                //Belirli veriyi seçme işlemi
                                                $kategorisor = $db->prepare("SELECT * FROM kategori order by kategori_sira ASC");
                                                $kategorisor->execute();

                                                while ($kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC)) { ?>

                                                    <option value="<?php echo $kategoricek["kategori_id"] ?>"><?php echo $kategoricek["kategori_ad"] ?></option>

                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Adi</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required id="first-name" name="urun_ad"
                                            placeholder="Urun adi..." type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Aciklama</label>
                                    <div class="col-sm-9">
                                        <textarea class="ckeditor" id="editor1" name="urun_detay"
                                            placeholder="Urun aciklamasi..."></textarea>
                                    </div>
                                </div>

                                <script type="text/javascript">

                                    CKEDITOR.replace('editor1',

                                        {

                                            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',

                                            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',

                                            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',

                                            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                                            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                                            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                                            forcePasteAsPlainText: true

                                        }

                                    );

                                </script>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Fiyat</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required id="first-name" name="urun_fiyat"
                                            placeholder="Urun fiyat..." type="text">
                                    </div>
                                </div>


                                <div align="right" class="form-group">
                                    <div class="col-sm-12">
                                        <button class="update-btn" name="magazaurunekle" id="login-update">Urun
                                            Ekle</button>
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

                        <?php } ?>



                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Settings Page End Here -->


<?php require_once "footer.php" ?>