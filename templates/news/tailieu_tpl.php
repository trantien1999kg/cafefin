<section class="section-news mt20 mb20">
    <div class="container">
        <div class="row">
            <div class="item col-12">
                <div class="title mb20" element-area="index">
                    <h1 class="cl-website">
                        <span>
                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>
                        </span>
                    </h1>
                </div>
            </div>
            <div class="item col-12">
                <div class="box-content ul-list-detail">
                    <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                </div>
            </div>
        </div>
        <div class="mt30">
            <div class="row d-flex flex-wrap">
                <?php if(count($tintuc)>0){?>
                <?php foreach($tintuc as $key=>$value){ ?>
                <div class='item col-3 w-100-m mb20'>
                    <div class="tailieu">
                        <div class="thumb">
                            <a href="javascript:void(0)" title="<?= $value['ten_'.$lang]?>">
                                <img src="<?= _thumbs?>/285x198x1/<?= _upload_baiviet_l.$value['photo']?>"
                                    alt="<?= $value['ten_'.$lang]?>" />
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="name line-2"><?= $value['ten_'.$lang]?></h3>
                            <p class="dett line-3">
                                <?= $value['mota_'.$lang]?>
                            </p>
                            <div class="d-flex justify-content-center mt10">
                                <a href="<?= _upload_baiviet_l.$value['download']?>" download>
                                    Tải về
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php }else{?>
                <div class="item col-12 t-center">
                    Nội dung đang cập nhật....
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>