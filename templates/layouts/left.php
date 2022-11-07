<div class="item col-4 d-none-m">
    <div class="sidebar-detail mt20">

        <div class="header-sidebar">

            <span>DANH MỤC SẢN PHẨM</span>

        </div>
        <div class="body-sidebar p-relative">
            <?php if($dm_sp){ ?>
                <ul class="category__list">
                    <?php
                        foreach($dm_sp as $key => $vdmsp){
                    ?>
                        <li class="category__item">
                            <a href="<?=$vdmsp["type"];?>/<?=$vdmsp["tenkhongdau"];?>" class="category__link"><?=$vdmsp["ten"];?></a>
                        </li>
                    <?php } ?>
                </ul>
           <?php } ?>
        </div>
    </div>
    <div class="sidebar-detail mt20">

        <div class="header-sidebar">

            <span>BÀI VIẾT XEM NHIỀU</span>

        </div>
        <div class="body-sidebar p-relative">
            <?php
                if($bv_tintuc){
                    foreach($bv_tintuc as $key=>$vtt){
            ?>
            <a href="<?=$vtt["type"]?>/<?=$vtt["tenkhongdau"];?>">
                <div class="product__box mt10">
                    <div class="product__box-img">
                        <img src="<?=_upload_baiviet_l.$vtt["photo"];?>" alt="">
                    </div>
                    <div class="product__box-content ">
                        <span class="product-content__title line-2"><?=$vnb["ten"];?></span>
                        <p class="product-content__content line-2 pt10"><i class="fas fa-eye"></i> Lượt xem: <?=$vtt["luotxem"];?></p>
                    </div>
                </div>
            </a>
            <?php }}?>
            <?php
                if($bv_dichvu){
                    foreach($bv_dichvu as $key=>$bvdv){
            ?>
                <a href="<?=$bvdv["type"]?>/<?=$bvdv["tenkhongdau"];?>">
                    <div class="product__box mt10">
                        <div class="product__box-img">
                            <img src="<?=_upload_baiviet_l.$bvdv["photo"];?>" alt="">
                        </div>
                        <div class="product__box-content">
                            <span class="product-content__title line-2"><?=$bvdv["ten"];?></span>
                            <p class="product-content__content line-2 pt10"><i class="fas fa-eye"></i> Lượt xem: <?=$bvdv["luotxem"];?></p>
                        </div>
                    </div>
                </a>
            <?php }}?>
        </div>
    </div>
    <div class="sidebar-detail mt20 mb20">

        <div class="header-sidebar">

            <span>DỊCH VỤ TIÊU BIỂU</span>

        </div>
        <?php
            $nb_right = $db->rawQuery("select id,type,ten_$lang as ten,tenkhongdau_$lang,photo,mota_$lang as mota from #_baiviet where hienthi=1 and noibat=1 and type=?",array("san-pham"));
        ?>
        <div class="body-sidebar p-relative">
            <?php
                if($dichvu_tb){
                    foreach($dichvu_tb as $key=>$vdvtb){
            ?>
            <a href="">
                <div class="product__box">
                    <div class="product__box-img">
                        <img  src="<?=_upload_baiviet_l.$vdvtb["photo"];?>" alt="">
                    </div>
                    <div class="product__box-content">
                        <span class="product-content__title line-2"><?=$vdvtb["ten"];?></span>
                        <p class="product-content__content line-2 pt10"><?=htmlspecialchars_decode($vdvtb["mota"]);?></p>
                    </div>
                </div>
            </a>
            <?php }}?>
        </div>
    </div>
</div>