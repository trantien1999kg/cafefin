<?php if($GLOBAL[$com][$type]['seo']==true){ ?><script>
function text_count_changed(textfield_id, counter_id) {

    var v = $(textfield_id).val();

    if (parseInt(v.length) > 300) {

        $(textfield_id).css('border', '1px solid #D90000');

        $(textfield_id).css('background', '#e5e5e5');

        $(counter_id).val(parseInt(v.length));

    } else {

        $(textfield_id).css('border', '1px solid #DDDDDD');

        $(textfield_id).css('background', '#FFF');

        $(counter_id).val(parseInt(v.length));

    }

}

$(document).ready(function() {

    text_count_changed("#description", "#des_char");

    $('#description').blur(function(event) {

        text_count_changed($(this), "#des_char");

    });

    $('#description').keypress(function(event) {

        text_count_changed($(this), "#des_char");

    });

});
</script>

<?php } ?>

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

    $('.update_stt').keyup(function(event) {

        var id = $(this).attr('rel');

        var table = 'album_photo';

        var value = $(this).val();

        $.ajax({

            type: "POST",

            url: "ajax/update_stt.php",

            data: {

                id: id,

                table: table,

                value: value

            },

            success: function(result) {}

        });

    });

    $('.update_prop').keyup(function(event) {

        var id = $(this).attr('rel');

        var table = 'album_photo';

        var prop = $(this).attr('data-prop');

        var value = $(this).val();

        $.ajax({

            type: "POST",

            url: "ajax/update_prop.php",

            data: {

                id: id,

                table: table,

                value: value,

                prop: prop

            },

            success: function(result) {}

        });

    });



    $('.delete_images').click(function() {

        if (confirm('B???n c?? mu???n x??a h??nh n??y ko ? ')) {

            var id = $(this).attr('title');

            var table = 'album_photo';

            $.ajax({

                type: "POST",

                url: "ajax/delete_images.php",

                data: {

                    id: id,

                    table: table

                },

                success: function(result) {}

            });

            $(this).parent().slideUp();

        }

        return false;

    });



    $('.delete').click(function(e) {

        $(this).parent().remove();

    });

});
</script>

