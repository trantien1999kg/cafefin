<footer class="section-footer pt30 fadeInLeft wow" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

    <div class="container pb80">

        <div class="col-12 item box_top_footer">
            <div class="box_logo_footer">
                <?=$func->addHrefImg('',_upload_hinhanh_l.$logofooter['photo'],'Trang chủ',142,60); ?>
            </div>
            <div class="mt20 form-footer__top d-flex align-items-center">

                <input type="text" name="txt-email__footer" placeholder="<?=_nhapemailcuaban?>">

                <a href="javascript:void(0)" class="btn-footer__top" id="btn-signupfor">
                    <?=_dangky?>
                </a>

            </div>
        </div>

        <div class="row d-flex flex-wrap mt20">

            <div class="item col-4 w-100-m mb20">

                <div class="p-relative box_width_footer">

                    <span class="cl-white"><?=$row_setting["name_$lang"]?></span>

                </div>

                <div class="desc-footer mt20">

                    <div class="desc_mota"><?= htmlspecialchars_decode($footer["mota"])?></div>

                </div>



            </div>



            <div class="item col-8 grid_footer w-100-m pt20 mb20">
                <div class="col-12">
                    <div class="title-footer p-relative">
                        <span class="cl-white"><?=_vechungtoi?></span>
                    </div>
                    <div class="desc-footer mt30">
                        <ul class="ul-list-none">
                            <?php foreach($about_footer as $key => $value){?>
                            <li>
                                <a href="<?= $value["link"]?>"
                                    title="<?= $value['ten']?>">
                                     <?= $value['ten']?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="title-footer p-relative">
                        <span class="cl-white"><?=_chinhsach?></span>
                    </div>
                    <div class="desc-footer mt30">
                        <ul class="ul-list-none">
                            <?php foreach($chinhsach as $key => $value){?>
                            <li>
                                <a href="<?= $func->getCom($value["type"])?>/<?= $value['tenkhongdau']?>"
                                    title="<?= $value['ten']?>">
                                     <?= $value['ten']?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="title-footer p-relative">
                        <span class="cl-white"><?=_support?></span>
                    </div>
                    <div class="desc-footer desc_support mt30">
                    <?= htmlspecialchars_decode($support["mota"])?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="title-footer p-relative">
                        <span class="cl-white"><?=_sanpham?></span>
                    </div>
                    <div class="desc-footer mt30">
                        <ul class="ul-list-none">
                            <?php foreach($produce_footer as $key => $value){?>
                            <li>
                                <a href="<?= $value["link"]?>"
                                    title="<?= $value['ten']?>">
                                     <?= $value['ten']?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="copyright pt10 pb10">
        <div class="container">
            <div class="row d-flex align-items-center row-border__top">
                <div class="item col-12 w-100-m box" type="copy">
                    <div class="box-copyright t-center cl-white">
                    © Copyright 2022 & All rights reserved by i-web
                    </div>
                    <div class="box_social">
                    <?=$func->getSocial($mxh);?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</footer>

<div class="tool-pc d-none-m d-none-tablet d-none-tl">
    <ul>
    <li class="p-relative">
            <a href="carts?src=gio-hang" title="Giỏ hàng">
                <i class="tool-cart"></i>
            </a>
            <span class="wrapper-top__right-cart-aside-qty wrapper-top__right-cart-aside-qty--modifiers view-cart"><?=$cart->getTotalQuality()?></span>
        </li>
        <li>
            <a href="http://zalo.me/<?=str_replace('.','',str_replace(' ','',$row_setting['sozalo']))?>" rel="nofollow"
                target="_blank">
                <i class="tool-zalo"></i>
            </a>
        </li>
        <li>
            <a href="https://m.me/<?=$row_setting['linkmessage']?>" rel="nofollow" target="_blank">
                <i class="tool-messenger"></i>
            </a>
        </li>
        <li class="to-top-pc">
            <a href="tel:<?=str_replace('.','',str_replace(' ','',$row_setting['hotline']))?>" rel="nofollow">
                <i class="tool-phone" aria-hidden="true" title="Gọi ngay"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" rel="nofollow">
                <i class="icons-tool tool-address js-map"></i>
            </a>
        </li>
        
    </ul>
</div>