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

            <?php if($seo->getSeo('content') !=''){ ?>

            <div class="col l-12 m-12 c-12 mt40 mb20 mb-m-10 mt-m-10">

                <div class="box-content ul-list-detail">

                    <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                </div>

            </div>

            <?php }?>

        </div>

        <div class="mt30">

            <div class="row">

                <?php if(count($tintuc)>0){?>

                <?php foreach($tintuc as $k => $v){
                    
                    $photos = $db->rawQuery("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array($v["type"],$v["id"]));

                    $alias = $func->getAlias($v['id_list'],'baiviet_list',$v['type']);
                    
                    ?>

                    <div class="col l-6 m-6 c-12 mb30 d-flex flex-column">

                        <div class="sc-products__box d-flex flex-column mb-m-30">

                            <div class="sc-products__box-img">

                                <a href="<?=_upload_baiviet_l.$v["photo"]?>" data-fancybox="images-tpl<?=$k?>" class="d-block hover-left" title="<?=$v["ten_$lang"]?>">

                                    <img src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>

                                </a>

                                <div class="hidden">

                                <?php foreach($photos as $keypt => $vpt){ ?>

                                    <a href="<?=_upload_baiviet_l.$vpt["photo"]?>" data-fancybox="images-tpl<?=$k?>">

                                        <img src="<?=_upload_baiviet_l.$vpt["photo"]?>" alt="">

                                    </a>

                                <?php }?>

                                </div>

                            </div>

                            <div class="sc-products__box-detail d-flex flex-column">

                                <h2 class="sc-products__box-detail-title sc-products__box-detail-title--constr line-2">

                                    <a href="<?=_upload_baiviet_l.$v["photo"]?>" data-fancybox="images<?=$key?>" title="<?=$v["ten_$lang"]?>"><?=$v["ten_$lang"]?></a>

                                </h2>

                                <span class="sc-products__box-detail-address"><i class="fa-solid fa-location-dot"></i> <?=$v["xuatxu_$lang"]?></span>

                            </div>

                        </div>

                    </div>


                <?php }?>

                <div class="item col-12 justify-content-center">
                    <?= $paging ?>
                </div>

                <?php }else{?>

                <div class="item col-12 t-center">

                    <?=_noidungdangcapnhat?>
                    
                </div>

                <?php }?>

            </div>

        </div>

    </div>

</section>