<nav class="sidebar-nav">

    <div class="sidebar-header">

        <div class="box" style="padding: 15px 0px 0px 0px;">

            <div class="logo-admin" style="text-align: center">

                <a href="index.html" title="logo"> <img src="images/logo.png" alt="" width="170"
                        <?=($config['logo']==true) ? 'class="none"':''?> /> </a>

            </div>

            <div class="line-admin">

                <span><i class="fas fa-globe"></i></span>

            </div>

        </div>

    </div>

    <ul class="metismenu" id="menu1">

        <li>

            <a class="home" href="index.html" title="Trang chủ">

                <i class="nav-icon text-sm fal fa-home"></i>Trang Chủ</a>

        </li>

        <?php if(count($PRIVATE)>0){?>
        <?php foreach($PRIVATE as $key =>$value){?>
        <?php if($value!='gioi-thieu-top' && $value!='gioi-thieu-giua' && $value!='gioi-thieu-cuoi' && $value!='pttt' && $value!='htgh'){ ?>
        <li class="<?=($com=='baiviet' && $_GET['type']==$value) ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='baiviet' && $_GET['type']==$value) ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i><?= $GLOBAL['baiviet'][$value]['title_main']?>

                </span>

            </a>

            <ul aria-expanded="<?=(($com=='baiviet' && $value==$_GET['type']) || ($com == 'bookroom' && $value==$_GET["type"] )) ? "true" :"false"?>"
                class="collapse <?=(($com=='baiviet' && $value==$_GET['type']) || ($com == 'bookroom' && $value==$_GET["type"])) ? "in" :""?>"
                <?=(($com=='baiviet' && $value==$_GET['type'] ) || ($com == 'bookroom' && $value==$_GET["type"])) ? "" :"style='height: 0px;'"?>>
                
                <?php if($GLOBAL['baiviet'][$value]['list']){?>
                <li class="<?=($com=='baiviet' && $act=='man_list' && $value==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man_list&tbl=list&type=<?= $value?>&page=1">Danh mục cấp 1</a>

                </li>
                <?php }?>
                <?php if($GLOBAL['baiviet'][$value]['cat']){?>
                    <li class="<?=($com=='baiviet' && $act=='man_cat' && $value==$_GET['type']) ? "this" :""?>">

                        <a href="index.php?com=baiviet&act=man_cat&tbl=cat&type=<?= $value?>&page=1">Danh mục cấp 2</a>

                    </li>
                <?php }?>
                <?php if($GLOBAL['baiviet'][$value]['item']){?>
                    <li class="<?=($com=='baiviet' && $act=='man_item' && $value==$_GET['type']) ? "this" :""?>">

                        <a href="index.php?com=baiviet&act=man_item&tbl=item&type=<?= $value?>&page=1">Danh mục cấp 3</a>

                    </li>
                <?php }?>
                <?php if($_GET["type"]!='thuoc-tinh'){ ?>
                    <li class="<?=($com=='baiviet' && $act=='man' && $value==$_GET['type']) ? "this" :""?>">
                        <a
                            href="index.php?com=baiviet&act=man&type=<?= $value?>&page=1"><?= $GLOBAL['baiviet'][$value]['title']?></a>
                    </li>
                <?php }?>
                <?php if($GLOBAL['baiviet'][$value]['order']){?>
                <li class="<?=($com=='order' && $act=='man' && $value==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=order&act=man&type=<?= $value?>&page=1">Danh sách đơn hàng</a>

                </li>
                <?php }?>
                

                <?php if($GLOBAL['baiviet'][$value]['bookroom']){?>

                <li class="<?=($com=='bookroom' && $act=='man' && 'bookroom'== $_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=bookroom&act=man&type=bookroom&page=1">Danh sách đặt phòng</a>

                </li>
                <?php }?>
            </ul>

        </li>
        
        <?php }}}?>
        <li class="<?=($com=='order' || ($com=='baiviet' && 'cau-hoi'==$_GET['type'] ) || ($com=='baiviet' && 'htgh'==$_GET['type'] ) || ($com=='baiviet' && 'pttt'==$_GET['type'] )) ? "active" :""?>">

            <a class="has-arrow" href="#"

                aria-expanded="<?=($com=='order' || ($com=='baiviet' && 'cau-hoi'==$_GET['type'] ) || ($com=='baiviet' && 'htgh'==$_GET['type'] ) || ($com=='baiviet' && 'pttt'==$_GET['type'] )) ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý đặt hàng

                </span>

            </a>

            <ul aria-expanded="<?=($com=='order' || ($com=='baiviet' && 'cau-hoi'==$_GET['type'] ) ||  ($com=='baiviet' && 'htgh'==$_GET['type'] ) || ($com=='baiviet' && 'pttt'==$_GET['type'] )) ? "true" :"false"?>"

                class="collapse <?=($com=='order' || ($com=='baiviet' && 'cau-hoi'==$_GET['type'] ) ||  ($com=='baiviet' && 'htgh'==$_GET['type'] ) || ($com=='baiviet' && 'pttt'==$_GET['type'] )) ? "in" :""?>"

                <?=($com=='order' || ($com=='baiviet' && 'cau-hoi'==$_GET['type'] ) ||  ($com=='baiviet' && 'htgh'==$_GET['type'] ) || ($com=='baiviet' && 'pttt'==$_GET['type'] )) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man' && 'htgh'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=htgh&page=1">Hình thức giao hàng</a>

                </li>

                <li class="<?=($com=='baiviet' && $act=='man' && 'pttt'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=pttt&page=1">Phương thức thanh toán</a>

                </li>

                <li class="<?=($com=='order' && $act=='man') ? "this" :""?>">

                    <a href="index.php?com=order&act=man&page=1">Danh sách đơn hàng</a>

                </li>

            </ul>

        </li>

        <?php if(count($PUBLIC)>0){?>
        <li class="<?=($com=='baiviet' & in_array($_GET['type'],$PUBLIC)) ? ' active' : '' ?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='baiviet' && in_array($_GET['type'],$PUBLIC)) ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý bài viết chung

                </span>

            </a>

            <ul aria-expanded="<?= ($com=='baiviet' & in_array($_GET['type'],$PUBLIC)) ? "true" :"false"?>"
                class="collapse <?= $com=='baiviet' & (in_array($_GET['type'],$PUBLIC)) ? "in" :""?>"
                <?= ($com=='baiviet' & in_array($_GET['type'],$PUBLIC)) ? '' :'style="height: 0px;"'?>>

                <?php foreach ($PUBLIC as $key =>$value){?>

                <li <?php if($_GET['type']==$value) echo ' class="this"' ?>><a
                        href="index.php?com=baiviet&act=man&type=<?=$value?>"
                        title=""><?=$GLOBAL['baiviet'][$value]['title_main']?></a>

                </li>

                <?php }?>
            </ul>

        </li>
        <?php }?>


        <li <?=($com=='info' && in_array($_GET['type'],array_keys($GLOBAL['info'])) ) ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='info' && in_array($_GET['type'],array_keys($GLOBAL['info'])) ) ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Trang tĩnh

            </a>
            <ul aria-expanded="<?=($com=='info' && in_array($_GET['type'],array_keys($GLOBAL['info'])) ) ? 'true' : 'false' ?>"
                class="collapse <?=($com=='info' && in_array($_GET['type'],array_keys($GLOBAL['info'])) ) ? 'in' : '' ?>"
                <?=($com=='info' && in_array($_GET['type'],array_keys($GLOBAL['info'])) ) ? '' : 'style="height: 0px;"' ?>>
                <?php foreach($GLOBAL['info'] as $key => $value){?>
                <li <?=($com=='info' && $_GET['type'] === $key) ? ' class="this"' : '' ?>><a
                        href="index.html?com=info&act=capnhat&type=<?= $key?>" title=""><?= $value['title_main']?></a>
                </li>
                <?php }?>
            </ul>
        </li>
        <li <?=($com=='photo' || $com=='video') ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($com=='photo' || $com=='video') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-images"></i> Slider - Footer - MXH

            </a>

            <ul aria-expanded="<?=($com=='photo' || $com=='video') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='photo' || $com=='video') ? 'in' : '' ?>"
                <?=($com=='photo' || $com=='video') ? '' : 'style="height: 0px;"' ?>>

                <?php foreach($GLOBAL['photo'] as $key => $value){?>

                <li <?=($com=='photo' && $_GET['type']==$key) ? ' class="this"' : '' ?>><a
                        href="index.html?com=photo&act=man&type=<?= $key?>&page=1"
                        title=""><?= $value['title_main']?></a>

                </li>

                <?php }?>
                
                <?php foreach($GLOBAL['video'] as $key => $value){?>

                <li <?=($com=='video' && $_GET['type']==$key) ? ' class="this"' : '' ?>><a
                        href="index.html?com=video&act=man&type=<?= $key?>&page=1"
                        title=""><?= $value['title_main']?></a>

                </li>

                <?php }?>
            </ul>

        </li>

        <?php if(count($GLOBAL['album'])>0){?>

        <?php foreach($GLOBAL['album'] as $key =>$value ){?>

        <li <?php if(isset($kiemtra)){ if(

            $func->checkPermissions('album','man_list',$key)&&

            $func->checkPermissions('album','man_cat',$key)&&

            $func->checkPermissions('album','man_item',$key)&&

            $func->checkPermissions('album','man',$key)

            ) echo 'class="none"'; }?> class="<?=

            ($com=='album' && $key==$_GET['type']) ? "active" : '' ?>">

            <a class="has-arrow" href="#" aria-expanded="false"><i
                    class="nav-icon text-sm fal fa-images"></i><?=$value['title_main']?></a>

            <ul aria-expanded="<?=($com=='album' && $key==$_GET['type']) ? "true" : 'false' ?>"
                class="collapse <?=($com=='album' && $key==$_GET['type']) ? "in" : '' ?>"
                <?=($com=='album' && $key==$_GET['type']) ? "" : 'style="height: 0px;"' ?>>

                <?php if($GLOBAL['album'][$key]['list']==true){?>

                <li <?php if(isset($kiemtra)){ if($func->checkPermissions('album','man_list',$key)) echo 'class="none"'; }?>
                    class="<?=($com=='album' && $key==$_GET['type'] && $act=='man_list') ? "this" :""?>">

                    <a href="index.php?com=album&act=man_list&type=<?=$key?>&page=1">
                        <?=$GLOBAL_LEVEL1['album'][$key]['title']?></a>

                </li>

                <?php }?>

                <li <?php if(isset($kiemtra)){ if($func->checkPermissions('album','man',$key)) echo 'class="none"'; }?>
                    class="<?=($com=='album' && $act=='man' && $key==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=album&act=man&type=<?=$key?>&page=1"><?=$value['title_main']?></a>

                </li>

            </ul>

        </li>
        <?php }?>

        <?php }?>

        <?php if(count($GLOBAL['bannerqc'])>0){?>

        <li <?=($com=='bannerqc') ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($com=='bannerqc') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Background - Logo - Popup

            </a>

            <ul aria-expanded="<?=($com=='bannerqc') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='bannerqc') ? 'in' : '' ?>"
                <?=($com=='bannerqc') ? '' : 'style="height: 0px;"' ?>>

                <?php foreach ($GLOBAL['bannerqc'] as $key =>$value){?>

                <li <?php if(isset($kiemtra)){if($func->checkPermissions('bannerqc','capnhat',$key)) echo 'class="none"'; }?>
                    <?php if($_GET['type']==$key) echo ' class="this"' ?>><a
                        href="index.html?com=bannerqc&act=capnhat&type=<?=$key?>" title=""><?=$value['title_main']?></a>

                </li>

                <?php }?>

            </ul>

        </li>

        <?php }?>

        <li
            class="<?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') || ($com=='company' && $_GET['type']=='desc-two') ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') || ($com=='company' && $_GET['type']=='desc-two') ? "true" :"false"?>">

                <i class="nav-icon text-sm fal fa-id-card"></i>Liên hệ - Đăng ký nhận tin

            </a>

            <ul aria-expanded="<?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') || ($com=='company' && $_GET['type']=='desc-two') ? "true" :"false"?>"
                class="collapse <?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') || ($com=='company' && $_GET['type']=='desc-two') ? "in" :""?>">


                <li <?php if($com=='booking' && $act=='man' && $_GET["type"]=='client') echo ' class="this"' ?>><a

                        href="index.php?com=booking&act=man&type=client" title="">Đăng ký nhận tin</a></li>

                <li <?php if($com=='booking' && $act=='man' && $_GET["type"]=='goi-lai') echo ' class="this"' ?>><a

                        href="index.php?com=booking&act=man&type=goi-lai" title="">Yêu cầu gọi lại</a></li>

            </ul>

        </li>



        <li class="<?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "true" :"false"?>">

                <i class="nav-icon text-sm fal fa-share-alt"></i>Quản lý seo

            </a>

            <ul aria-expanded="<?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "true" :"false"?>"
                class="collapse <?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "in" :""?>">



                <?php foreach($setting['seopage']['page'] as $k => $v){?>



                <li <?php if( ($com=='seopage' && $act=='capnhat') && $type==$k) echo ' class="this"' ?>><a
                        href="index.html?com=seopage&act=capnhat&type=<?=$k?>" title=""><?=$v?></a></li>

                <?php }?>

                <li <?=($com=='redirect') ? ' class="this"' : '' ?>><a href="index.html?com=redirect&act=man" title="">

                        Redirect url

                    </a>

                </li>

            </ul>

        </li>



         <li <?=($com=='setting' || $com=='company') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($com=='setting' || $com=='company') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-cogs"></i>Cài đặt cấu hình

            </a>

            <ul aria-expanded="<?=($com=='setting' || $com=='company') ? 'true' : 'false' ?>" class="collapse <?=($com=='setting' || $com=='company') ? 'in' : '' ?>" <?=($com=='setting' || $com=='company') ? '' : 'style="height: 0px;"' ?> >

                <?php foreach ($GLOBAL['company'] as $key =>$value){?>

                <li <?php if(isset($kiemtra)){if($func->checkPermissions('company','capnhat',$key)) echo 'class="none"'; }?>

                    <?=($com=='company' && $_GET['type']==$key) ? ' class="this"' : '' ?>><a

                        href="index.php?com=company&act=capnhat&type=<?=$key?>" title=""><?=$value['title_main']?></a>

                </li>

                <?php }?>
                <?php foreach($GLOBAL['map'] as $key => $value){?>
                    <li <?=($com=='map' && $key == $_GET['type']) ? ' class="this"' : '' ?>>
                        <a href="index.html?com=map&act=man&type=<?=$key?>" title="">

                            <?= $value['title']?>

                        </a>

                    </li>
                <?php }?>

                <li <?=($com=='setting') ? ' class="this"' : '' ?>><a href="index.php?com=setting&act=capnhat" title="">

                        <?=_cauhinhchung?>

                    </a>

                </li>

            </ul>

        </li>

        <?php if($GLOBAL_USER==true){?>

        <?php if($func->checkUserAdmin()){?>

        <li <?=($com=='user') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="fa<?=($com=='user') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-users-cog"></i>Tài khoản admin

            </a>

            <ul aria-expanded="<?=($com=='user') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='user') ? 'in' : '' ?>" <?=($com=='user') ? '' : 'style="height: 0px;"' ?>>

                <?php if($GLOBAL_USER==true){?>

                <li <?php if($_GET['com']=='user' && $_GET['act']=='man') echo ' class="this"' ?>><a
                        href="index.html?com=user&act=man&type=user&page=1"><?=_account?></a></li>

                <?php }?>

            </ul>

        </li>

        <?php }?>

        <?php }?>

        <?php if($GLOBAL_LANG==true){?>

        <li <?=($_GET['com']=='ngonngu') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($_GET['com']=='ngonngu') ? 'true' : 'false' ?>">

            <i class="nav-icon text-sm fal fa-language"></i> Hỗ trợ ngôn ngữ

            </a>

            <ul aria-expanded="<?=($_GET['com']=='ngonngu') ? 'true' : 'false' ?>" class="collapse <?=($_GET['com']=='ngonngu') ? 'in' : '' ?>" <?=($_GET['com']=='ngonngu') ? '' : 'style="height: 0px;"' ?>>

                <li <?php if($_GET['com']=='ngonngu' && $_GET['act']=='man_lang') echo ' class="this"' ?>><a

                        href="index.php?com=ngonngu&act=man_lang">Danh sách ngôn ngữ</a></li>

            </ul>

        </li>

        <?php }?>


    </ul>

</nav>