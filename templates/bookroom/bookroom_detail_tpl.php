<?php 

    $desc_datphong = $func->OneDataDes('mt-chitietdatphong','object'); //Mô tả tiện ích

    $listDatPhong = $func->AllDataList('id,sogiuong,songuoi,dientich,mucgia,giacu,photo,mota_vi as mota,','dat-phong',' and noibat=1',null,'array');

?>

<?php include _layouts."slider_tpl.php"; ?>

<section class="wrapper-productdetail">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12 mt30">

                <div class="breadcumb">

                    <?=$str_breadcrumbs?>

                </div>
                
            </div>

            <div class="col l-12 m-12 c-12 mb30">

                <div class="wrapper-productdetail__title">

                    <h1 class="wrapper-productdetail__title-name">

                        <span><?=$row_detail['ten_'.$lang]?></span>

                    </h1>

                </div>

            </div>

            <div class="col l-10 m-10 c-12 mb30">

                <div class="img-top">

                    <a href="<?=_upload_baiviet_l.$row_detail['photo']?>" data-fancybox="images" >

                        <img loading="lazy" class="col-12" loading="lazy" src="<?=_upload_baiviet_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>" style="width:100%;height: auto;aspect-ratio: 1152 / 645;object-fit: cover;"/>

                    </a>

                </div>

            </div>

            <div class="col l-2 m-2 c-12 mb30">

                <div id="scroll-img__right" class="d-none-m">

                    <?php foreach($photos as $key => $pts){ ?>

                    <div class="wrapper-productdetail__box-imgsmall mb20">

                        <a href="<?=_upload_baiviet_l.$pts['photo']?>" data-fancybox="images" class="d-block">

                            <img loading="lazy" src="<?=_upload_baiviet_l.$pts["photo"]?>" alt="<?=$row_detail['ten_'.$lang]?>" <?=$func->errorImg()?>>

                        </a>

                    </div>

                    <?php }?>

                </div>

                <div class="d-none d-block-m">

                    <div class="owl-carousel owl-theme owl-carousel-loop in-home" data-height="640" data-dot="0" data-nav="0"
                    data-loop="1" data-play="1" data-lg-items="1" data-md-items="2" data-sm-items="1" data-xs-items="2"
                    data-margin='20' data-deplay="3000">

                    <?php foreach($photos as $key => $pts){ ?>

                        <div class="wrapper-productdetail__box-imgsmall mb20">

                            <a data-zoom-id="Zoom-1" href="<?=_upload_baiviet_l.$pts['photo']?>" data-image="thumbs/1152x655x1/<?=_upload_baiviet_l.$pts['photo']?>" class="d-block">

                                <img loading="lazy" src="<?=_upload_baiviet_l.$pts["photo"]?>" alt="<?=$row_detail['ten_'.$lang]?>" <?=$func->errorImg()?>>

                            </a>

                        </div>

                    <?php }?>

                    </div>

                </div>

            </div>

            <div class="col l-12 m-12 c-12">

                <div class="row">

                    <div class="col l-8 m-12 c-12 mb-m-8 mb-t-16">

                        <div class="wrapper-productdetail__content">

                            <div class="wrapper-productdetail__content-header">

                                <span><?=_thongtinquantrong?></span>

                            </div>

                            <div class="wrapper-productdetail__content-body">

                                <span class="wrapper-productdetail__content-body-people w-25-m"><i class="fa-solid fa-user-cowboy"></i> <b><?=$row_detail["songuoi"]?></b> <?=_nguoi?></span>

                                <span class="wrapper-productdetail__content-body-bed w-25-m"><i class="fa-solid fa-bed-front"></i> <b><?=$row_detail["sogiuong"]?></b> <?=_giuong?></span>

                                <span class="wrapper-productdetail__content-body-bathroom w-25-m"><i class="fa-solid fa-bath"></i> <b><?=$row_detail["phongtam"]?></b> <?=_phongtam?></span>

                                <span class="wrapper-productdetail__content-body-area w-25-m"><i class="fa-solid fa-square-dashed"></i> <b><?=$row_detail["dientich"]?></b> m<sup>2</sup></span>

                            </div>

                            <div class="wrapper-productdetail__content-bottom">
                                
                                <div class="wrapper-productdetail__content-bottom-title">

                                    <span><?=_tiennghi?></span>

                                </div>

                                <div class="box-detail-content mg0">

                                    <div class="wrapper-toc">

                                        <div class="content ul-list-detail">

                                            <?=htmlspecialchars_decode($row_detail["noidung_$lang"])?>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php if(isset($_GET['loaiphong']) || isset($_GET['songuoi']) || isset($_GET['time_start']) || isset($_GET['time_end'])){
                        $params = "";
                        $params .= (isset($_GET['loaiphong']))?"&loaiphong=".$_GET['loaiphong']:"";
                        $params .= (isset($_GET['songuoi']))?"&songuoi=".$_GET['songuoi']:"";
                        $params .= (isset($_GET['time_start']))?"&time_start=".$_GET['time_start']:"";
                        $params .= (isset($_GET['time_end']))?"&time_end=".$_GET['time_end']:"";
                        ?>
                        <input type="hidden" id="params" value="<?= $params?>"/>
                    <?php }?>

                    <div class="col l-4 m-12 c-12">

                        <div class="wrapper-productdetail__aside-bookroom">

                            <div class="wrapper-productdetail__aside-bookroom-des"><?= htmlspecialchars_decode($desc_datphong->mota)?></div>

                            <a  href="javascript:void(0)" title="<?=$v["ten_$lang"]?>" class="js-booking" data-id="<?=$row_detail["id"]?>" data-lang="<?=$lang?>"><?=_datphong?></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="row mt20">

            <div class="col l-12 m-12 c-12 mb30">

                <div class="wrapper-productdetail__titlectg t-center">

                    <span><?=_cacloaiphongkhac?></span>

                </div>

            </div>

            <?php foreach($listDatPhong as $key => $vldp){ ?>

            <div class="col l-6 m-6 c-12 mb30 mb-t-16">

                <div class="wrapper-productdetail__category p-relative">

                    <div class="wrapper-productdetail__category-outline"></div>

                    <div class="wrapper-productdetail__category-img">

                        <a href="<?=$func->getCom($vldp["type"])?>/<?=$vldp["tenkhongdau"]?>" title="<?=$vldp["ten"]?>" class="d-block hover-left">

                            <img src="<?=_upload_baiviet_l.$vldp["photo"]?>" alt="<?=$vldp["ten"]?>" <?=$func->errorImg()?>>

                        </a>

                    </div>

                    <div class="wrapper-productdetail__category-detail">

                        <h3 class="wrapper-productdetail__category-detail-title line-2">

                            <a href="<?=$func->getCom($vldp["type"])?>/<?=$vldp["tenkhongdau"]?>" title="<?=$vldp["ten"]?>"><?=$vldp["ten"]?></a>

                        </h3>

                        <div class="wrapper-productdetail__category-detail-btn">

                            <a href="<?=$func->getCom($vldp["type"])?>/<?=$vldp["tenkhongdau"]?>"><?=_xemcacphong?></a>

                        </div>

                    </div>

                </div>

            </div>

            <?php }?>

        </div>

    </div>

</section>
<script src="assets/magiczoomplus/magiczoomplus.js"></script>
