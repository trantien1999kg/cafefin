<header class="header-top-wrap d-none-m">

    <div class="grid wide">

        <div class="row align-items-center">

            <div class="col l-4">

                <div class="header-top__introduct"><marquee behavior="" direction=""><?=$row_setting["slogan_$lang"];?></marquee></div>
            
            </div>

            <div class="col l-8">

                <ul class="header-top-wrap__list d-flex align-items-center justify-content-end">

                    <li class="header-top-wrap__item">

                        <a href="<?=$func->currentLangLink('vi')?>" title="<?=_vi?>" class="header-top-wrap__link">

                            <img src="./assets/images/vi_flag.gif" alt="">

                        </a>

                    </li>

                    <li class="header-top-wrap__item">

                        <a href="<?=$func->currentLangLink('en')?>" title="<?=_en?>" class="header-top-wrap__link">

                            <img src="./assets/images/flag_en.gif" alt="">

                        </a>

                    </li>

                    <li class="header-top-wrap__item">

                        <a href="<?=$func->currentLangLink('cn')?>" title="<?=_cn?>" class="header-top-wrap__link">

                            <img src="./assets/images/cn_flag.gif" alt="Icon cn">

                        </a>

                    </li>

                </ul> 

            </div>
            
        </div>

    </div>

</header>
