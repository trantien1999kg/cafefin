<nav class="nav-wrap d-none-m">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <ul class="nav-menu d-flex justify-content-between align-items-center">
                        
                    <li class="<?php if($com=='' || $com=='index') echo ' active';?>">
                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        <h2>
                            <?php }?>
                            <a href="javascript:void(0)" rel="dofollow" class="<?php if($source!='index'){echo 'menu_detail';} ?>" title="<?=_home?>"><?=_home?><i class="fa-regular fa-angle-up ml5"></i></a>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        </h2>
                        <?php }?>
                    </li>
                    <li class="<?php if($com=='san-pham') echo ' active';?> p-relative">
                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        <h2>
                            <?php }?>
                            <a href="javascript:void(0)" rel="dofollow" class="<?php if($source!='index'){echo 'menu_detail';} ?>" title="<?=_sanpham?>"><?=_sanpham?><i class="fa-regular fa-angle-up ml5"></i></a>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        </h2>
                        <?php }?>
                        <?php
                            if($list_c1_sp){
                        ?>
                        <ul>
                            <?php
                                foreach($list_c1_sp as $key => $vbm){

                                    $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($vbm['id']));

                            ?>
                            <li>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    <h3>
                                        <?php }?>
                                        <a href="<?=$func->getCom($vbm["type"])?>/<?=$vbm["tenkhongdau"]?>" rel="dofollow" title="<?=$vbm["ten"]?>"><?=$vbm["ten"]?></a>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    </h3>
                                <?php }?>

                                <?php if(count($c2)>0){ ?>

                                <ul>

                                    <?php
                                        foreach($c2 as $key => $vc2){
                                    ?>

                                    <li>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                            <h4>
                                                <?php }?>
                                                <a href="<?=$func->getCom($vc2["type"])?>/<?=$vbm["tenkhongdau"]?>/<?=$vc2["tenkhongdau"]?>" rel="dofollow" title="<?=$vc2["ten"];?>"><?=$vc2["ten"];?></a>
                                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                            </h4>
                                        <?php }?>
                                    </li>

                                    <?php
                                        }
                                    ?>

                                </ul>

                                <?php }?>

                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                        <?php } ?>
                    </li> 
                    <li class="<?php if($com=='gioi-thieu') echo ' active';?> p-relative">
                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        <h2>
                            <?php }?>
                            <a href="javascript:void(0)" class="<?php if($source!='index'){echo 'menu_detail';} ?>" title="<?=_vechungtoi?>"><?=_vechungtoi?><i class="fa-regular fa-angle-up ml5"></i></a>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        </h2>
                        <?php }?>

                        <ul>
                          
                            <li>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    <h3>
                                        <?php }?>
                                        <a href="<?= $func->getCom('gioi-thieu')?>" rel="dofollow" title="<?=$value["ten"];?>"><?=_gioithieu?></a>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    </h3>
                                <?php }?>
                            </li>

                            <li>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    <h3>
                                        <?php }?>
                                        <a href="<?= $func->getCom('ho-so-nang-luc')?>" rel="dofollow" title="<?=$value["ten"];?>"><?=_hosonangluc?></a>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    </h3>
                                <?php }?>
                            </li>

                        </ul>

                    </li>

                    
                       
                    
                    
                    <li class="<?php if($com=='tin-tuc') echo ' active';?> p-relative">
                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        <h2>
                            <?php }?>
                                <a href="javascript:void(0)" class="<?php if($source!='index'){echo 'menu_detail';} ?>"><?=_tintuc?><i class="fa-regular fa-angle-up ml5"></i></a>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        </h2>
                        <?php }?>   
                        <?php
                            if($list_c1_tt){
                        ?>
                        <ul>
                            <?php
                                foreach($list_c1_tt as $key => $value){
                            ?>
                            <li>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    <h3>
                                        <?php }?>
                                        <a href="<?=$func->getCom($value["type"])?>/<?=$value["tenkhongdau"]?>" rel="dofollow" title="<?=$value["ten"];?>"><?=$value["ten"];?></a>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    </h3>
                                <?php }?>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                        <?php } ?>
                    </li>    
                    <li class="<?php if($com=='album') echo ' active';?> p-relative">
                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        <h2>
                            <?php }?>
                            <a href="<?= $lang ?>/album" class="<?php if($source!='index'){echo 'menu_detail';} ?>" title="<?=_album?>"><?=_album?></a>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        </h2>
                        <?php }?>

                    </li>             
                    <li class="<?php if($com=='lien-he') echo ' active';?> p-relative">
                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        <h2>
                            <?php }?>
                            <a href="<?=$func->getCom('lien-he')?>" class="<?php if($source!='index'){echo 'menu_detail';} ?>" title="<?=_lienhe?>"><?=_lienhe?></a>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        </h2>
                        <?php }?>

                    </li>

                </ul>

                

            </div>

        </div>

    </div>
    
</nav>
