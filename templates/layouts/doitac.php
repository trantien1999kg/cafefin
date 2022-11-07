<?php  $partners = $func->AllDataPhoto("ten_$lang as ten,link,",'doi-tac',' ','object');                                            //Lấy toàn bộ tại sao ?>

<?php if(count($partners)>0){ ?>

<section class="wrapper-partners fadeInDown wow" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

    <div class="grid wide">

        <div class="row">

            <div class="owl-carousel owl-theme owl-carousel-loop quick-slide col" data-height="640" data-dot="1" data-nav="0"

            data-loop="1" data-play="1" data-lg-items="6" data-md-items="5" data-sm-items="5" data-xs-items="2"

            data-margin='20' data-deplay="5000">

                <?php foreach($partners as $key=> $vpn){ ?>

                <div class="pt10 pb10">

                    <div class="wrapper-partners__box mb20">

                        <a href="<?=$vpn->link?>" target="_blank" rel="nofollow" class="hover-left d-block">

                            <img src="<?=_upload_hinhanh_l.$vpn->photo?>" alt="<?=$vpn->ten?>" <?=$func->errorImg()?>>

                        </a>

                    </div>

                </div>

                <?php }?>

            </div>

        </div>

    </div>

</section>

<?php }?>