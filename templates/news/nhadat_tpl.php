<section class="mt20 mb20">
    <div class="container">
        <div class="row">
            <div class="item col-12">
                <div class="title-default t-center mb20 p-relative">
                    <h1>
                        <span>
                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>
                        </span>
                    </h1>
                </div>
            </div>
            <?php
                if($com!='noi-bat'){
            ?>
                <div class="item col-12">
                    <div class="box-content ul-list-detail">
                        <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                    </div>
                </div>
            <?php }?>
        </div>
        <div class="mt30">
            <div class="row d-flex flex-wrap">
                <?php if(count($tintuc)>0){?>
                <?php foreach($tintuc as $k=>$v){
                    $tendanhmuc = $db->rawQueryOne("select ten_$lang as ten from #_baiviet_list where hienthi=1 and type=? and id=?",array($v["type"],$v["id_list"])); 
                    $alias = $func->getAlias($v['id_list'],'baiviet_list',$v['type']);
                    $hot =  $db->rawQueryOne("select ten_$lang as ten,photo,tenkhongdau_$lang as tenkhongdau,mucgia,xuatxu,ngaytao from #_baiviet where hienthi=1 and id=? and find_in_set(?,status) order by stt desc,id desc",array($v['id'],'hot'));
                    $sp_news =  $db->rawQueryOne("select ten_$lang as ten,photo,tenkhongdau_$lang as tenkhongdau,mucgia,xuatxu,ngaytao from #_baiviet where hienthi=1 and id=? and find_in_set(?,status) order by stt desc,id desc",array($v['id'],'moi'));
                    $huong = $db->rawQueryOne("select ten_$lang as ten from #_baiviet where hienthi=1 and id=? and type=?",array($v["id_huong"],"huong"));
                    $huyen = $db->rawQueryOne("select ten,id from #_place_dist where id=?",array($v["id_dist"]));
                    $xa = $db->rawQueryOne("select ten,id from #_place_ward where id=?",array($v["id_ward"]));
                ?>
                 <div class="item col-4 w-100-m mb30">
                    <div class="bds-highlights__box">
                        <div class="highlights__box-header d-flex flex-wrap">
                                <div class="highlights__box-header-img col-6 hover-fade">
                                    <a href="<?=$v["type"]?>/<?=$v["tenkhongdau_$lang"]?>">
                                        <img src="resize1/200x257/1/<?= _upload_baiviet_l.$v['photo']?>" alt="">
                                    </a>
                                    <span class="label__money"><?= ($v['mucgia'] != "") ? $func->FormatBDSMoney($v['mucgia']):"Liên hệ";?></span>
                                    <?php if($hot){ ?>
                                        <span class="label__hot"><img src="./assets/images/icon-menu6.gif" alt="Bất động hot" style="width:30px;"></span>
                                    <?php }?>
                                    <?php if($sp_news){ ?>
                                        <span class="thumb__moi"><img src="./assets/images/new-icon-gif-8_2388620.gif" style="width:30px;"alt="Bất động sản mới"></span>
                                    <?php }?>
                                </div>
                                <div class="highlights__box-header-content item col-6">
                                    <div class="box-header-content-details d-flex">
                                        <div class="details-icon col-3">
                                            <i class="fas fa-th"></i>
                                        </div>
                                        <div class="details-content col-9">
                                            <span><?=$v["dientich"]?></span>
                                        </div>
                                    </div>
                                    <div class="box-header-content-details d-flex">
                                        <div class="details-icon col-3">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="details-content col-9">
                                            <span><?=$tendanhmuc["ten"]?></span>
                                        </div>
                                    </div>
                                    <div class="box-header-content-details d-flex">
                                        <div class="details-icon col-3">
                                            <i class="fas fa-location-arrow"></i>
                                        </div>
                                        <div class="details-content col-9">
                                            <span><?= $huong["ten"]?></span>
                                        </div>
                                    </div>
                                    <div class="box-header-content-details d-flex">
                                        <div class="details-icon col-3">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="details-content col-9">
                                            <span><?=$xa["ten"]?></span>
                                        </div>
                                    </div>
                                    <div class="box-header-content-details d-flex">
                                        <div class="details-icon col-3">
                                            <i class="far fa-compass"></i>
                                        </div>
                                        <div class="details-content col-9">
                                            <span><?=$huyen["ten"]?></span>
                                        </div>
                                    </div>
                                    <span class="highlights__box-header-content-times mt10 mb10">Ngày đăng: <?=date('d/m/Y',$v["ngaytao"])?></span>
                                    <ul class="nav-highlights p-relative">
                                        <li class="nav-highlights__item col-4">
                                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="nav-highlights__link">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li class="nav-highlights__item col-4">
                                            <a type="button" class="nav-highlights__link details-price"><i class="fas fa-dollar-sign"></i></a>
                                            <div class="nav-highlights__item-details">
                                                <?=($v["mucgia"]!='') ?  $func->FormatBDSMoney($v['mucgia']):'Liên hệ';?>
                                            </div>
                                        </li>
                                        <li class="nav-highlights__item col-4">
                                            <a type="button"  class="nav-highlights__link details-phone"><i class="fas fa-phone-alt"></i></a>
                                            <?php
                                                if(!empty($v["sodienthoai"])){
                                            ?>
                                                <div class="nav-highlights__item-details">
                                                    <i class="fas fa-headphones"></i> <?=$v["sodienthoai"]?>
                                                </div>
                                            <?php }else{?>
                                                <div class="nav-highlights__item-details nav-highlights__item-details--modifier">
                                                    <i class="fas fa-headphones"></i> <?=$row_setting["hotline"]?>
                                                </div>
                                            <?php }?>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        <div class="highlights__box-body">
                            <h5 class="highlights__box-body-title">
                                    <a href="<?=$v["type"]?>/<?=$v["tenkhongdau_$lang"]?>"><?=$v["ten_".$lang]?></a>
                            </h5>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="item col-12 justify-content-center">
                    <?= $paging ?>
                </div>
                <?php }else{?>
                <div class="item col-12 t-center">
                    Nội dung đang cập nhật....
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>