<?php 
    $bgslider = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=?",array("bg-slider"));
?>
<section class="element-custom-slider pb30 d-none-m" style="background:url(<?= _upload_hinhanh_l.$bgslider['photo']?>) no-repeat center center/cover;">
    <div class="container">
        <div class="d-flex flex-wrap">
            <div class="col-3">
                <div class="menu" element-type="special">
                    <div class="content">
                        <ul class="list" element-type="c1">
                            <?php foreach ($nhadat_menu as $key => $value){?>
                            <li>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                <h3>
                                    <?php }?>
                                    <a href="javascript:void(0)" class="js-active <?= ($key == 0)?"active":""?>"
                                        data-target="#tabc1<?=$key?>"
                                        title="<?= $value['ten']?>"><?= $value['ten']?></a>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                </h3>
                                <?php }?>
                            </li>
                            <?php }?>
                        </ul>
                        <?php foreach ($nhadat_menu as $key => $value){
                            $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc limit 0,8",array($value['id']));?>
                        <div class="<?= ($key == 0)?"active":""?> js-tab-active list" element-type="tabc1"
                            id="tabc1<?=$key?>">
                            <ul class="list" element-type="c2">
                                <?php foreach($c2 as $k => $v){
                                $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_cat=? order by stt asc,id desc",array($v['id']));?>
                                <li>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    <h4>
                                        <?php }?>
                                        <a href="<?= $v['tenkhongdau']?>" title="<?= $v['ten']?>"><?= $v['ten']?></a>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    </h4>
                                    <?php }?>
                                    <?php if($c2){?>
                                    <ul>
                                        <?php foreach($c3 as $ke=>$val){?>
                                        <li>
                                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                            <h5>
                                                <?php }?>
                                                <a href="<?= $val['tenkhongdau']?>" title="<?= $val['ten']?>"><?= $val['ten']?></a>
                                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                            </h5>
                                            <?php }?>
                                        </li>
                                        <?php }?>
                                    </ul>
                                    <?php }?>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <?php include _layouts.'slider.php'?>
            </div>
        </div>
    </div>
</section>
<div class="d-none d-block-m">
    <section class="slider p-relative">
        <div class="owl-carousel owl-theme owl-carousel-loop in-home" data-height="640" data-dot="0" data-nav='1'
            data-loop='1' data-play='1' data-lg-items='1' data-md-items='1' data-sm-items='1' data-xs-items="1"
            data-margin='0'>

            <?php foreach ($slider as $k => $v){ ?>

            <div>

                <div class="full-slider">

                    <a href="<?=$v['link']?>">

                        <img class="img-block col-12" src="<?=_upload_hinhanh_l.$v['photo']?>"
                            alt="<?=$v['ten_'.$lang]?>" <?=$func->errorImg()?>/>

                    </a>



                </div>

            </div>

            <?php } ?>

        </div>

    </section>
</div>