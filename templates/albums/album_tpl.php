<?php include _layouts."slider_album_tpl.php"; ?>

<section class="wrapper-album__pages">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12 mt20 mb20">
                
                <div class="breadcumb">

                    <?=$str_breadcrumbs?>

                </div>
                
            </div>

            <div class="col l-12 m-12 c-12 d-none">

                <div class="title-default t-center mb20 p-relative title-default__bookroom--modifiers">

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

                <div class="wrapper-bookroom__list-title t-center">

                    <span class="wrapper-bookroom__list-title-label"><?=_albumcua?></span>

                    <span class="wrapper-bookroom__list-title-name"><?=_namdupalace?></span>

                </div>

            </div>

            <div class="col l-12 m-12 c-12 mt20 mb20">

                <div class="box-content ul-list-detail">

                    <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                </div>

            </div>

        </div>

        <div class="mt30">

        <?php if(count($tintuc)>0){?>

            <div class="row">

                <?php 
                
                    foreach($tintuc as $key => $v){

                    $photos = $db->rawQuery("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array($v["type"],$v["id"]));
                    
                    ?>

                <div class="col l-12 m-12 c-12 mb-m-8 mb30 mb-t-16">

                    <div class="wrapper-album__box mb20">

                        <a href="<?=_upload_baiviet_l.$v["photo"]?>" data-fancybox="images-tpl<?=$key?>" class="d-block hover-left">

                            <img src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>

                        </a>

                        <div class="hidden">

                        <?php foreach($photos as $keypt => $vpt){ ?>

                            <a href="<?=_upload_baiviet_l.$vpt["photo"]?>" data-fancybox="images-tpl<?=$key?>">

                                <img src="<?=_upload_baiviet_l.$vpt["photo"]?>" alt="">

                            </a>

                        <?php }?>

                        </div>

                        <script>
                            $(function(){

                                $('[data-fancybox="images-tpl<?=$key?>"]').fancybox({

                                    thumbs : {
                                    autoStart : true
                                    },
                                    buttons : [
                                    'zoom',
                                    'close'
                                    ]

                                    });

                            });
                            
                        </script>

                    </div>

                </div>

                <?php }?>

            </div>

            <div class="row">

                <div class="col l-12 m-12 c-12 justify-content-center mb30">
                    <?= $paging ?>
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