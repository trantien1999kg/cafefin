<div class="box-modal-menu d-none d-block-tablet d-block-tl d-block-m" id="menuSide">
    <div class="p-relative">
        <div class="box_logo_menu_mobile">
            <?=$func->addHrefImg('',_upload_hinhanh_l.$logo['photo_'.$lang],'Trang chủ',142,60); ?>
        </div>
        <ul class="list menu_list">
            <li class="<?php if($com=='' || $com=='index') echo ' active';?>">
                <a href="" title="<?= _home?>">
                    <span><?= _home?></span>
                </a>
            </li>
            <li class="<?php if($com=='gioi-thieu') echo ' active';?> p-relative">

                <div class="d-flex align-items-center p-relative">
                    <a href="javascript:void(0)" title="<?=_vechungtoi?>">
                        <span><?=_vechungtoi?></span>
                    </a>
                    <a href="javascript:" class="toggle-btn ic-arrow">
                        <span></span>
                    </a>
                </div>

                <ul class="inner ul-list-none" style="display: none;">

                    <li>

                        <div class="d-flex p-relative">

                            <a href="<?= $func->getCom('gioi-thieu')?>" title="<?= _gioithieu?>"><?= _gioithieu?></a>


                        </div>

                    </li>

                    <li>

                        <div class="d-flex p-relative">

                            <a href="<?= $func->getCom('ho-so-nang-luc')?>"
                                title="<?= _hosonangluc?>"><?= _hosonangluc?></a>

                        </div>

                    </li>

                </ul>
            </li>
            <li class="<?php if($com=='san-pham') echo ' active';?> p-relative">
                <div class="d-flex p-relative">
                    <a itemprop="url" href="<?= $func->getCom('san-pham')?>"><?=_sanpham?></a>
                    <?php if(count($list_c1_sp)>0){ ?>
                    <a href="javascript:" class="toggle-btn ic-arrow">
                        <span></span>
                    </a>
                    <?php }?>
                </div>
                <ul class="inner ul-list-none" style="display: none;">

                    <?php foreach($list_c1_sp as $key => $value){
                        
                        $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($value['id']));

                        ?>

                    <li>
                        <div class="d-flex p-relative">
                            <a href="<?= $func->getCom($value["type"])?>/<?= $value['tenkhongdau']?>"
                                title="<?= $value['ten']?>"><?= $value['ten']?></a>
                            <?php if(count($c2)>0){?>
                            <a href="javascript:" class="toggle-btn ic-arrow">
                                <span></span>
                            </a>
                            <?php }?>
                        </div>
                        <ul class="inner ul-list-none" style="display: none;">

                            <?php foreach($c2 as $key => $vc2){
                                
                                $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($vbm['id']));
                                
                                ?>

                            <li>
                                <div class="d-flex p-relative">
                                    <a href="<?= $func->getCom($value["type"])?>/<?= $value['tenkhongdau']?>/<?=$vc2["tenkhongdau"]?>"
                                        title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>
                                </div>
                            </li>

                            <?php }?>

                        </ul>
                    </li>

                    <?php }?>
                </ul>
            </li>

            <li class="<?php if($com=='tin-tuc') echo ' active';?> p-relative">
                <div class="d-flex p-relative">
                    <a itemprop="url" href="<?= $func->getCom('tin-tuc')?>"><?=_tintuc?></a>
                    <?php if(count($list_c1_tt)>0){?>
                        <a href="javascript:" class="toggle-btn ic-arrow">
                        <span></span>
                    </a>
                    <?php }?>
                </div>
                <ul class="inner ul-list-none" style="display: none;">

                    <?php foreach($list_c1_tt as $key => $value){
                        
                        $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($value['id']));

                        ?>

                    <li>
                        <div class="d-flex p-relative">
                            <a href="<?= $func->getCom($value["type"])?>/<?= $value['tenkhongdau']?>"
                                title="<?= $value['ten']?>"><?= $value['ten']?></a>
                            <?php if(count($c2)>0){?>
                            <a href="javascript:" class="toggle-btn ic-arrow">
                                <span></span>
                            </a>
                            <?php }?>
                        </div>
                        <ul class="inner ul-list-none" style="display: none;">

                            <?php foreach($c2 as $key => $vc2){
                                
                                $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($vbm['id']));
                                
                                ?>

                            <li>
                                <div class="d-flex p-relative">
                                    <a href="<?= $func->getCom($value["type"])?>/<?= $value['tenkhongdau']?>/<?=$vc2["tenkhongdau"]?>"
                                        title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>
                                </div>
                            </li>

                            <?php }?>

                        </ul>
                    </li>

                    <?php }?>
                </ul>
            </li>


            <li>
                <div class="d-flex align-items-center">
                    <a href="<?= $func->getCom('lien-he')?>" title="<?= _lienhe?>">
                        <span><?= _lienhe?></span>
                    </a>
                </div>
            </li>

        </ul>
        <div class="box_cart_header p-relative">
                        <a href="<?= $lang ?>/carts?src=gio-hang"><i class="fas fa-shopping-bag"></i></a>
                        <span class="wrapper-top__right-cart-aside-qty_header wrapper-top__right-cart-aside-qty--modifiers view-cart"><?=$cart->getTotalQuality()?></span>
                    </div>
    </div>

</div>