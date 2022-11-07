<section class="bg-white pt30">

    <div class="p-relative">

        <span class="constr-slider__prev constr-slider__btn" id="product-related__prev">

            <i class="fa-light fa-angle-left"></i>

        </span>

        <span class="constr-slider__next constr-slider__btn" id="product_related__next">

            <i class="fa-light fa-angle-right"></i>

        </span>

        <div class="owl-carousel owl-theme owl-carousel-loop product-related mb20" data-height="640" data-dot="0"
            data-nav="0" data-loop='0' data-play='1' data-lg-items='3' data-md-items='2' data-sm-items='2'
            data-xs-items="2" <?php if($deviceType=='computer'){ ?> data-margin='20' <?php }else{ ?> data-margin='8'
            <?php }?> data-deplay="5000">

            <?php  foreach ($tintuc as $value){

                $alias = $func->getAlias($value['id_list'],'baiviet_list',$func->getCom($value['type']));
                
                ?>

<div class="col-12 box_product fadeInUp wow" data-wow-delay="<?= $k * 0.1?>s">
                        <div class="box_img_product">
                            <?=$func->addHrefImg( $func->getCom($value["type"]).'/'.$value["tenkhongdau"],'resize1/320x454/1/'._upload_baiviet_l.$value["photo"],$value["ten"],384,400); ?>
                            <div class="link_to_cart _add_to_cart" data-id="<?=$value['id']?>"><?=_themvaogio?></div>

                        </div>
                        <div class="box_title_price_product">
                            <div class="box_title_product">
                                <?=$value["ten_$lang"]?>
                            </div>
                            <div class="box_price_product">
                                <span class="price">
                                    <?php if ($value["giacu"]!=0) {?>
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span>
                                            <?=($value["giacu"]!=0) ? $func->changeMoney($value["giacu"],$lang):'';?>
                                        </span>
                                    </del>
                                    <?php } ?>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span>
                                            <?=($value["mucgia"]!=0) ? $func->changeMoney($value["mucgia"],$lang):'Liên hệ';?>
                                        </span>
                                    </ins>
                                </span>
                            </div>
                        </div>
                    </div>

            <?php }?>

        </div>

    </div>

</section>