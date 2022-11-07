<?php 
    $videoIndex = $db->rawQuery("select ten_$lang as ten,photo,links from #_video where hienthi=1 and type =? order by stt asc,id desc limit 0,4",array("video"));
?>
<section>
    <div class="container">
        <div class="box" element-type="line">
            <div class="title mb20" element-area="index">
                <a class="cl-website">
                    <h2>Video</h2>
                </a>
            </div>
            <div class="d-flex flex-wrap row">
                <?php foreach ($videoIndex as $key => $value){
                    $videoimg = "https://img.youtube.com/vi/".$func->getYoutube($value['links'])."/mqdefault.jpg";
                    if($value['photo']!= null & $value['photo'] != ""){
                        $videoimg = _thumbs."/285x198x1/"._upload_hinhanh_l.$value['photo'];
                    }    
                ?>
                <div class="col-3 item w-100-m mb10i">
                    <a href="<?= $value['links']?>" data-fancybox="video<?= $key?>" title="<?= $value['ten']?>">
                        <div class="article">
                            <div class="thumb">
                                <img src="<?= $videoimg?>" alt="<?= $value['ten']?>" />
                            </div>
                            <div class="content">
                                <h3 class="name line-2"><?= $value['ten']?></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>