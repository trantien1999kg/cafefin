<?php include _layouts."slider_tpl.php"; ?>

<section class="wrapper-bookroom__list">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12 mt30">
                
                <div class="breadcumb">

                    <?=$str_breadcrumbs?>

                </div>
                
            </div>

            <div class="col l-12 m-12 c-12">

                <h1 class="wrapper-bookroom__list-title t-center">

                    <span class="wrapper-bookroom__list-title-label"> <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?></span>

                    <?php /*<span class="wrapper-bookroom__list-title-name"><?=_namdupalace?></span> */ ?>

                </h1>

            </div>

            <?php if($seo->getSeo('content') !=''){ ?>

            <div class="col l-12 m-12 c-12 mt20 mb-m-10 mt-m-10">

                <div class="box-content ul-list-detail">

                    <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                </div>

            </div>

            <?php }?>

        </div>

        <div class="mt30">


        <?php if(count($tintuc)>0){?>

            <div class="row" id="wrapper-bookroom__list-all">

                <?php foreach($row_list as $k => $v){ ?>

                <div class="col l-6 m-6 c-12 mb30 mb-t-16">

                    <div class="wrapper-productdetail__category p-relative">

                        <div class="wrapper-productdetail__category-outline"></div>

                        <div class="wrapper-productdetail__category-img">

                            <a href="<?=$func->getCom($v["type"])?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>" class="d-block hover-left">

                                <img src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>

                            </a>

                        </div>

                        <div class="wrapper-productdetail__category-detail">

                            <h3 class="wrapper-productdetail__category-detail-title line-2">

                                <a href="<?=$func->getCom($v["type"])?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>"><?=$v["ten_$lang"]?></a>

                            </h3>

                            <div class="wrapper-productdetail__category-detail-btn">

                                <a href="<?=$func->getCom($v["type"])?>/<?=$v["tenkhongdau"]?>"><?=_xemcacphong?></a>

                            </div>

                        </div>

                    </div>

                </div>

                <?php }?>

            </div>

            <div class="row">

                <div class="col l-12 m-12 c-12 t-center">

                    <a class="wrapper-bookrom__btn-viewdetail more-paging mt40 mb40" data-p="1" style="display:inline-block;" data-table="list" data-type="dat-phong" data-item="<?=$row_setting['page_bookroom']?>" data-view-listroom
                        
                    data-target="#wrapper-bookroom__list-all" type-id="0" data-idlist="0"><?=_xemthem?></a>

                </div>

            </div>

            <?php }else{?>

                <div class="row">

                    <div class="col l-12 m-12 c-12 t-center">
                        <?=_noidungdangcapnhat?>
                    </div>

                </div>

            <?php }?>

        </div>

    </div>

</section>