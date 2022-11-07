<section class="mt20 mb20">

    <div class="grid wide">
        
        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="title-default t-center mb20 p-relative">

                    <h1>

                        <span>

                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>

                        </span>

                    </h1>

                </div>

            </div>

            <div class="col l-12 m-12 c-12 mt20 mb20 mb-m-10 mt-m-10">

                <div class="box-content ul-list-detail">

                    <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                </div>

            </div>

        </div>

        <div class="mt30">

            <div class="row">

                <?php if(count($tintuc)>0){?>

                <?php foreach($tintuc as $k => $v){ 

                    $alias = $func->getAlias($v['id_list'],'baiviet_list',$v['type'])?>

                    <div class="col l-4 m-4 c-12 mb30">

                         <div class="sc-newsvideo__boxright">

                                <div class="sc-newsvideo__boxright-img">

                                    <a href="<?=$v["links"]?>" data-fancybox="videoindex<?=$k?>" title="<?=$v["ten_$lang"]?>" class="d-block hover-left">

                                        <img src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>">

                                        <span class="sc-newsvideo__boxright-img-play">

                                            <i class="fa-solid fa-play"></i>

                                        </span>

                                    </a>

                                </div>

                                <div class="sc-newsvideo__boxright-detail">

                                    <h2 class="sc-newsvideo__boxright-detail-title line-2">
                                        
                                        <a href="<?=$v["links"]?>" data-fancybox="videoindex" title="<?=$v["ten_$lang"]?>"><?=$v["ten_$lang"]?></a>

                                    </h2>

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