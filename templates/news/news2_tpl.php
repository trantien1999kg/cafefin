<section class="mt20 mb20">

    <div class="grid wide">

        <div class="row">



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
                    
                    $photoalbum = $db->rawQuery("select * from #_baiviet_photo where id_baiviet=? order by stt asc",array($v['id']));
                    ?>
                <?php if($com != 'album'){ ?>
                <div class='col l-4 m-4 c-12 mb20'>

                    <div class="box_new col-12">
                        <div class="box_img_new p-relative mb15">
                            <?=$func->addHrefImg($lang.'/'.$v["type"].'/'.$v["tenkhongdau"],_upload_baiviet_l.$v["photo"],$v["ten"],380,250); ?>
                            <div class="box_day_category_new">
                                <div class="box_day_new">
                                    <?=date('d/m/Y',$v["ngaytao"]) ?>
                                </div>
                                <div class="box_category_new">
                                    <?= $new_c1["ten"] ?>
                                </div>
                            </div>
                        </div>
                        <div class="box_title_desc_new mb20">
                            <div class="box_title_new line-1 mb5">
                                <?= $v["ten_$lang"] ?>
                            </div>
                            <div class="box_desc_new line-4">
                                <?=$seoDB["description_$lang"]?>
                            </div>
                        </div>
                        <div class="box_link_new">
                            <div class="box_read_more_new">
                                <a href="<?= $v["type"] ?>/<?= $v["tenkhongdau"] ?>" title="<?= $v["ten"] ?>">Read
                                    More</a>
                            </div>
                            <div class="box_clock">
                                <i class="fa-regular fa-alarm-clock mr5"></i> <?=$func->timeAgo($v["ngaytao"],$lang)?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }else{ ?>
                <div class='col l-3 m-3 c-6 mb20'>
                    <div class="box_new col-12">
                        <div class="box_img_new p-relative mb15">
                            <a data-fancybox="album<?= $k?>" href="<?=_upload_baiviet_l.$v['photo']?>" rel="dofollow"
                                title="<?=$v["ten"]?>" class="d-block hover-left ratio-img" img-width="400"
                                img-height="400">
                                <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                    <?=$func->errorImg()?>>
                            </a>
                            <?php if(count($photoalbum)>0){ ?>
                            <?php foreach($photoalbum as $key=>$value){ ?>
                            <a data-fancybox="album<?= $k?>" href="<?=_upload_baiviet_l.$value['photo']?>"></a>
                            <?php } ?>
                            <?php } ?>
                        </div>

                    </div>

                </div>
                <?php } ?>



                <?php }?>

                <div class="item col-12 justify-content-center">
                    <?= $paging ?>
                </div>

                <?php }?>

            </div>

        </div>

    </div>

</section>