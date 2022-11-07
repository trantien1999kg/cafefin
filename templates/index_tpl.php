<?php

    $introduces = $func->AllDataPhoto("ten_$lang as ten,mota_$lang as mota,",'intro-top','limit 0,2','array');                              // Lấy toàn bộ thông tin về dịch vụ giới thiệu

    $whys = $func->AllDataPhoto("ten_$lang as ten,mota_$lang as mota,",'vi-sao','limit 0,5','array');                                       // Lấy toàn bộ thông tin vì sao

    $bg_bangmamau = $func->OneDataPhoto(null,'bg-bangmamau',null,'object');                                                                 // Background bảng mã màu
    
    if($deviceType=="computer"){

        $banner = $func->OneDataPhoto("id,mota_$lang as mota,link_$lang as link,",'banner',null,'object');                                      // Banner giữa trang

    }else{
        
        $banner = $func->OneDataPhoto("id,mota_$lang as mota,link_$lang as link,",'banner-mobile',null,'object');                                      // Banner giữa trang
    }
    
    $services = $func->AllData("id,id_list,",'dich-vu',' and noibat=1','','array');                                                         // Lấy toàn bộ dịch vụ

    $tintuc = $func->AllData('id,ngaytao,','tin-tuc',' and noibat=1',null,'array');                                                         // Lấy toàn bộ tin tức

    $bg_tintuc = $func->OneDataPhoto(null,'bg-tintuc',null,'object');                                                                       // Bg tin tức

    $baogia = $func->AllData("id,ngaytao,motaindex_$lang as motaindex,id_list,",'bao-gia',' and noibat=1',null,'array');                    // Lấy toàn bộ bảng giá

    $about=$db->rawQueryOne("select id , ten_$lang as ten , ten2_$lang as ten2, mota_$lang as mota,photo , type from #_info where type=? limit 0,1",array('gioi-thieu'));    // Lấy thông tin giới thiệu

    $seoGT = $seo->getSeoDB($about["id"],'info','capnhat',$about["type"]);

    $colorBoard = $func->AllDataList('id,','bang-mau',' and noibat=1',"",'array');                                                          // Lấy toàn bộ danh mục bảng màu
    
    $introTop = $func->AllDataPhoto("ten_$lang as ten,number,",'introTop','limit 0,5','array');                // Lấy toàn bộ thông số giới thiệu
?>

