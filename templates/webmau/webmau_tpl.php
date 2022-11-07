<section class="section-realty mt20 mb20 animated fadeInDown">
    <div class="container">
        <div class="row">
            <div class="item col-12">
                <div class="title-default t-center mb20 p-relative">
                    <h1>
                        <span> <?=$seo->getSeo('h1')?></span>
                    </h1>
                </div>
            </div>
            <div class="item col-12">
                <div class="box-content t-center">
                    <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                </div>
            </div>
        </div>
        <div class="row10 mt30">
            <?php if(count($tintuc)>0){?>
            <div class="box-row d-flex flex-wrap" data-paging-load>
            <?php foreach($tintuc as $k=>$v){ ?>
                <div class="item10 col-3 w-100-m mb20 animated fadeIn">
                    <div class="web-mau-card">
                        <a class="img" href="<?=$v['link']?>" target="_blank" title="<?=$v['ten_'.$lang]?>">
                            <div class="thumb">
                                <img src="<?=_thumbs?>/330x1046x1/<?=_upload_baiviet_l.$v['photo']?>" alt="<?=$v['ten_'.$lang]?>"/>
                            </div>
                        </a>
                        <div class="info pt10">
                            <h2 class="title-side mona-loop-title line-2">
                                <a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten_'.$lang]?>"><?=$v['ten_'.$lang]?></a>
                            </h2>
                            <div class="btn-order-wrap">
                                <a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten_'.$lang]?>">
                                    <span class="btn-web-mau primary-btn call-now">Liên hệ ngay</span>
                                    <span class="meta-dim"><?=$row_setting['hotline']?></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
            <div class="item col-12 t-center">
                <a class="more-paging " data-p="1" data-table="baiviet" data-type="web-mau" data-item="<?=$deviceType!='phone' ? $row_setting['page_ne'] : 4?>" data-view=""><span>Xem thêm&nbsp;<i class="fa fa-angle-double-right ml10" aria-hidden="true"></i></span></a>
            </div>
            <?php }else{?>
            <div class="item col-12 t-center">
                Nội dung đang cập nhật....
            </div>
            <?php }?>
        </div>
    </div>
</section>