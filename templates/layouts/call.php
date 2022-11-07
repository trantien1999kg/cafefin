
<div class="fab-wrapper d-none d-block-m">

    <input id="fabCheckbox" type="checkbox" class="fab-checkbox">

    <label class="fab" for="fabCheckbox" id="fabCheckboxClick">

        <i class="icon-cps-fab-menu"></i>

    </label>

    <div class="box-social-mobile d-none d-block-m">

        <div class="box-social">
            <ul>
                <li style="transition-delay:0.3s">

                    <a href="tel:<?= str_replace('.','',str_replace(' ','',$row_setting["hotline"])) ?>" class="view-click" data-id="23" title="<?=_hotline?>">
                        <div style="display:flex;justify-content:center;align-items:center">
                            <div class="box-x">
                                <div class="icon-social icon-phone" style="background-color:#0f9d58">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="box--phone">
                                <div class="box-text-social">
                                    <b><?=_hotline?></b>
                                </div>
                            </div>
                        </div>
                    </a>

                </li>

                <li style="transition-delay:0.5s">

                    <a href="http://zalo.me/<?=str_replace('.','',str_replace(' ','',$row_setting["sozalo"]))?>" title="<?=_chatzalo?>">

                        <div style="display:flex;justify-content:center;align-items:center">
                            <div class="box-x">
                                <div class="icon-social icon-phone">
                                    <img src="./assets/images/icons8-zalo.svg" alt="zalo">
                                </div>
                            </div>
                            <div class="box--phone">
                                <div class="box-text-social">
                                    <b><?=_chatzalo?></b>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li style="transition-delay:0.6s">
                    <a href="https://m.me/<?=$row_setting['linkmessage']?>" target="_blank" title="<?=_chatfacebook?>">
                        <div style="display:flex;justify-content:center;align-items:center">
                            <div class="box-x">
                                <div class="icon-social icon-phone">
                                    <img src="./assets/images/icons8-facebook-messenger.svg" alt="Facebook">
                                </div>
                            </div>
                            <div class="box--phone">
                                <div class="box-text-social">
                                    <b><?=_chatfacebook?></b>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li style="transition-delay:0.7s">
                    <a href="<?=$row_setting["iframe_map1"]?>" title="Chat zalo" target="_blank">
                        <div style="display:flex;justify-content:center;align-items:center">
                            <div class="box-x js-map">
                                <div class="icon-social icon-phone js-map">
                                    <img src="./assets/images/icons8-google-maps.svg" alt="Map">
                                </div>
                            </div>
                            <div class="box--phone">
                                <div class="box-text-social">
                                    <b><?=_chiduong?></b>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>

<style>

a.fab-action.fab-action-1 {
    font-size: 30px;
    font-weight: bold;
    color: #fff;
    padding: 5px 0px;
}
section.elementor-copy {
    margin-bottom: 44px;
}
.box-social-mobile {
    position: fixed;
    bottom: 80px;
    left: 15px;
    z-index: 123;
    visibility: hidden;
    opacity: 0;
}
.box-social ul li {
    display: flex;
    align-items: center;
    margin-bottom: 5px;
    transition: all 0.4s;
    opacity: 0;
    visibility: hidden;
    border: 2px solid #ffca00;
    padding: 0px 10px 0px 10px;
    background-color: #fff;
    border-radius: 10px;
}
.box-x {
    border-right: 2px solid #ffca00;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.box-text-social {
    min-width: 130px;
    padding-left: 10px;
    font-size: 16px;
}
.icon-social.icon-phone {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    margin-right: 10px;
    justify-content: center;
    border-radius: 50%;
    font-size: 20px;
    color: #fff;
}

.box-social-mobile.active {
    visibility: visible;
    opacity: 1;
}
.box-social-mobile.active .box-social ul li {
    transition: all 0.4s;
    opacity: 1;
    visibility: visible;
}
</style>


