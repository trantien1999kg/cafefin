<section class="mt20 mb20">

    <div class="grid wide">
        
        <div class="row">

            <div class="col l-12 m-12 c-12 mb-m-40">

                <div class="title-default t-center mb40 p-relative">

                    <h1>

                        <span>

                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>

                        </span>

                    </h1>

                </div>

            </div>

            <div class="col l-12 m-12 c-12">

                <?php if($seo->getSeo('subject')!=''){ ?>

                    <div class="box-description mt20">

                        <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                    </div>

                <?php }?>

                <?php if($seo->getSeo('content')!=''){ ?>

                <div class="h__box__subject p-relative pb40">

                    <div class="wrapper-toc mt10">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

               </div>

               <?php }?>

            </div>

        </div>

        <div class="mt30">

            <div class="row">

                <?php if(count($tintuc)>0){?>

                <?php foreach($tintuc as $k => $v){ 

                    $alias = $func->getAlias($v['id_list'],'baiviet_list',$func->getCom($v['type']));

                    $seoDB = $seo->getSeoDB($v["id"],'baiviet','man',$v["type"]);
                    
                    ?>

                <div class='col l-4 m-4 c-6 mb20'>

                    <div class="energy-news__box">

                        <div class="energy-news__box-img">

                            <a href="<?=$func->getCom($v["type"])?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>" rel="dofollow" class="d-block hover-left">

                                <img src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>

                                <div class="sc-usermanual__box-img-time">

                                    <span class="sc-usermanual__box-img-time-date"><?=date('d',$v["ngaytao"]) ?></span>

                                    <span class="sc-usermanual__box-img-time-month"><?=date('m',$v["ngaytao"]) ?></span>

                                </div>

                            </a>

                        </div>

                        <div class="energy-news__box-detail">

                            <div class="energy-news__box-detail-aside-title mb20">

                                <h3 class="energy-news__box-detail-title line-2 mg0">

                                    <a href="<?= $func->getCom($v["type"])?>/<?=$v["tenkhongdau"]?>"  title="<?=$v["ten_$lang"]?>" rel="dofollow"><?=$v["ten_$lang"]?></a>

                                </h3>

                            </div>

                            <div class="energy-news__box-detail-des mb20"><?= htmlspecialchars_decode($v["mota_$lang"])?></div>

                            <div class="energy-news__box-detail-btn">

                                <a href="<?= $func->getCom($v["type"])?>/<?=$v["tenkhongdau"]?>" title="<?=_xemthem?>" rel="dofollow"><?=_xemthem?></a>

                            </div>

                        </div>

                    </div>

                </div>

                <?php }?>

                <div class="item col-12 justify-content-center">
                    <?= $paging ?>
                </div>

                <?php }?>

            </div>

        </div>

    </div>

</section>