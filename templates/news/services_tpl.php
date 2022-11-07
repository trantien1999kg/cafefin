<section class="mt20 mb20">

    <div class="grid wide">
        
        <div class="row">

            <div class="col l-12 m-12 c-12 mb-m-40">

                <div class="title-default t-center mb40 p-relative">

                    <h1>

                        <span>

                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>

                        </span>

                    </h1>

                </div>

            </div>

            <div class="col l-12 m-12 c-12">
  
                <?php if($seo->getSeo('subject')!=''){ ?>

                    <div class="box-description mt20">

                        <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                    </div>

                <?php }?>

                <?php if($seo->getSeo('content')!=''){ ?>

                <div class="h__box__subject p-relative pb40">

                    <div class="wrapper-toc mt10">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

               </div>

               <?php }?>

            </div>

        </div>

        <div class="mt30">

            <div class="row">

                <?php if(count($tintuc)>0){?>

                <div class="col l-12 m-12 c-12">

                    <div class="wrapper-standards__aside mt40 mb60">

                        <div class="wrapper-standards__aside-outline"></div>

                        <?php foreach($tintuc as $k => $v){
                            
                            $row_tacgia = $db->rawQueryOne("select ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,mota_$lang as mota,link_facebook_$lang as link_facebook,link_instagram_$lang as link_instagram,link_twitter_$lang as link_twitter,link_zalo_$lang as link_zalo,type from #_baiviet where hienthi=1 and type=? and id=? limit 0,1",array('tac-gia',$v["id_tacgia"]));

                            ?>

                        <div class="row no-gutters <?php if($k % 2 != 0){echo "flex-row-reverse";} ?>">

                            <div class="col l-6 m-12 c-12 d-flex flex-column">

                                <div class="wrapper-standards__boxleft">

                                    <a href="<?=$func->getCom($v["type"])?>/<?=$v["tenkhongdau"]?>" class="d-block hover-left" title="<?=$v["ten_$lang"]?>">

                                        <img src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>">

                                    </a>

                                </div>

                            </div>

                            <div class="col l-6 m-12 c-12 d-flex flex-column">

                                <div class="wrapper-standards__boxright <?php if($k%2!=0){echo "wrapper-standards__boxright--left";} ?> p-relative">

                                    <div class="wrapper-standards__boxright-aside-title">

                                        <h3 class="wrapper-standards__boxright-title <?php if($k%2!=0){echo "wrapper-standards__boxright-title--right";} ?> line-2">

                                            <a href="<?=$func->getCom($v["type"])?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>">
                                                
                                                <span><?=$v["ten_$lang"]?></span>

                                            </a>

                                        </h3>

                                    </div>

                                    <div class="wrapper-standards__boxright-des mt50"><?= htmlspecialchars_decode($v["mota_$lang"])?></div>

                                    <div class="d-none-m">

                                        <div class="wrapper-standards__boxright-all d-flex">

                                            <span><i class="fa-solid fa-user mr5"></i> <?=_dangboi?> <?php if(!empty($row_tacgia["ten"])){echo $row_tacgia["ten"]; }else{ echo _administrator;} ?></span>

                                            <span><i class="fa-solid fa-calendar-days mr5"></i> <?=$func->daysOfTheWeek($v["ngaytao"])?>, <?=date('d/m/Y',$v['ngaytao'])?></span>

                                        </div>

                                    </div>

                                    <div class="d-none d-block-m">

                                        <div class="wrapper-standards__boxright-all d-flex">

                                            <span><i class="fa-solid fa-user mr5"></i> <?=_dangboi?> <?php if(!empty($row_tacgia["ten"])){echo $row_tacgia["ten"]; }else{ echo _administrator;} ?>, <?=date('d/m/Y',$v['ngaytao'])?></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <?php }?>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12 justify-content-center">
                    <?= $paging ?>
                </div>

                <?php }?>

             <?php /*   else{

                <div class="item col-12 t-center">

                    <?=_noidungdangcapnhat?>
                    
                </div>

                <?php } */?>

            </div>

        </div>

    </div>

</section>