<div class="wrapper">



    <div class="control_frm">

        <div class="bc">

            <ul id="breadcrumbs" class="breadcrumbs">

                <li><a
                        href="index.php?com=album&act=add<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span><?=$GLOBAL[$com][$type]['title']?></span></a>

                </li>

                <li class="current"><a href="#" onclick="return false;"><?=($_GET['act']=='edit') ? 'S???a':'Th??m'?></a>

                </li>

            </ul>

            <div class="clear"></div>

        </div>

    </div>



    <form name="supplier" id="validate" class="form"
        action="index.php?com=album&act=save<?php if($_REQUEST['id']!='') echo'&id='. $_REQUEST['id'];?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"
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



            <div class="<?=($GLOBAL[$com][$type]['full']==true) ? 'oneOne':'colLeft' ?>">

                <div class="widget mtop0">

                    <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                        <h6>Th??ng tin chung</h6>

                    </div>



                    <?php if($GLOBAL[$com][$type]['img']==true){ ?>

                    <div class="formRow">

                        <label>T???i h??nh ???nh:</label>

                        <div class="formRight">

                            <input type="file" id="file" name="file" />

                            <img src="./images/question-button.png" alt="Upload h??nh" class="icon_question tipS"
                                original-title="T???i h??nh ???nh (???nh JPEG, GIF , JPG , PNG)">

                            <br />

                            <br />

                            <span style="display: inline-block; line-height: 30px;color:#CCC;">

                                ???nh nh??? - Width:
                                <?=$GLOBAL[$com][$type]['img-width']*$GLOBAL[$com][$type]['img-ratio']?>px -

                                <?=$GLOBAL[$com][$type]['img-height']*$GLOBAL[$com][$type]['img-ratio']?>px

                            </span>

                            <span style="display: inline-block; line-height: 30px;color:#CCC;">

                                ???nh to - Width:
                                <?=$GLOBAL[$com][$type]['img-width-lg']*$GLOBAL[$com][$type]['img-ratio']?>px -

                                <?=$GLOBAL[$com][$type]['img-height-lg']*$GLOBAL[$com][$type]['img-ratio']?>px

                            </span>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php if($_GET['act']=='edit'){?>

                    <div class="formRow">

                        <label>H??nh Hi???n T???i :</label>

                        <div class="formRight">



                            <div class="mt10"><img src="<?=_upload_album.$item['thumb']?>" alt="NO PHOTO" width="100" />

                            </div>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php } ?>

                    <?php  foreach ($config['lang'] as $k => $v){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>Ti??u ????? [<?=$v?>]</label>

                        <div class="formRight">

                            <input type="text" name="data[ten_<?=$k?>]" title="Nh???p ti??u ????? album" id="ten_<?=$k?>"
                                class="tipS validate[required]" value="<?=@$item['ten_'.$k]?>" />

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php if($GLOBAL[$com][$type]['mota']==true){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>M?? t??? [<?=$v?>]</label>

                        <div class="ck_editor">

                            <textarea title="Nh???p m?? t??? . " id="mota_<?=$k?>" class="ck_editors"
                                name="data[mota_<?=$k?>]"><?=@$item['mota_'.$k]?></textarea>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php if($GLOBAL[$com][$type]['noidung']==true){ ?>

                    <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">

                        <label>N???i dung [<?=$v?>]</label>

                        <div class="ck_editor">

                            <textarea title="Nh???p n???i dung . " id="noidung_<?=$k?>" class="ck_editors"
                                name="data[noidung_<?=$k?>]"><?=@$item['noidung_'.$k]?></textarea>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                    <?php } ?>



                    <div class="formRow">

                        <div class="formRight">

                            <label>S??? th??? t???: </label>

                            <input type="text" class="tipS" value="<?=isset($item['stt'])?$item['stt']:1?>"
                                name="data[stt]" style="width:20px; text-align:center;"
                                onkeypress="return OnlyNumber(event)"
                                original-title="S??? th??? t??? c???a danh m???c, ch??? nh???p s???">

                        </div>

                        <div class="clear"></div>

                    </div>



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

            <div class="<?=($GLOBAL[$com][$type]['full']==true) ? 'oneOne':'colRight' ?>">

                <div class="widget mtop0">

                    <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                        <h6>H??nh ???nh</h6>

                    </div>



                    <?php if($GLOBAL[$com][$type]['img-gallery']==true){ ?>

                    <div class="formRow">

                        <label>H??nh ???nh k??m theo: </label>

                        <div class="formRight">

                            <a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif">

                                <div class="jFiler jFiler-theme-dragdropbox">

                                    <div class="jFiler-input-dragDrop">

                                        <div class="jFiler-input-inner">

                                            <div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div>

                                            <div class="jFiler-input-text">

                                                <h3>Upload files here</h3>

                                            </div><span class="jFiler-input-choose-btn btn-custom blue-light">Browse

                                                Files</span>

                                        </div>

                                    </div>

                                </div>

                            </a>

                            <?php if($act=='edit'){?>

                            <?php if(count($ds_photo)!=0){?>

                            <?php for($i=0;$i<count($ds_photo);$i++){?>

                            <div class="item_trich">

                                <img class="img_trich" width="140px" height="110px"
                                    src="<?=_upload_album.$ds_photo[$i]['photo']?>" />

                                <input type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['stt']?>"
                                    placeholder="STT" class="update_stt tipS" />

                                <input type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['ten']?>"
                                    placeholder="T??n" class="update_prop tipS" data-prop="ten" />

                                <input type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['link']?>"
                                    placeholder="Link" class="update_prop tipS" data-prop="link" />

                                <a class="delete_images icon-jfi-trash jFiler-item-trash-action"
                                    title="<?=$ds_photo[$i]['id']?>" style="color:#FF0000"></a>

                            </div>

                            <?php } ?>

                            <?php }?>



                            <?php }?>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php } ?>

                </div>

                <?php if($GLOBAL[$com][$type]['seo']==true){ ?>

                <div class="widget mtop10">

                    <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                        <h6>N???i dung seo</h6>

                    </div>



                    <div class="formRow">

                        <label>Title</label>

                        <div class="formRight">

                            <input type="text" value="<?=@$item['title']?>" name="data[title]"
                                title="N???i dung th??? meta Title d??ng ????? SEO" class="tipS" />

                        </div>

                        <div class="clear"></div>

                    </div>



                    <div class="formRow">

                        <label>T??? kh??a</label>

                        <div class="formRight">

                            <input type="text" value="<?=@$item['keywords']?>" name="data[keywords]"
                                title="T??? kh??a ch??nh cho danh m???c" class="tipS" />

                        </div>

                        <div class="clear"></div>

                    </div>



                    <div class="formRow">

                        <label>Description:</label>

                        <div class="formRight">

                            <textarea rows="4" cols="" title="N???i dung th??? meta Description d??ng ????? SEO" class="tipS"
                                name="data[description]" id="description"><?=@$item['description']?></textarea>

                            <input readonly="readonly" type="text"
                                style="width:45px; margin-top:10px; text-align:center;" name="des_char" id="des_char"
                                value="<?=@$item['des_char']?>" /> k?? t??? <b>(T???t nh???t l?? 68 - 300 k?? t???)</b>

                        </div>

                        <div class="clear"></div>

                    </div>

                </div>

                <?php } ?>

            </div>

        </div>

        <div class="formRow fixedBottom">

            <div class="formRight">

                <div class="box-admin" style="display:flex; align-items:center;justify-content:flex-end">

                    <div class="box-action">

                        <button type="submit" class="btn btn-sm bg-gradient-primary text-white submit-check">

                            <i class="far fa-save mr-2"></i>L??u

                        </button>

                        <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                                class="fas fa-redo mr-2"></i>L??m l???i</button>

                        <a class="btn btn-sm bg-gradient-danger text-white"
                            href="index.php?com=album&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>">

                            <i class="fas fa-sign-out-alt mr-2"></i>Tho??t

                        </a>

                    </div>

                </div>

            </div>

            <div class="clear"></div>

        </div>



    </form>

</div>

<script>
$(document).ready(function() {

    $('.file_input').filer({

        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',

        showThumbs: true,

        theme: "dragdropbox",

        templates: {

            box: '<ul class="jFiler-item-list"></ul>',

            item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                           <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="STT"/>\
                                    <input type="text" name="tenhinh[]" class="tenhinh" placeholder="T??n"/>\
                                    <input type="text" name="linkhinh[]" class="linkhinh" placeholder="Link"/>\
                                </div>\
                            </div>\
                        </li>',

            itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" />\
                                    <input type="text" name="tenhinh[]" class="tenhinh" placeholder="T??n"/>\
                                    <input type="text" name="linkhinh[]" class="linkhinh" placeholder="Link"/>\
                                </div>\
                            </div>\
                        </li>',

            progressBar: '<div class="bar"></div>',

            itemAppendToEnd: true,

            removeConfirmation: true,

            _selectors: {

                list: '.jFiler-item-list',

                item: '.jFiler-item',

                progressBar: '.bar',

                remove: '.jFiler-item-trash-action',

            }

        },

        dragDrop: {

            dragEnter: null,

            dragLeave: null,

            drop: null,

        },

        addMore: true

    });

});
</script>