<section class="introtop pt20 pb20"
    style="background:url('<?=_upload_hinhanh_l.$bg_intro["photo"]?>') no-repeat center center/cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 item grid-intro fadeInUp wow" data-wow-delay="0.3s">
                <?php for($i=0;$i<count($introTop);$i++){ ?>

                <div class="box_intro">
                    <span class="wrapper-introduces__boxbottom-detail-numb flex-cl-1">+<span
                            id="count<?=$i?>">0</span></span>
                    <div class="title_intro">
                        <?=$introTop[$i]["ten"]?>
                    </div>
                </div>


                <script>
                var mydiv<?=$i?> = document.getElementById("count<?=$i?>");

                var timeCurrent<?=$i?> = <?=$introTop[$i]["number"]?>;

                var checkTime<?=$i?> = 0;

                if (timeCurrent<?=$i?> < 50) {

                    checkTime<?=$i?> = 100;

                } else {

                    checkTime<?=$i?> = 20;

                }
                var time<?=$i?> = setInterval(getcounter, checkTime<?=$i?>);

                function getcounter() {
                    if (mydiv<?=$i?>.textContent >= timeCurrent<?=$i?>) {
                        clearInterval(time<?=$i?>);
                    } else {
                        mydiv<?=$i?>.textContent++;
                    }
                }
                </script>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<section class="energy-intro fadeInLeft wow" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

    <div class="grid wide">

        <div class="row">

            <div class="col-12 item grid-gt">

                <div class="col-12 img_left_intro fadeInLeft wow" data-wow-delay="0.2s">
                    <a href="" title="<?= $func->getCom($about["ten"])?>" class="d-block ratio-img" img-width="580"
                        img-height="450" element-area="header">
                        <img src="./assets/images/loading_image.svg" data-src="<?=_upload_hinhanh_l.$about['photo']?>"
                            class="logo-pc ratio-img__content img-scale" alt="<?=$about["ten"]?>" />
                    </a>
                </div>
                <div class="col-12 intro_right fadeInRight wow" data-wow-delay="0.2s">

                    <div class="box_title_desc_intro">
                        <div class="box_title_intro">
                            <span class="title2_intro"><?=$about["ten2"]?></span><?=$about["ten"]?>
                        </div>
                    </div>
                    <div class="box_desc_intro">
                        <?=  htmlspecialchars_decode($about["mota"])?>
                    </div>

                    <div class="box_links_slider">


                        <div class="boxslider_details-btntag">

                            <a href="capacity-profile" class="changeBackground"><?=_oficescoffee?></a>

                        </div>





                        <div class="boxintro_details-btn">

                            <a href="gioi-thieu" class="changeBackground"><?=_xemthem?></a>

                        </div>


                    </div>
                </div>



            </div>

        </div>

    </div>

    </div>

</section>

<section class="product pt35 pb100"
    style="background:url('<?= _upload_hinhanh_l.$bg_sanpham['photo']?>')no-repeat fixed center/cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="box_title_desc_product col-7 mb50 fadeInUp wow" data-wow-delay="0.3s">
                    <div class="box_title_product">
                        <div class="box_title1_product">
                            <?=$seopro['title_'.$seolang]?>
                        </div>
                    </div>
                    <div class="box_desc_product">
                        <?=htmlspecialchars_decode($seopro['mota_'.$seolang])?>
                    </div>
                </div>
                <div class="col-12 box_cate_product mb20 mt40 fadeInUp wow" data-wow-delay="0.3s">
                    <span class="tab_cartegory show js-tab" data-target="#category0"><?=_all?></span>
                    <?php foreach ($sanpham_c1 as $k => $v) {$seoDB = $seo->getSeoDB($v['id'],'baiviet','man_list',$v["type"]);?>

                    <span class="tab_cartegory <?= $v['tenkhongdau']?> js-tab"
                        data-target="#category<?= $k +1?>"><?=$v["ten"]?></span>

                    <?php } ?>
                </div>
                <div class="col-12" id="none_product">
                    <div class="grid_product col-12 show display-n box-tab" id="category0">
                        <?php foreach ($sanpham as $k => $v) {?>
                        <div class="col-12 box_product fadeInUp wow" data-wow-delay="<?= $k * 0.1?>s">
                            <div class="box_img_product">
                                <?=$func->addHrefImg( $func->getCom($v["type"]).'/'.$v["tenkhongdau"],'resize1/100x142/1/'._upload_baiviet_l.$v["photo"],$v["ten"],100,142); ?>
                                <div class="link_to_cart _add_to_cart" data-id="<?=$v['id']?>"><?=_themvaogio?></div>

                            </div>
                            <div class="box_title_price_product">
                                <div class="box_title_product">
                                    <?=$v["ten"]?>
                                </div>
                                <div class="box_price_product">
                                    <span class="price">
                                        <?php if ($v["giacu"]!=0) {?>
                                        <del>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"></span>
                                                <?=($v["giacu"]!=0) ? $func->changeMoney($v["giacu"],$lang):'';?>
                                            </span>
                                        </del>
                                        <?php } ?>
                                        <ins>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"></span>
                                                <?=($v["mucgia"]!=0) ? $func->changeMoney($v["mucgia"],$lang):'Liên hệ';?>
                                            </span>
                                        </ins>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <?php }?>
                    </div>
                </div>
                <?php if(count($cate1_pro)>0){?>

                <?php foreach($cate1_pro as $k1 => $value){
                $pro_cate = $db->rawQuery("select id, ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,mota_$lang as mota,mucgia,giacu,photo,type from #_baiviet where hienthi=1 and id_list=? and type=? order by stt asc,id desc limit 0,4 ",array($value['id'],'san-pham'));
                ?>
                <?php if(count($pro_cate)>0){?>
                <div class="col-12 grid_product box-tab display-n" id="category<?= $k1 +1?>">
                    <?php foreach ($pro_cate as $k => $v) {?>
                    <div class="col-12 box_product fadeInUp wow" data-wow-delay="<?= $k * 0.1?>s">
                        <div class="box_img_product">
                            <?=$func->addHrefImg( $func->getCom($v["type"]).'/'.$v["tenkhongdau"],_upload_baiviet_l.$v["photo"],$v["ten"],100,142); ?>
                            <div class="link_to_cart _add_to_cart" data-id="<?=$v['id']?>"><?=_themvaogio?></div>

                        </div>
                        <div class="box_title_price_product">
                            <div class="box_title_product">
                                <?=$v["ten"]?>
                            </div>
                            <div class="box_price_product">
                                <span class="price">
                                    <?php if ($v["giacu"]!=0) {?>
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span>
                                            <?=($v["giacu"]!=0) ? $func->changeMoney($v["giacu"],$lang):'';?>
                                        </span>
                                    </del>
                                    <?php } ?>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span>
                                            <?=($v["mucgia"]!=0) ? $func->changeMoney($v["mucgia"],$lang):'Liên hệ';?>
                                        </span>
                                    </ins>
                                </span>
                            </div>
                        </div>
                    </div>
                    <script>
                    $('div.tab_cartegory').click(function() {

                        if (!$(".js_none").hasClass('d-none')) {

                            $(".js_none").removeClass('d-none');
                            $(".js_none").addClass('d-none');



                        } else {


                            $(".js_none").addClass('d-none');


                        }

                    });
                    </script>
                    <?php }?>
                </div>
                <?php }?>
                <?php }?>
                <?php }?>
            </div>
        </div>
    </div>
</section>
<section class="banner_index">
    <div class="owl-carousel p-relative owl-theme col-12" id="owl-banner">
        <?php foreach($banner_index as $k => $v){ ?>
        <div class="box_banner col-12 pt100 pb100"
            style="background:url('<?= _upload_baiviet_l.$v['photo']?>') no-repeat center center/cover;">
            <div class="box_title_desc_banner col-4">
                <div class="box_title_banner">
                    <div class="title1_banner fadeInUp wow" data-wow-delay="0.2s">
                        <?=$v["ten"]?>
                    </div>
                    <div class="title2_banner fadeInUp wow" data-wow-delay="0.3s">
                        <?=$v["ten2"]?>
                    </div>
                </div>
                <div class="box_desc_banner fadeInUp wow" data-wow-delay="0.4s">
                    <?=  htmlspecialchars_decode($v["mota"])?>
                </div>
                <div class="box_links_slider">


                    <div class="boxslider_details-btntag fadeInLeft wow" data-wow-delay="0.5s">

                        <a href="<?=$v["link"]?>" class="changeBackground"><?=_oficescoffee?></a>

                    </div>





                    <div class="boxslider_details-btn fadeInRight wow" data-wow-delay="0.5s">

                        <a href="<?=$v["link2"]?>" class="changeBackground"><?=_xemthem?></a>

                    </div>


                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<section class="procedure pt100 pb100">
    <div class="container">
        <div class="row">
            <?php if($deviceType != 'phone') {?>
            <div class="col-12 item grid-proce">
                <div class="col-12 proceL">
                    <?php foreach($quytrinh as $key => $value){ $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]);?>
                    <?php if ($key < 3) { ?>
                    <div class="box_proceL fadeInRight wow" data-wow-delay="0.4s">
                        <div class="box_img_proce">
                            <span rel="dofollow" title="<?= $value['ten'] ?>" class="d-block hover-left ratio-img"
                                img-width="100" img-height="100">
                                <img class="ratio-img__content objecfit-scale img-scale"
                                    src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?= $value['ten'] ?>"
                                    <?=$func->errorImg()?>>
                            </span>
                        </div>
                        <div class="box_title_desc_proce">
                            <div class="title_proceL">
                                <?= $value['ten'] ?>
                            </div>
                            <div class="desc_proceL line-4">
                                <?=$seoDB["description_$lang"]?>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php }?>
                </div>
                <div class="col-12 p-relative fadeInUp wow" data-wow-delay="0.2s">
                    <img src="<?=_upload_hinhanh_l.$bg_quytrinh["photo"]?>" alt="Café Fin" class="center_proces">
                </div>
                <div class="col-12 proceR">
                    <?php foreach($quytrinh as $key => $value){ $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]);?>
                    <?php if ($key > 2) { ?>
                    <div class="box_proceR fadeInLeft wow" data-wow-delay="0.4s">
                        <div class="box_title_desc_proce">
                            <div class="title_proceR">
                                <?= $value['ten'] ?>
                            </div>
                            <div class="desc_proceR line-4">
                                <?=$seoDB["description_$lang"]?>
                            </div>
                        </div>
                        <div class="box_img_proce">
                            <span rel="dofollow" title="<?= $value['ten'] ?>" class="d-block hover-left ratio-img"
                                img-width="100" img-height="100">
                                <img class="ratio-img__content objecfit-scale img-scale"
                                    src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?= $value['ten'] ?>"
                                    <?=$func->errorImg()?>>
                            </span>
                        </div>
                    </div>
                    <?php }?>
                    <?php }?>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-12 item grid-proce">

                <?php foreach($quytrinh as $key => $value){ $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]);?>

                <div class="box_proceL">
                    <div class="box_img_proce">
                        <span rel="dofollow" title="<?= $value['ten'] ?>" class="d-block hover-left ratio-img"
                            img-width="100" img-height="100">
                            <img class="ratio-img__content objecfit-scale img-scale"
                                src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?= $value['ten'] ?>"
                                <?=$func->errorImg()?>>
                        </span>
                    </div>
                    <div class="box_title_desc_proce">
                        <div class="title_proceL">
                            <?= $value['ten'] ?>
                        </div>
                        <div class="desc_proceL">
                            <?=$seoDB["description_$lang"]?>
                        </div>
                    </div>
                </div>

                <?php }?>


            </div>
            <?php } ?>

        </div>
    </div>
