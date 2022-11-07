<?php include _layouts."slider_tpl.php"; ?>

<section class="wrapper-bookroom__pages">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12 mt30">
                
                <div class="breadcumb">

                    <?=$str_breadcrumbs?>

                </div>
                
            </div>

            <div class="col l-12 m-12 c-12">

                <div class="title-default t-center mb20 p-relative title-default__bookroom--modifiers">

                    <h1>

                        <span>

                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>
                            
                        </span>

                    </h1>

                </div>

            </div>

            <?php if($seo->getSeo('subject')!=''){ ?>

            <div class="col l-12 m-12 c-12">

                <div class="box-content ul-list-detail">

                    <?=htmlspecialchars_decode($seo->getSeo('subject'))?>

                </div>

            </div>

            <?php }?>

        </div>

        <div class="mt30">

        <?php if(isset($_GET['loaiphong']) || isset($_GET['songuoi']) || isset($_GET['time_start']) || isset($_GET['time_end'])){
            $params = "";
            $params .= (isset($_GET['loaiphong']))?"&loaiphong=".$_GET['loaiphong']:"";
            $params .= (isset($_GET['songuoi']))?"&songuoi=".$_GET['songuoi']:"";
            $params .= (isset($_GET['time_start']))?"&time_start=".$_GET['time_start']:"";
            $params .= (isset($_GET['time_end']))?"&time_end=".$_GET['time_end']:"";
            ?>
            <input type="hidden" id="params" value="<?= $params?>"/>
        <?php }?>


        <?php if(count($tintuc)>0){?>

            <div class="row" id="wrapper-bookroom__pages-all">

                <?php foreach($tintuc as $k => $v){ ?>

                <div class="col l-6 m-6 c-12 mb30 mb-t-16 d-flex flex-column">

                    <div class="wrapper-bookroom__pages-box d-flex flex-column p-relative">

                        <div class="wrapper-bookroom__pages-box-outline"></div>

                        <div class="wrapper-bookroom__pages-box-img">

                            <a href="<?=$func->getCom($v["type"])?>/<?=$v["tenkhongdau"]?>" class="hover-left d-block" title="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>

                                <img src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>">

                            </a>

                        </div>

                        <div class="wrapper-bookroom__pages-box-detail d-flex flex-column">

                            <h3 class="wrapper-bookroom__pages-box-detail-title line-2">

                                <a href="<?=$func->getCom($v["type"])?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>"><?=$v["ten_$lang"]?></a>

                            </h3>

                            <div class="wrapper-bookroom__pages-box-detail-bookroom">

                                <span class="wrapper-bookroom__pages-box-detail-bookroom-price"><?= ($v["mucgia"] !=0) ? 'Giá từ '.$func->FormatBDSMoney($v["mucgia"]) :'Liên hệ';?></span>

                                <div class="wrapper-bookroom__pages-box-detail-bookroom-btn">

                                    <a href="javascript:void(0)" title="<?=$v["ten_$lang"]?>" class="js-booking" data-id="<?=$v["id"]?>" data-lang="<?= $lang?>"><?=_datphong?></a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <?php }?>

            </div>

            <?php if($com!='tim-kiem'){ ?>

            <div class="row">

                <div class="col l-12 m-12 c-12 t-center">

                    <a class="wrapper-bookrom__btn-viewdetail more-paging mt40 mb40" data-p="1" style="display:inline-block;" data-table="baiviet" data-type="dat-phong" data-item="<?=$row_setting['page_bookroom']?>" data-view-allroom
                        
                    data-target="#wrapper-bookroom__pages-all" type-id="0" data-idlist="0"><?=_xemthem?></a>

                </div>

            </div>

            <?php }?>

            <?php }else{?>

                <div class="row">

                    <div class="col l-12 m-12 c-12 t-center">
                        <?=_noidungdangcapnhat?>
                    </div>

                </div>

            <?php }?>

        </div>

    </div>

</section>