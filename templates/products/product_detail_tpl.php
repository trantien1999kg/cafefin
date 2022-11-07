<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6"></script>
<section class="product-detail" id="detail-product">
    <div class="container fadeInDown wow" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">
        <form method="post" data-role="add-to-cart" enctype="multipart/form-data" onsubmit="return false"
            name="product-detail-<?=$row_detail['id']?>" id="product-detail-<?=$row_detail['id']?>">
            <input type="hidden" name="src" value="addCart">
            <input type="hidden" name="pid" value="<?=$row_detail['id']?>">
            <div class="row10 d-flex flex-wrap mt20 mb20">
                <div class="item10 col-12 w-100-m">
                    <div class="row10 d-flex flex-wrap">
                        <div class="item10 col-5 w-100-m">
                            <div class="border-img-gallery mb10">
                                <div class="owl-carousel owl-theme" id="synced1">
                                    <div class="img-gallery t-center">
                                        <a href="<?=_upload_baiviet_l.$row_detail['photo']?>" class="MagicZoom"
                                            id="Zoom-1"
                                            data-options="zoomPosition:  inner;variableZoom: true;expand: on; hint: off; zoomOn: hover;">
                                            <img loading="lazy"
                                                src="thumbs/300x426x1/<?=_upload_baiviet_l.$row_detail['photo']?>"
                                                alt="<?=$row_detail['ten_'.$lang]?>" style="border-radius:1rem;" />
                                        </a>
                                    </div>

                                </div>
                                <?php if(count($photos)>0){ ?>

                                <div class="img-bottom">

                                    <div class="product-detail-slider owl-carousel owl-theme owl-carousel-loop in-home"
                                        data-height="575" data-dot="1" data-nav='0' data-loop='0' data-play='1'
                                        data-lg-items='4' data-md-items='4' data-sm-items='4' data-xs-items="4"
                                        data-margin='10'>

                                        <div class="items mb20">
                                            <div class="img"><a data-zoom-id="Zoom-1"
                                                    href="<?=_upload_baiviet_l.$row_detail['photo']?>"
                                                    data-image="thumbs/300x426x1/<?=_upload_baiviet_l.$row_detail['photo']?>"><img
                                                        loading="lazy" <?= $func->errorImg() ?>
                                                        src="thumbs/300x426x1/<?=_upload_baiviet_l.$row_detail['thumb']?>"
                                                        alt="<?=$row_detail['ten_'.$lang]?>"></a></div>
                                        </div>

                                        <?php foreach($photos as $k=>$v){ ?>

                                        <div class="items mb20">
                                            <div class="img"><a data-zoom-id="Zoom-1"
                                                    href="<?=_upload_baiviet_l.$v['photo']?>"
                                                    data-image="thumbs/300x426x1/<?=_upload_baiviet_l.$v['photo']?>"><img
                                                        loading="lazy"
                                                        src="thumbs/300x426x1/<?=_upload_baiviet_l.$v['photo']?>"
                                                        alt="<?=$row_detail['ten_'.$lang]?>"></a></div>
                                        </div>

                                        <?php } ?>

                                    </div>

                                </div>

                                <?php } ?>
                            </div>
                        </div>
                        <div class="item10 col-7 w-100-m">
                            <div class="row10">
                                <div class="item10 col-12">
                                    <div class="box-detail mt20i">
                                        <h1 class="mg0">
                                            <span><?=$row_detail['ten_'.$lang]?></span>
                                        </h1>
                                        <ul>
                                            <li>
                                                <div class="row10 d-flex">

                                                    <div class="item10 col-6">
                                                        <i class="fa fa-check-square-o"
                                                            aria-hidden="true"></i>&nbsp;<?=_masp?>: <span
                                                            class="desc-span"><?=($row_detail['masp']!='') ? $row_detail['masp']: _dangcapnhat;?></span>
                                                    </div>

                                                    <div class="item10 col-6">
                                                        <i class="fa fa-check-square-o"
                                                            aria-hidden="true"></i>&nbsp;<?=_giaban?>: <span
                                                            class="desc-span desc-span--price"><?=($row_detail["mucgia"]!=0) ? $func->changeMoney($row_detail["mucgia"],$lang) : _lienhe;?></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row10 d-flex">
                                                    <div class="item10 col-6">
                                                        <i class="fa fa-check-square-o"
                                                            aria-hidden="true"></i>&nbsp;<?=_luotxem?>: <span
                                                            class="desc-span"> <?=$row_detail['luotxem']?></span>
                                                    </div>

                                                    <div class="item10 col-6">
                                                        <i class="fa fa-check-square-o"
                                                            aria-hidden="true"></i>&nbsp;<?=_tinhtrang?>:
                                                        <span
                                                            class="desc-span"><?php if($row_detail['id_loai']==0){echo _conhang;}else{echo _hethang;}  ?></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row10 d-flex">
                                                    <div class="item10 col-12">
                                                        <span class="product-detail__des"><?=_mota?>:</span>
                                                        <?=htmlspecialchars_decode($row_detail["mota_$lang"])?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row10 d-flex">
                                                    <div class="item10 col-12">
                                                        <div class="contact-phone">
                                                            <ul>
                                                                <li class="w-100-m">
                                                                    <a target="_blank"
                                                                        href="https://zalo.me/<?=($row_detail['sozalo']!='') ? str_replace(' ','',$row_detail['sozalo']) : str_replace(' ','',$row_setting['sozalo'])?>">
                                                                        <p class="mb0"> <i class="fa fa-comment"></i>
                                                                            <?=_chatzalo?></p>
                                                                        <p><?=_giaidaphotrongaytucthi?></p>
                                                                    </a>
                                                                </li>
                                                                <li class="mt10i w-100-m">
                                                                    <a target="_blank"
                                                                        href="https://m.me/<?=$row_setting['linkmessage']?>">
                                                                        <p class="mb0"> <i
                                                                                class="fa fa-facebook-square"></i>
                                                                            <?=_chatfacebook?></p>
                                                                        <p><?=_giaidaphotrongaytucthi?></p>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="p-relative flex_around">
                                                <div class="boxcart_details-btntag _add_to_cart"
                                                    data-id="<?=$row_detail['id']?>"><?=_themvaogio?></div>
                                                <div class="boxintro_details-btn _buy_now"
                                                    data-id="<?=$row_detail['id']?>"><?=_buynow?></div>

                                            </li>

                                            <li style="border:0">

                                                <div class="row10 d-flex">

                                                    <div class="item col-12">

                                                        <?php include_once _source.'shareLinks.php'?>

                                                    </div>

                                                </div>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </form>

    </div>

