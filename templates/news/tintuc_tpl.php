<section class="section-news mt20">
    <div class="container">
        <div class="box" element-type="line">
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
                    <div class='item col-6 w-100-m mb30'>
                        <div class="news">
                            <div class="thumb">
                                <a href="<?= $value['tenkhongdau']?>" title="<?= $value['ten_'.$lang]?>">
                                    <img src="<?= _thumbs?>/585x328x1/<?= _upload_baiviet_l.$value['photo']?>" class="col-12"
                                        alt="<?= $value['ten_'.$lang]?>" />
                                </a>
                            </div>
                            <div class="content">
                                <div class="d-flex align-items-center mb10">
                                    <a href="<?= $value['type']?>" title="<?= $title_seo?>" class="link-cato">
                                        <?= $title_seo?>
                                    </a>
                                    <p class="calendar"><?= date("d/m/Y",$value['ngaytao'])?></p>
                                </div>
                                <a href="<?= $value['tenkhongdau']?>" title="<?= $value['ten_'.$lang]?>">
                                    <h3 class="name line-2"><?= $value['ten_'.$lang]?></h3>
                                </a>
                                <p class="dett line-6">
                                    <?= $value['mota_'.$lang]?>
                                </p>
                                <a href="<?= $value['tenkhongdau']?>" title="<?= $value['ten_'.$lang]?>" class="viewmore">
                                    Xem thêm <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                        <?php include _layouts."right.php"; ?>
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
    </div>
</section>