<?php

    $slider=$db->rawQuery("select ten_$lang,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider-formdatphong'));

?>
<section id="slider-top" class="clearfix p-relative">
    <div class="maxSlider">
        <div class="box-slider">
            <div class="slider-left">
               <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1366px;height:342px;overflow:hidden;visibility:hidden;">    
                   <div data-u="slides"  style="cursor:default;position:relative;top:0px;left:0px;width:1366px;height:342px;overflow:hidden;">
                        <?php foreach ($slider as $k => $v){ ?>
                            <div data-b="0" data-idle="2000">
                                <a href="<?=$v['link']?>" title="<?=$v['ten']?>"><img width="1366" height="342" style="width: 100%;aspect-ratio: 1366 / 342;object-fit: cover;height: auto;" data-u="image" src="<?=_upload_hinhanh_l.$v['photo']?>" alt="<?=$v['ten_'.$lang]?>" <?=$func->errorImg()?>/></a>
                            </div>
                        <?php }?>
                    </div>
                    <div data-u="navigator" class="jssorb102" style="position:absolute;bottom:16px;left:50%;transform: translate(-50%);" data-autocenter="1"
                            data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:15px;height:15px;">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="co" cx="8000" cy="8000" r="5000"></circle>
                                <circle class="ci" cx="8000" cy="8000" r="3000"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-top__header d-none-m d-none-tablet d-none-tl">
        <?php include _layouts."header.php";?>
    </div>

</section>

<script>
    $(function(){
        jssor_1_slider_init();
    });   
</script>
