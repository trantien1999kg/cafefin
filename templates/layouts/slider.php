<?php

    $slider=$db->rawQuery("select ten_$lang as ten,ten2_$lang as ten2,linktag_$lang as linktag ,photo_$lang photo,link,mota_$lang as mota from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider'));

?>

<?php if($row_setting["slider_web"]==1){ ?>

<section class="slider-videoupload p-relative">

    <?php include_once _layouts."header.php"; ?>

    <div class="full-slider__video-overflow" id="video__slider">

        <video width="100%" height="640" playsinline class="video-slider__index" autoplay muted controls loop>

            <source src="<?=_upload_hinhanh_l.$row_setting["photo"]?>" type="video/mp4">

        </video>

    </div>

</section>

<?php }else{ ?>

<?php /* <section class="wrappers-slider p-relative">

        <?php include_once _layouts."header.php"; ?>

<div class="owl-carousel owl-theme owl-carousel-loop slider-header" data-height="640"
    data-dot="<?php if($deviceType=="computer"){echo '0';}else{echo '1';} ?>" data-nav="0" data-loop="0" data-play="1"
    data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-margin='0' data-deplay="5000">

    <?php $stt=0; foreach($slider as $key => $value){ $stt++; ?>

    <div class="wrappers-slider__box p-relative">

        <a href="<?=($value["link"] !='') ? $value["link"]:'javascript:void(0)'?>" <?php if($value["link"] !='') { ?>
            data-fancybox="video-index<?=$key?> <?php }?>">

            <img loading="lazy" src="<?=_upload_hinhanh_l.$value["photo"]?>" alt="<?=$value["ten"]?>"
                <?=$func->errorImg()?>>

        </a>

        <div class="boxslider_details d-none-m">

            <div class="boxslider_details-title line-2">

                <span><?=$value["ten"]?></span>

            </div>

            <div class="boxslider_details__des mb20">
                <?= htmlspecialchars_decode($value["mota"]) ?>
            </div>

            <div class="boxslider_details-btn d-flex justify-content-between">

                <?php if(!empty($value["link"])){ ?>

                <a href="<?=$value['link']?>" class="changeBackground"
                    data-fancybox="video-index<?=$key?>"><?=_videoclip?></a>

                <?php }?>

                <div class="wrappers-two__btn d-flex align-items-center">

                    <button class="wrappers-two__btn-prev<?=$stt?>"><i class="fa-solid fa-angle-left"></i></button>

                    <button class="wrappers-two__btn-next<?=$stt?>"><i class="fa-solid fa-angle-right"></i></button>

                </div>

            </div>

        </div>

        <script>
        var sliderDetail = $('.slider-header');

        $('.wrappers-two__btn-prev<?=$stt?>').click(function() {


            sliderDetail.trigger('prev.owl.carousel');


        });

        $('.wrappers-two__btn-next<?=$stt?>').click(function() {

            sliderDetail.trigger('next.owl.carousel');

        });
        </script>

    </div>

    <?php } ?>

</div>

</section> */ ?>

<section id="slider-top" class="clearfix p-relatvie pt35" style="background-color: var(--html-cl-website)">

    <?php include_once _layouts."header.php"; ?>

    <?php if($deviceType != 'phone'){ ?>
        <div class="maxSlider">
        <div class="box-slider">
            <div class="slider-left">
                <div id="jssor_1"
                    style="position:relative;margin:0 auto;top:0px;left:0px;width:1440px;height:600px;overflow:hidden;visibility:hidden;">
                    <div data-u="slides"
                        style="cursor:default;position:relative;top:0px;left:0px;width:1440px;height:600px;overflow:hidden;">
                        <?php foreach($slider as $key => $value){ ?>
                        <div data-b="0" data-idle="2000">
                            <a href="<?=$v['link']?>" title="<?=$v['ten']?>"><img width="1440" height="600"
                                    style="width: 100%;aspect-ratio: 1440 / 600;object-fit: cover;height: auto;"
                                    data-u="image" src="<?=_upload_hinhanh_l.$value['photo']?>" alt="<?=$value['ten']?>"
                                    <?=$func->errorImg()?> /></a>

                            <div class="boxslider_details container grid-slider">

                                <div class="col-12 box_left_slider">
                                    <div class="boxslider_details-title line-2">

                                        <span><?=$value["ten"]?></span>

                                    </div>

                                    <div class="boxslider_details-title2 line-2">

                                        <span><?=$value["ten2"]?></span>

                                    </div>

                                    <div class="boxslider_details__des mb20">
                                        <?= htmlspecialchars_decode($value["mota"]) ?>
                                    </div>

                                    <div class="box_links_slider">


                                        <div class="boxslider_details-btntag">

                                            <a href="<?=$value['linktag']?>" class="changeBackground" ><?=_oficescoffee?></a>

                                        </div>





                                        <div class="boxslider_details-btn">

                                            <a href="<?=$value['link']?>" class="changeBackground" ><?=_xemthem?></a>

                                        </div>


                                    </div>


                                </div>
                                <div class="col-12 box_right_img_slider">

                                    <span class="d-block ratio-img" img-width="611" img-height="530">
                                        <img src="./assets/images/loading_image.svg"
                                            data-src="<?=_upload_hinhanh_l.$ha_slider['photo']?>"
                                            class="logo-pc ratio-img__content img-scale" alt="<?=$value["ten"]?>" />
                                    </span>
                                    <div class="lte-effect-smoke"><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-1" alt="."><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-2" alt="."><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-3" alt="."><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-4" alt="."><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-5" alt="."><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-6" alt="."></div>
                                </div>

                            </div>

                        </div>

                        <?php }?>

                    </div>

                    <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:16px;right:16px;"
                        data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:14px;height:14px;">
                            <svg viewBox="0 0 16000 16000"
                                style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                            </svg>
                        </div>
                    </div>

                    <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:50px;"
                        data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                            <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                            <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:50px;"
                        data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                            <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                            <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php }else{ ?>
        <div class="maxSlider">
        <div class="box-slider">
            <div class="slider-left">
                <div id="jssor_1"
                    style="position:relative;margin:0 auto;top:0px;left:0px;width:390px;height:725px;overflow:hidden;visibility:hidden;">
                    <div data-u="slides"
                        style="cursor:default;position:relative;top:0px;left:0px;width:390px;height:725px;overflow:hidden;">
                        <?php foreach($slider as $key => $value){ ?>
                        <div data-b="0" data-idle="2000">
                            <a href="<?=$v['link']?>" title="<?=$v['ten']?>"><img width="390" height="725"
                                    style="width: 100%;aspect-ratio: 390 / 725;object-fit: cover;height: auto;"
                                    data-u="image" src="<?=_upload_hinhanh_l.$value['photo']?>" alt="<?=$value['ten']?>"
                                    <?=$func->errorImg()?> /></a>

                            <div class="boxslider_details container grid-slider">

                                <div class="col-12 box_left_slider">
                                    <div class="boxslider_details-title line-2">

                                        <span><?=$value["ten"]?></span>

                                    </div>

                                    <div class="boxslider_details-title2 line-2">

                                        <span><?=$value["ten2"]?></span>

                                    </div>

                                    <div class="boxslider_details__des mb20">
                                        <?= htmlspecialchars_decode($value["mota"]) ?>
                                    </div>

                                    <div class="box_links_slider">


                                        <div class="boxslider_details-btntag">

                                            <a href="<?=$value['linktag']?>" class="changeBackground" ><?=_oficescoffee?></a>

                                        </div>





                                        <div class="boxslider_details-btn">

                                            <a href="<?=$value['link']?>" class="changeBackground" ><?=_xemthem?></a>

                                        </div>


                                    </div>


                                </div>
                                <div class="col-12 box_right_img_slider">

                                    <span class="d-block ratio-img" img-width="611" img-height="530">
                                        <img src="./assets/images/loading_image.svg"
                                            data-src="<?=_upload_hinhanh_l.$ha_slider['photo']?>"
                                            class="logo-pc ratio-img__content img-scale" alt="<?=$value["ten"]?>" />
                                    </span>
                                    <div class="lte-effect-smoke"><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-1" alt="."><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-2" alt="."><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-3" alt="."><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-4" alt="."><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-5" alt="."><img
                                            src="http://kaffa.like-themes.com/wp-content/uploads/2020/06/coffee-smoke.png"
                                            class="lte-effect-item-6" alt="."></div>
                                </div>

                            </div>

                        </div>

                        <?php }?>

                    </div>

                    

                </div>
            </div>
        </div>
    </div>
    <?php } ?>

</section>

<script>
$(function() {
    jssor_1_slider_init();
})
</script>

<?php }?>