<div class="fox-sidebar">
    <div class="sidebar-item">
        <div class="sidebar-item-inner">
            <h3 class="sidebar-item-title">Kategoriler</h3>
            <ul class="sidebar-categories-list">

                <?php

                //Belirli veriyi seçme işlemi
                $kategorisor = $db->prepare("SELECT * FROM kategori where kategori_durum=:durum order by kategori_sira ASC");
                $kategorisor->execute(
                    array(
                        "durum" => 1
                    )
                );
                while ($kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                    <li><a href="#">
                            <?php echo $kategoricek["kategori_ad"] ?><span>(150)</span>
                        </a></li>

                <?php } ?>

            </ul>
        </div>
    </div>
    <div class="sidebar-item">
        <div class="sidebar-item-inner">
            <h3 class="sidebar-item-title">Fiyat Araligi</h3>
            <div id="price-range-wrapper" class="price-range-wrapper">
                <div id="price-range-filter"></div>
                <div class="price-range-select">
                    <div class="price-range" id="price-range-min"></div>
                    <div class="price-range" id="price-range-max"></div>
                </div>
                <button class="sidebar-full-width-btn disabled" type="submit" value="Login"><i class="fa fa-search"
                        aria-hidden="true"></i>Search</button>
            </div>
        </div>
    </div>

</div>