</section>
<?php if($row_setting["checkvideo"]==1){ ?>
<section class="banner_video pt115 pb100"
    style="background:url('<?= _upload_hinhanh_l.$bg_video['photo']?>') no-repeat center center/cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 box_banner_video item">
                <div class="box_title_video">
                    <div class="title1_video fadeInUp wow" data-wow-delay="0.3s">
                        <?=$video['ten']?>
                    </div>
                    <div class="title2_video fadeInUp wow" data-wow-delay="0.5s">
                        <?=$video['ten2']?>
                    </div>
                </div>
                <div class="box_icon_play">
                    <a href="<?=$video['links']?>" id="linkchange" data-fancybox="videos" class="p-relative">
                        <img src="./assets/images/iconplay.svg" alt="">
                    </a>
                </div>
                <div class="box_links_slider fadeInUp wow" data-wow-delay="0.6s">
                    <div class="boxslider_details-btntag">
                        <a href="<?=$video['link1']?>" class="changeBackground"><?=_oficescoffee?></a>
                    </div>
                    <div class="boxslider_details-btn">
                        <a href="<?=$video["link2"]?>" class="changeBackground"><?=_xemthem?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }else{ ?>
<section class="banner_video pt115 pb100 fadeInUp wow" data-wow-delay="0.3s">
    <video width="100%" height="768" playsinline class="video-slider__index" autoplay muted controls loop>

        <source src="<?=_upload_hinhanh_l.$video['video']?>" type="video/mp4">

    </video>
</section>
<?php }?>
<section class="album pt100 pb100">
    <div class="container">
        <div class="row">
            <div class="col-12 item grid-album">
                <div class="col-12 box_title_desc_album pt60 fadeInLeft wow" data-wow-delay="0.2s">
                    <div class="box_title_album">
                        <div class="title1_album fadeInUp wow" data-wow-delay="0.2s">
                            <?=$seoalbum['title_'.$seolang]?>
                        </div>
                        <div class="title2_album fadeInUp wow" data-wow-delay="0.4s">
                            <?=$seoalbum['description_'.$seolang]?>
                        </div>
                    </div>
                    <div class="box_desc_album fadeInUp wow" data-wow-delay="0.5s">
                        <?=htmlspecialchars_decode($seoalbum['mota_'.$seolang])?>
                    </div>
                    <div class="box_links_slider pt30 fadeInUp wow" data-wow-delay="0.6s">

                        <div class="boxintro_details-btn">
                            <a href="<?= $lang.'/'.'album'?>" class="changeBackground"><?=_xemthem?></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 box_img_album fadeInRight wow" data-wow-delay="0.2s">
                    <div class="left_album col-4">
                        <a data-fancybox="album2" href="<?=_upload_baiviet_l.$album[2]['photo']?>" rel="dofollow" title="<?=$album[2]['ten']?>" class="d-block ratio-img" img-width="173"
                            img-height="358" element-area="header">
                            <img src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$album[2]['photo']?>"
                                class="logo-pc ratio-img__content img-scale" alt="<?=$album[2]['ten']?>" />
                        </a>
                        <?php if(count($photoalbum)>0){ ?>
                            <?php foreach($photoalbum as $key=>$value){ ?>
                            <a data-fancybox="album<?= $k?>" href="<?=_upload_baiviet_l.$value['photo']?>"></a>
                            <?php } ?>
                            <?php } ?>
                    </div>
                    <div class="box_right_album col-8">
                        <div class="box_top_album col-12 mb15">
                            <a data-fancybox="album3" href="<?=_upload_baiviet_l.$album[3]['photo']?>" rel="dofollow"  title="<?=$album[3]['ten']?>" class="d-block ratio-img" img-width="397"
                                img-height="173" element-area="header">
                                <img src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$album[3]['photo']?>"
                                    class="logo-pc ratio-img__content img-scale" alt="<?=$album[3]['ten']?>" />
                            </a>
                            <?php if(count($photoalbum)>0){ ?>
                            <?php foreach($photoalbum as $key=>$value){ ?>
                            <a data-fancybox="album<?= $k?>" href="<?=_upload_baiviet_l.$value['photo']?>"></a>
                            <?php } ?>
                            <?php } ?>
                        </div>
                        <div class="box_bottom_album col-12">
                            <div class="box_bottom1_album">
                                <a data-fancybox="album1" href="<?=_upload_baiviet_l.$album[1]['photo']?>" rel="dofollow"  title="<?=$album[1]['ten']?>" class="d-block ratio-img" img-width="195"
                                    img-height="227" element-area="header">
                                    <img src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_baiviet_l.$album[1]['photo']?>"
                                        class="logo-pc ratio-img__content img-scale" alt="<?=$album[1]['ten']?>" />
                                </a>
                                <?php if(count($photoalbum)>0){ ?>
                            <?php foreach($photoalbum as $key=>$value){ ?>
                            <a data-fancybox="album<?= $k?>" href="<?=_upload_baiviet_l.$value['photo']?>"></a>
                            <?php } ?>
                            <?php } ?>
                            </div>
                            <div class="box_bottom2_album">
                                <a data-fancybox="album0" href="<?=_upload_baiviet_l.$album[0]['photo']?>" rel="dofollow"  title="<?=$album[0]['ten']?>" class="d-block ratio-img" img-width="195"
                                    img-height="227" element-area="header">
                                    <img src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_baiviet_l.$album[0]['photo']?>"
                                        class="logo-pc ratio-img__content img-scale" alt="<?=$album[0]['ten']?>" />
                                </a>
                                <?php if(count($photoalbum)>0){ ?>
                            <?php foreach($photoalbum as $key=>$value){ ?>
                            <a data-fancybox="album<?= $k?>" href="<?=_upload_baiviet_l.$value['photo']?>"></a>
                            <?php } ?>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news_events pt115 pb100">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="box_title_news mb50">
                    <div class="title1_news fadeInUp wow" data-wow-delay="0.2s">
                        <?=_tintucvasukien?>
                    </div>
                    <div class="title2_news fadeInUp wow" data-wow-delay="0.4s">
                        <?=_doctinmoi?>
                    </div>
                </div>
                <div class="col-12 grid-new">
                    <?php foreach($new as $k => $v){ $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
                        $new_c1=$db->rawQueryOne("select id , ten_$lang as ten , type , photo from #_baiviet_list where id=?",array($v["id_list"]));
                        ?>
                    <div class="box_new col-12 fadeInUp wow" data-wow-delay="<?= $k * 0.2?>s">
                        <div class="box_img_new p-relative mb15">
                            <?=$func->addHrefImg( $func->getCom($v["type"]).'/'.$v["tenkhongdau"],_upload_baiviet_l.$v["photo"],$v["ten"],380,250); ?>
                            <div class="box_day_category_new">
                                <div class="box_day_new">
                                    <?=date('d/m/Y',$v["ngaytao"]) ?>
                                </div>
                                <div class="box_category_new">
                                    <?= $new_c1["ten"] ?>
                                </div>
                            </div>
                        </div>
                        <div class="box_title_desc_new mb20">
                            <a href="<?=$func->getCom($v["type"]).'/'.$v["tenkhongdau"]?>">
                            <div class="box_title_new line-1 mb5">
                                <?= $v["ten"] ?>
                            </div>
                            <div class="box_desc_new line-4">
                                <?=$seoDB["description_$lang"]?>
                            </div>
                            </a>
                        </div>
                        <div class="box_link_new">
                            <div class="box_read_more_new">
                                <a href="<?=  $func->getCom($v["type"]) ?>/<?= $v["tenkhongdau"] ?>"
                                    title="<?= $v["ten"] ?>">Read
                                    More</a>
                            </div>
                            <div class="box_clock">
                                <i class="fa-regular fa-alarm-clock mr5"></i> <?=$func->timeAgo($v["ngaytao"],$lang)?>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>

            </div>
        </div>
    </div>
</section>