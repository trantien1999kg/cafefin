<?php 
    $mostview = $db->rawQuery("select ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,id_ad1,id_ad2,id_ad3 from #_baiviet where hienthi=1 and type=? order by luotxem desc limit 0,10",array("cam-nang"));
    $ad1 = $db->rawQueryOne("select id from #_album where hienthi=1 and id=?",array($row_detail['id_ad1']));
    $ad2 = $db->rawQueryOne("select id from #_album where hienthi=1 and id=?",array($row_detail['id_ad2']));
    $ad3 = $db->rawQueryOne("select id from #_album where hienthi=1 and id=?",array($row_detail['id_ad3']));
    $adphoto1 = $db->rawQuery("select ten,link,photo from #_album_photo where id_baiviet=?",array($ad1['id']));
    $adphoto2 = $db->rawQuery("select ten,link,photo from #_album_photo where id_baiviet=?",array($ad2['id']));
    $adphoto3 = $db->rawQuery("select ten,link,photo from #_album_photo where id_baiviet=?",array($ad3['id']));

?>
<div class="container">

    <div class="d-flex flex-wrap row pb30">

        <div class="item col-8 w-100-m">

            <div class="content-detail mt20 mb20 clearfix">

                <div class="other-news-detail font-detail">

                    <div class="detail">

                        <div class="title-default mt-20 p-relative">

                            <h1><span><?=$seo->getSeo('h1')?></span></h1>

                        </div>

                        <div class="box-description mt20 original">

                            <span><?=htmlspecialchars_decode($seo->getSeo('content'))?></span>

                        </div>

                        <div class="wrapper-toc mt20">

                            <div class="content ul-list-detail original">

                                <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>

                            </div>

                        </div>

                    </div>

                    <div class="detail mt20">

                        <div class="socialmediaicons">

                            <?php include_once _source.'shareLinks.php'?>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <div class="item col-4 w-100-m">
            <div class="title mb20" element-area="side-article">
                <h2 class="cl-website">
                    <span>
                        Xem nhiều
                    </span>
                </h2>
            </div>
            <div class="mt10">
                <div class="side-article">
                    <div class="thumb">
                        <a href="<?= $mostview[0]['tenkhongdau']?>" title="<?= $mostview[0]['ten']?>">
                            <img src="<?= _upload_baiviet_l.$mostview[0]['photo']?>" alt="<?= $mostview[0]['ten']?>" />
                        </a>
                    </div>
                    <div class="content">
                        <a href="<?= $mostview[0]['tenkhongdau']?>" title="<?= $mostview[0]['ten']?>">
                            <?= $mostview[0]['ten']?>
                        </a>
                    </div>
                </div>
                <div class="mt10">
                    <ul class="ul-side">
                        <?php foreach($mostview as $key => $value){
                        if($key>0){?>
                        <li>
                            <a href="<?= $value['tenkhongdau']?>" title="<?= $value['ten']?>">
                                <span><?= $value['ten']?></span>
                            </a>
                        </li>
                        <?php }}?>
                    </ul>
                </div>
            </div>
            <div class="mt10">
                <div class="owl-carousel owl-theme owl-carousel-loop in-home" data-height="640" data-dot="0"
                    data-nav='0' data-loop='<?= (count($adphoto1)>1)?"1":"0"?>' data-play='1' data-lg-items='1' data-md-items='1' data-sm-items='1'
                    data-xs-items="1" data-margin='0' data-delay="5000">
                    <?php foreach($adphoto1 as $key => $value){?>
                        <div>
                            <a href="<?= $value['link']?>" title="<?= $value['ten']?>">
                                <img src="<?= _upload_album_l.$value['photo']?>" alt="<?= $value['ten']?>"/>
                            </a>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="mt10">
                <div class="owl-carousel owl-theme owl-carousel-loop in-home" data-height="640" data-dot="0"
                    data-nav='0' data-loop='<?= (count($adphoto2)>1)?"1":"0"?>' data-play='1' data-lg-items='1' data-md-items='1' data-sm-items='1'
                    data-xs-items="1" data-margin='0' data-delay="5000">
                    <?php foreach($adphoto2 as $key => $value){?>
                        <div>
                            <a href="<?= $value['link']?>" title="<?= $value['ten']?>">
                                <img src="<?= _upload_album_l.$value['photo']?>" alt="<?= $value['ten']?>"/>
                            </a>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="mt10">
                <div class="owl-carousel owl-theme owl-carousel-loop in-home" data-height="640" data-dot="0"
                    data-nav='0' data-loop='<?= (count($adphoto3)>1)?"1":"0"?>' data-play='1' data-lg-items='1' data-md-items='1' data-sm-items='1'
                    data-xs-items="1" data-margin='0' data-delay="5000">
                    <?php foreach($adphoto3 as $key => $value){?>
                        <div>
                            <a href="<?= $value['link']?>" title="<?= $value['ten']?>">
                                <img src="<?= _upload_album_l.$value['photo']?>" alt="<?= $value['ten']?>"/>
                            </a>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

</div>