</section>




<section class="sc-details">

    <div class="grid wide">

        <div class="box-desc-detail mt20">

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <div class="page-product__content border d-flex justify-content-between d-block-m mt15">

                        <div class="page-product__content-left bg-white col-12">

                            <div class="page-product__detail">

                                <div class="product-detail pd0i">

                                    <div class="title-content font-weight-bold"
                                        style="background-color:var(--html-cl2-website);color:var(--white-color);">
                                        <?=_thongtinchitiet?>
                                    </div>

                                    <div class="box-detail-content">

                                        <div class="wrapper-toc">

                                            <div class="content ul-list-detail box-view box-view--view" id="boxview">

                                                <?=htmlspecialchars_decode($row_detail["noidung_$lang"])?>

                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-center mt10">
                                            <a href="javascript:void(0)" class="view more js-moredetail"
                                                title="Xem thêm" data-target="#boxview"><?=_xemthem?> <i
                                                    class="ml5 fal fa-chevron-down ms-2"></i></a>
                                        </div>

                                        <?php if($row_detail["noidung_$lang"]!=''){ ?>



                                        <?php }?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="sc-related">

    <div class="grid wide">

        <?php if(count($tintuc)>0){?>

        <div class="row mt30">

            <div class="col l-12 m-12 c-12 w-100-m book">

                <div class="sc-related-title t-center">

                    <span><?=_sanphamlienquan?></span>

                </div>

            </div>

        </div>

        <?php include _layouts."related.php"?>

        <?php }?>
    </div>

</section>

<script src="assets/magiczoomplus/magiczoomplus.js"></script>
<script>
$(function() {

    if (exists("#synced1")) {
        var sync1 = $("#synced1");
        var sync2 = $("#synced2");
        var slidesPerPage = 6;
        var syncedSecondary = true;
        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
            center: false,
            autoplay: true,
            autoplayHoverPause: true,
            dots: false,
            loop: true,
            lazyLoad: true,
            responsiveRefreshRate: 200
        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function() {
                sync2.find(".owl-item").eq(0).addClass("synced");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: false,
                nav: false,
                margin: 10,
                loop: false,
                center: false,
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage,
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0 && 1 < 2) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            sync2
                .find(".owl-item")
                .removeClass("synced")
                .eq(current)
                .addClass("synced");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start && 1 < 2) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    }

});
</script>