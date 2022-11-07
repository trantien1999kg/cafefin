<!DOCTYPE html>

<html lang="<?=$lang?>" itemscope itemtype="http://schema.org/WebSite">

<head>

    <?php include _source.'meta.php' ?>

    <?php include _layouts."css.php"; ?>
    <script src="assets/js/all.js"></script>
    <?php if(isset($_GET['link_direct'])){?>
    <script>
    window.onload = function() {
        window.history.pushState('<?= $func->getCurrentPageURL()?>', '<?= $title_seo?>',
            '<?= $_GET['link_direct']?>')
    }
    </script>
    <?php }?>
</head>

<body itemscope itemtype="https://schema.org/WebPage">

    <?=$row_setting["code_body"] ?>

    <?php include _layouts."seo.php"; ?>

    <div id="wrapper" <?php if($source=='index'){ ?> class="wow fadeInDown" data-wow-offset="50" data-wow-duration="3"
        data-wow-delay="0.2s" <?php }    ?>>

        <?php include _layouts."top_mobile.php";?>

        <?php include _layouts."menu_mobile.php";?>

        <?php if($source!='index'){ include _layouts.'header.php'; } ?>

        <?php if($source=='index'){ ?>

        <?php include _layouts."slider.php"; ?>

        <?php include _layouts."popup.php"; ?>

        <?php }?>

        <div class="o-hidden">

            <?php if($source != 'index'){?>
            <div>


                <div class="breadcumb" style="background:url('<?= _upload_hinhanh_l.$bg_breadcrumb['photo']?>') no-repeat fixed center/cover;    padding-top: 190px;
padding-bottom: 140px;">

                    <div class="title-default mb20 t-center p-relative">

                        <h1>

                            <span>

                                <?php if($seo->getSeo('h1') != ""){?>
                                <?=$seo->getSeo('h1')?>
                                <?php }else{ echo $title_seo;}?>

                            </span>

                        </h1>

                    </div>

                    <?=$str_breadcrumbs?>



                </div>


            </div>
            <?php } ?>

            <?php include _template.$template."_tpl.php";?>

            <?php include _layouts."footer.php"; ?>

        </div>

    </div>

    <?php include _layouts."call.php"; ?>

    <?php include _layouts."js.php"; ?>

    <div class="mask-overlay"></div>

</body>



</html>