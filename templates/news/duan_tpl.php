<section class="section-news mt20 mb20">
    <div class="container">
        <div class="row">
            <div class="item col-12">
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
            <div class="item col-12">
                <div class="box-content ul-list-detail">
                    <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                </div>
            </div>
        </div>
        <div class="mt30">
            <div class="row d-flex flex-wrap">
                <?php if(count($tintuc)>0){?>
                <?php foreach($tintuc as $k=>$v){ ?>
                <div class='item col-4 w-100-m mb20'>
                    <div class="duan">
                        <div class="thumb">
                            <figure class="shine">
                                <a href="<?= $v['tenkhongdau']?>" title="<?= $v['ten_'.$lang]?>">
                                    <img src="<?= _thumbs?>/390x330x1/<?= _upload_baiviet_l.$v['photo']?>"
                                        class="col-12" alt="<?= $v['ten_'.$lang]?>" />
                                </a>
                            </figure>
                        </div>
                        <div class="content">
                            <a href="<?= $v['tenkhongdau']?>" title="<?= $v['ten_'.$lang]?>">
                                <p class="name line-1"><?= $v['ten_'.$lang]?><p>
                            </a>
                            <p class="dett line-3">
                                <?= $v['mota_'.$lang]?>
                            </p>
                            <a href="<?= $v['tenkhongdau']?>" title="<?= $v['ten_'.$lang]?>" class="viewmore">
                                Xem thêm
                            </a>
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