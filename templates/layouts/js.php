<script type="text/javascript">

    var _FRAMEWORK=_FRAMEWORK || {};

    var _FRAMEWORK=_FRAMEWORK || {};

    var _KFRAMEWORK = _KFRAMEWORK || {};

    var _ROOT = "<?=$https_config?>";

    var _LANG = "<?=$lang?>";

    var _TOC= "<?=$row_detail['mucluc']?>";

    var _LIST_TOC="<?=$row_toc?>";

    var _DOMAIN='<?=$_GET["domain"]?>';

    var _PLACEHOLDER = [ "Tìm kiếm ..." ];

    var comSearch = '<?=$func->getCom('tim-kiem')?>';

    var PAGE_INDEX = <?= $row_setting['page_in']?>;

    var PLACEHOLDER = ['<?=_tukhoacantim?>'];

</script>

<?php

$js->setCache("cached");

if($source =='index'){

    $js->setJs("./assets/js/jssor_1_slider_init.js");

    $js->setJs("./assets/js/jssor.slider-25.2.0.min.js");

}


$js->setJs("./assets/plugins/jquery-confirm/jquery-confirm.js");

$js->setJs("./assets/plugins/chaychu/jquery.lettering.js");

$js->setJs("./assets/plugins/chaychu/jquery.textillate.js");

$js->setJs("./assets/js/functions.js");

$js->setJs("./assets/js/placeholderWriter.js");


$js->setJs("./assets/plugins/slick/slick.min.js");


$js->setJs("./assets/plugins/fancybox/dist/jquery.fancybox.min.js");

$js->setJs("./assets/js/lang/$lang.js");

$js->setJs('./assets/plugins/wow/wow.min.js');

$js->setJs("./assets/js/Kframework.js");

$js->setJs("./assets/js/index.js");


$js->setJs("./assets/js/carts.js");

echo $js->getJs();

?>

<script src="https://kit.fontawesome.com/e65605e908.js" crossorigin="anonymous"></script>

<script>

    var fired = false;

    window.addEventListener("scroll", function() {

        if ((document.documentElement.scrollTop != 0 && fired === false) || (document.body.scrollTop != 0 &&

                fired === false)) {

            (function(d, s, id) {

                var js, fjs = d.getElementsByTagName(s)[0];

                if (d.getElementById(id)) return;

                js = d.createElement(s);

                js.id = id;

                js.src =

                    "https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=<?=$row_setting['facebook_id']?>&autoLogAppEvents=1";

                fjs.parentNode.insertBefore(js, fjs);

            }(document, 'script', 'facebook-jssdk'));

            fired = true;

        }

    }, true);

</script>

<?=htmlspecialchars_decode($row_setting['vchat'])?>

<address class="vcard hidden">

    <span class="org"><?=$row_setting['name_'.$lang]?></span>

    <span class="adr"><?=$row_setting['address_'.$lang]?></span>

    <span class="street-address"><?=$row_setting['address_'.$lang]?></span>

    <span class="locality"><?=$row_setting['map_marker']?></span>

    <span class="postal-code">700000</span>

    <span class="country-name">Việt Nam</span>

    <span class="tel"><?=$row_setting['dienthoai']?></span>

</address>