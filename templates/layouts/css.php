<link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">

<?php

    $css->setCache("cached");
    
    $css->setCss("./assets/css/jssor.css");

    $css->setCss("./assets/css/all.css");

    $css->setCss("./assets/css/animate.css");
    
    $css->setCss("./assets/css/fonts.css");

    $css->setCss("./assets/css/reset.css");

    $css->setCss("./assets/css/cart.css");

    $css->setCss("./assets/css/cafefin.css");

    $css->setCss("./assets/css/style.css?v=".filemtime("./assets/css/style.css"));
    
    $css->setCss('./assets/css/grid.css');

    $css->setCss("./assets/css/main.css");

    $css->setCss("./assets/css/index.css");

    $css->setCss("./assets/plugins/wow/animate.css");
    
    $css->setCss("./assets/css/responsive.css");

    echo $css->getCss();

?>

<style>
@font-face {

    font-family: "magictoolbox-thin";
    font-weight: normal;
    font-style: normal;
    src: url("assets/magiczoomplus/fonts/magictoolbox-thin.eot");
    src: url("assets/magiczoomplus/fonts/magictoolbox-thin.eot?#iefix") format("embedded-opentype"),
        url("assets/magiczoomplus/fonts/magictoolbox-thin.woff") format("woff"),
        url("assets/magiczoomplus/fonts/magictoolbox-thin.ttf") format("truetype"),
        url("assets/magiczoomplus/fonts/magictoolbox-thin.svg#magictoolbox-thin") format("svg");

}

@font-face {

    font-family: 'HEV';

    src: url('assets/images/fonts/hevr.ttf') format('truetype');

}

@font-face {

font-family: 'HEVb';

src: url('assets/images/fonts/hevb.ttf') format('truetype');

}

/* UTM AVO */
@font-face {

    font-family: 'UTM-Avo';

    src: url('assets/images/fonts/font/UTMAvo/UTM-Avo.ttf') format('truetype');

}

@font-face {

    font-family: 'UTMAvo';

    src: url('assets/images/fonts/font/UTMAvo/UTMAvo.ttf') format('truetype');

}

@font-face {

    font-family: 'UTM-AvoBold';

    src: url('assets/images/fonts/font/UTMAvo/UTM-AvoBold.ttf') format('truetype');

}

@font-face {

    font-family: 'UTM-AvoBold_Italic';

    src: url('assets/images/fonts/font/UTMAvo/UTM-AvoBold_Italic.ttf') format('truetype');

}

@font-face {

    font-family: 'UTM-AvoItalic';

    src: url('assets/images/fonts/font/UTMAvo/UTM-AvoItalic.ttf') format('truetype');

}

:root {

    --html-bg-website: <?=$row_setting['color_page']?>;

    --html-cl-website: <?=$row_setting['color_text']?>;
    
    --html-cl2-website: <?=$row_setting['color_phu']?>;

    --html-bg-primary: #E87500;

    --html-bg-gradient: linear-gradient(to right, #FDB71F, #FFE000, #FDB71F);

    --utmavo-normal: 'UTMAvo';

    --utmavo: 'UTM-Avo';

    --utmavo-bold: 'UTM-AvoBold';

    --utmavo-bolditalic: 'UTM-AvoBold_Italic';

    --utmavo-italic: 'UTM-AvoItalic';

}
</style>