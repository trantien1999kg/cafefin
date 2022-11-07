<?php include _layouts."slider_td.php"; ?>

<section class="mt20 mb20">

    <div class="grid wide">
        
        <div class="row">

             <div class="col l-12 m-12 c-12">

                <div class="breadcumb">

                    <?=$str_breadcrumbs?>

                </div>

            </div>

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
            <?php if($seo->getSeo('content')!=''){ ?>
            <div class="col l-12 m-12 c-12 mt20 mb20 mb-m-10 mt-m-10">
                <div class="box-content ul-list-detail">
                    <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="mt30">
            <div class="row d-flex flex-wrap">
                <?php if(count($tintuc)>0){?>
                <?php foreach($tintuc as $k=>$v){ 
                    $alias = $func->getAlias($v['id_list'],'baiviet_list',$v['type'])?>
                <div class='col l-6 m-6 c-12 mb30'>
                    <div class="box-post">
                        <div class="row">
                            <div class='col l-4 m-12 c-12'>
                                <a class='post-img' href="<?= $func->getCom($v['type'])?>/<?=$alias.$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>">
                                    <span><i class="fa fa-file-text"></i></span>
                                    <img src='<?=_thumbs?>/400x280x1/<?=_upload_baiviet_l.$v["photo"]?>'
                                        alt="<?=$v["ten_$lang"]?>" class="col-12" <?=$func->errorImg()?> /></a>
                            </div>
                            <div class='col l-8 m-12 c-12'>
                                <h2 class='post-name line-2'><a href="<?= $func->getCom($v['type'])?>/<?=$alias.$v["tenkhongdau"]?>"
                                        title="<?=$v["ten_$lang"]?>"><?=$v["ten_$lang"]?></a></h2>
                                <p class="post-date clearfix">
                                    <span class="pull-left"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        <?=date("d/m/Y", $v['ngaytao'])?></span>
                                    <span class="pull-right"><?=_luotxem?>: <?=$v['luotxem']?></span>
                                </p>
                                <div class='post-desc j-text mt10'>
                                    <?=$func->limitWord(htmlspecialchars_decode($v["mota_$lang"]), 180)?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="item col-12 justify-content-center">
                    <?= $paging ?>
                </div>
                <?php }else{?>
                <div class="item col-12 t-center">
                    Nội dung đang cập nhật....
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>