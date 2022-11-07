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

                    ?>

                    <div class="col l-4 m-4 c-6 mb20 d-flex flex-column">

                    <div class="box_img_product">
                            <?=$func->addHrefImg($func->getCom($v["type"]).'/'.$v["tenkhongdau"],_upload_baiviet_l.$v["photo"],$v["ten"],100,142); ?>
                            <div class="link_to_cart _add_to_cart" data-id="<?=$v['id']?>"><?=_themvaogio?></div>
                        </div>
                        <div class="box_title_price_product">
                            <div class="box_title_product">
                            <?=$v["ten_$lang"]?>
                            </div>
                            <div class="box_price_product">
                                <span class="price">
                                    <?php if ($v["giacu"]!=0) {?>
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span>
                                            <?=($v["giacu"]!=0) ? $func->changeMoney($v["giacu"],$lang):'';?>
                                        </span>
                                    </del>
                                    <?php } ?>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span>
                                            <?=($v["mucgia"]!=0) ? $func->changeMoney($v["mucgia"],$lang):'Liên hệ';?>
                                        </span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                    </div>

                <?php }?>

                <div class="item col-12 justify-content-center">
                    <?=$paging?>
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