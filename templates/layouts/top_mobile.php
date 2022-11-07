<section class="area-top-m clearfix  <?= ($source == 'index')?"menu-sticky":"sticky"?> d-none d-block-tl d-block-tablet d-block-m">

    <div class="mobi-top">

        <div class="menu-btn">

            <a href="javascript:void(0)" data-target="#menuSide" id="tool-2" class="js-mobi-tool">

                <span class="bars-menu mobi-tool-act"></span>

            </a>

        </div>

        <div class="logo">
            
            <a href="" class="p-relative">

                <img class="autoimg" width="70" height="70" src="<?=_upload_hinhanh_l.$logo_mobile["photo"]?>" alt="Trang chủ"
                onerror="this.src='images/no-image.jpg'" />

                <div class="star-box">

                    <img src="./assets/images/saolaplanh.png" class="saolaplanh star-animate" alt="Sao lấp lánh">

                </div>

            </a>
            
        </div>

        <div class="search d-none-m d-block-tablet d-block-tl">

            <div class="p-relative">

                <div class="box-search-mobile  p-relative">

                    <input type="text" name="search" id="keywords" placeholder="Tìm kiếm"
                        data-input-search data-target="desktop" autocomplete="off" />

                    <button type="button" data-btn-search data-target="#keywords"><i
                            class="fal fa-search"></i></button>

                </div>

                <div class="search" data-box="desktop">

                </div>

            </div>

        </div>

        <div class="area-top-m__language">

            <ul class="area-top-m__language-list d-flex">

                <li class="area-top-m__language-items">

                    <a href="<?=$func->currentLangLink('vi')?>" title="<?=_vi?>" class="area-top-m__language-links">

                        <img src="./assets/images/vi_flag.gif" style="width: 40px;height:26px" alt="Tiếng việt">

                    </a>

                </li>

                <li class="area-top-m__language-items">

                    <a href="<?=$func->currentLangLink('en')?>" title="<?=_en?>" class="area-top-m__language-links">

                        <img src="./assets/images/en_flag.gif" style="width: 40px;height:26px" alt="Tiếng anh">

                    </a>

                </li>

                

            </ul>

        </div>

    </div>

</section>