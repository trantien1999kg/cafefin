<aside class="<?php if($source!='index'){echo 'box-shadown__tpl unset--pabsolute';} ?> wrappers-aside__header">

    <header class="element-header d-none-m d-none-tablet pt5 pb5 menu-sticky">

        <div class="grid wide">

            <div class="row align-items-center">

                <div class="item col-2">

                    <?=$func->addHrefImg('',_upload_hinhanh_l.$logo['photo_'.$lang],'Trang chủ',142,60); ?>

                </div>

                <div class="item col-6">

                    <div class="row d-flex flex-wrap align-items-center">

                        <div class="l-12">

                            <?php include _layouts."menu.php";?>

                        </div>

                    </div>

                </div>

                <div class="item col-4 d-flex align-items-center justify-content-end">

                    <div class="box_cart_header p-relative">
                        <a href="<?= $lang ?>/carts?src=gio-hang"><i class="fas fa-shopping-bag"></i></a>
                        <span class="wrapper-top__right-cart-aside-qty_header wrapper-top__right-cart-aside-qty--modifiers view-cart"><?=$cart->getTotalQuality()?></span>
                    </div>
                    <li class="p-relative list_lang"><?php if($lang == 'vi'){ echo _tiengviet.'<img src="./assets/images/vi_flag.gif" class="ml5" style="width: 3rem;" alt="'._tienganh.'">' ;}if($lang == 'en'){ echo _tienganh.'<img src="./assets/images/en_flag.gif" class="ml5" style="width: 3rem;" alt="'._tiengviet.'">' ; } ?>
                    <i class="fa-regular fa-angle-up ml5"></i>
                        <ul class="header-top-wrap__list d-flex align-items-center justify-content-end">

                            <li class="header-top-wrap__item">

                                <a href="<?=$func->currentLangLink('vi')?>" title="<?=_vi?>"
                                    class="header-top-wrap__link">

                                    <img src="./assets/images/vi_flag.gif" alt="<?=_tiengviet?>"><?=_tiengviet?>

                                </a>

                            </li>

                            <li class="header-top-wrap__item">

                                <a href="<?=$func->currentLangLink('en')?>" title="<?=_en?>"
                                    class="header-top-wrap__link">

                                    <img src="./assets/images/en_flag.gif" alt="<?=_tienganh?>"><?=_tienganh?>

                                </a>

                            </li>



                        </ul>
                    </li>

                    <li class="p-relative items-lastchild ml15">

                        <span class="search-Click">

                            <i class="fa-light fa-magnifying-glass"
                                style="color: var(--html-cl-website); font-size: 24px; font-weight: 500; margin-top: -5px;"></i>

                        </span>

                        <div class="nav-menu__formsearchheader d-flex align-items-center">

                            <input role="search-input" type="text" name="keywords" id="keywordspc"
                                placeholder="Tìm kiếm...">

                            <button class="nav-menu__formsearchheader-button" data-btn-search-pc type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>

                        </div>

                    </li>
                    <div class="box_contact_header ml15">
                        <a href="lien-he" class="contact_header"><i
                                class="fa-light fa-phone"></i>&nbsp<?=_contactus?></a>
                    </div>

                </div>

            </div>

        </div>

    </header>

</aside>