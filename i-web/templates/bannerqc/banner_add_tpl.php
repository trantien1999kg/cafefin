<link href="plugin/sumoselect/sumoselect.css" rel="stylesheet" />
<script src="plugin/sumoselect/jquery.sumoselect.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.chonngonngu li a').click(function(event) {
        var lang = $(this).attr('href');
        $('.chonngonngu li a').removeClass('active');
        $(this).addClass('active');
        $('.lang_hidden').removeClass('active');
        $('.lang_' + lang).addClass('active');
        return false;
    });
});
</script>
<div class="wrapper">
    <div class="control_frm">
        <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                <li><a
                        href="index.html?com=bannerqc&act=capnhat<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span><?=$GLOBAL[$com][$type]['title']?></span></a>
                </li>
                <li class="current"><a href="" title=""><span><?=$GLOBAL[$com][$type]['title_main']?></span></a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <form name="supplier" class="form"
        action="index.html?com=bannerqc&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"
        method="post" enctype="multipart/form-data">
        <div class="mtop0">
            <div class="oneOne">
                <div class="widget mtop0">
                    <div class="title chonngonngu" style="border-bottom: 0px solid transparent">
                        <ul>
                            <?php  foreach ($config['lang'] as $k => $v){ ?>
                            <li><a href="<?=$k?>" class="<?= ($k == 'vi') ? 'active': '' ?> tipS" title="<?=$v?>"><img
                                        src="./images/<?=$k?>.png" alt=""
                                        class="<?=$func->changeTitle($v)?>" /><?=$v?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="oneOne">
                <div class="widget mtop0">
                    <?php  foreach ($config['lang'] as $k => $v){ ?>
                    <?php if($GLOBAL[$com][$type]['ten']==true){ ?>
                    <div class="formRow">
                        <label><?=_ten?> [<?=$v?>]:</label>
                        <div class="formRight">
                            <input type="text" name="data[ten_<?=$k?>]" title="Nh???p ten_<?=$k?>" id="ten_<?=$k?>"
                                class="tipS" value="<?=@$item['ten_'.$k]?>" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                    <?php if($_GET["type"]=='banner-video'){ ?>
                    <?php if($GLOBAL[$com][$type]['img']==true){ ?>
                    <?php  foreach ($config['lang'] as $k => $v){ ?>
                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                        <label><?=_uploadhinhanhvideo?>:</label>
                        <div class="formRight">
                            <input type="file" id="file" name="file_<?=$k?>" />
                            <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS"
                                original-title="T???i h??nh ???nh (???nh JPEG, GIF , JPG , PNG)">
                            <br />
                            <br />
                            <span style="display: inline-block; line-height: 30px;color:#CCC;">
                                Width: <?=$GLOBAL[$com][$type]['img-width']*$GLOBAL[$com][$type]['img-ratio']?>px -
                                <?=$GLOBAL[$com][$type]['img-height']*$GLOBAL[$com][$type]['img-ratio']?>px
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label><?=_hinhanhvideo?> <?=_hientai?> :</label>

                        <div class="formRight">

                            <div class="mt10">

                                <img src="<?=_upload_hinhanh.$item["photo_$k"]?>" alt="" width="220">

                            </div>

                            <div class="mt10 change-photo">

                                <?php $pathImg = _upload_hinhanh.$item["photo_$k"]; ?>

                                <video width="300" height="300" autoplay muted loop controls
                                    style="width: 300px;object-fit: cover;height: 300px;aspect-ratio: 16/9;">

                                    <source src="<?=$pathImg?>" type="video/mp4">

                                </video>

                            </div>

                        </div>

                        <div class="clear"></div>

                    </div>
                    <?php }?>
                    <?php }?>
                    <?php }else{ ?>

                    <?php if($GLOBAL[$com][$type]['img']==true){ ?>
                    <?php  foreach ($config['lang'] as $k => $v){ ?>
                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                        <label><?=_uploadhinhanh?>:</label>
                        <div class="formRight">
                            <input type="file" id="file" name="file_<?=$k?>" />
                            <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS"
                                original-title="T???i h??nh ???nh (???nh JPEG, GIF , JPG , PNG)">
                            <br />
                            <br />
                            <span style="display: inline-block; line-height: 30px;color:#CCC;">
                                Width: <?=$GLOBAL[$com][$type]['img-width']*$GLOBAL[$com][$type]['img-ratio']?>px -
                                <?=$GLOBAL[$com][$type]['img-height']*$GLOBAL[$com][$type]['img-ratio']?>px
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                        <label><?=_hinhanh?> <?=_hientai?> :</label>
                        <div class="formRight">
                            <div class="mt10">
                                <img src="<?=_upload_hinhanh.$item["photo_$k"]?>" alt="" width="220">
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php }?>
                    <?php }?>

                    <?php }?>

                    <?php if($GLOBAL[$com][$type]['slider_video']==true) {?>

                    <div class="formRow">

                        <label>Ch???n d???ng hi???n th???:</label>

                        <div class="formRight">

                            <select name="data[slider_web]">

                                <option value="">Ch???n d???ng hi???n th??? h??nh ???nh</option>

                                <option value="1" <?php if($item['slider_web']==1) echo 'selected'; ?>>D???ng video upload
                                    file

                                </option>

                                <option value="2" <?php if($item['slider_web']==2) echo 'selected'; ?>>D???ng video link
                                    youtube

                                </option>

                            </select>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>


                    

                    <?php  foreach ($config['lang'] as $k => $v){ ?>
                    <?php if($GLOBAL[$com][$type]['mota']==true){ ?>
                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                        <label><?=_mota?> [<?=$v?>]</label>
                        <div class="ck_editor">
                            <textarea title="Nh???p m?? t??? [<?=$v?>]. " data-height="400" id="mota_<?=$k?>"
                                <?= ($GLOBAL[$com][$type]['mota-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?>
                                name="data[mota_<?=$k?>]"><?=@$item['mota_'.$k]?></textarea>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                    <?php  foreach ($config['lang'] as $k => $v){ ?>
                    <?php if($GLOBAL[$com][$type]['link']==true){ ?>
                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                        <label><?=_links?> [<?=$k?>] :</label>
                        <div class="formRight">
                            <input type="text" name="data[link_<?=$k?>]" title="Nh???p link" id="link_<?=$k?>"
                                class="tipS" value="<?=@$item["link_$k"]?>" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php } ?>
                    <?php }?>

                    <?php if($GLOBAL[$com][$type]['option']==true){ ?>
                    <div class="formRow">
                        <label>Ch???n v??? tr?? hi???n th???:</label>
                        <div class="formRight">
                            <select name="options[]" class="main_select multiselect-info" multiple="multiple"
                                style="max-width:300px">
                                <?php 
                                $arr=json_decode($item['options'],true);
                                foreach($config['popup'] as $k => $v){?>
                                <option value="<?=$k?>" <?=(in_array($k,$arr)) ? 'selected' : ''?>><?=$v?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php } ?>
                    <?php if($GLOBAL[$com][$type]['time']==true){ ?>
                    <div class="formRow">
                        <label>Th???i gian hi???n th???:</label>
                        <div class="formRight">
                            <select name="time_out" class="main_select" style="max-width:300px">
                                <?php for($i=1;$i<=10;$i++){?>
                                <option value="<?=$i*1000?>" <?=($item['time_out']==$i*1000) ? 'selected' : ''?>><?=$i?>
                                    ph??t</option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php } ?>
                    <?php if($GLOBAL[$com][$type]['count']==true){ ?>
                    <div class="formRow">
                        <label>S??? l???n hi???n th???:</label>
                        <div class="formRight">
                            <select name="data[count]" class="main_select" style="max-width:300px">
                                <?php for($i=1;$i<=10;$i++){?>
                                <option value="<?=$i?>" <?=($item['count']==$i) ? 'selected' : ''?>><?=$i?> l???n</option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php } ?>
                    <div class="formRow">
                        <div class="formRight">
                            <label class="stardust-checkbox">
                                Hi???n th???
                                <input class="stardust-checkbox__input"
                                    <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>
                                    name="hienthi" type="checkbox" value="1" style="display:none">
                                <div class="stardust-checkbox__box"></div>
                            </label>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <input type="hidden" name="type" value="<?=$_GET['type']?>">
        <div class="formRow fixedBottom">
            <div class="formRight">
                <div class="box-admin" style="display:flex; align-items:center;justify-content:flex-end">
                    <div class="box-action">
                        <button type="submit" class="btn btn-sm bg-gradient-primary text-white submit-check">
                            <i class="far fa-save mr-2"></i>L??u
                        </button>
                        <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                                class="fas fa-redo mr-2"></i>L??m
                            l???i</button>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </form>
</div>
<script type="text/javascript">
$(document).ready(function() {
    window.asd = $('.multiselect-info').SumoSelect({
        placeholder: 'Ch???n v??? tr?? hi???n th???',
        csvDispCount: 3,
        captionFormat: '{0} Selected',
        floatWidth: 500,
        forceCustomRendering: false,
        triggerChangeCombined: true,
        selectAll: true,
        search: true,
        searchText: 'Search...',
        noMatch: 'No matches for "{0}"',
        prefix: '',
        locale: ['OK', 'Cancel', 'Select All'],
        up: 'false',
        showTitle: 'true',
    });
});
</script>