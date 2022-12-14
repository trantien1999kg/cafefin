<script>
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
    <?php foreach ($config['seo-lang'] as $k=>$v){?>

    text_count_changed("#description_<?= $k?>", "#des_char_<?= $k?>");

    $('#description_<?= $k?>').blur(function(event) {

        text_count_changed($(this), "#des_char_<?= $k?>");

    });

    $('#description_<?= $k?>').keyup(function(event) {

        text_count_changed($(this), "#des_char_<?= $k?>");

    });
    <?php }?>
});
</script>
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
<form name="supplier" id="validate" class="form"
    action="index.html?com=seopage&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post"
    enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">

    <div class="control_frm">
        <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                <li><a
                        href="index.html?com=seopage&act=capnhat<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Cập nhật seo page</span></a>
                </li>
                <li class="current"><a href="#"
                        onclick="return false;"><?=($_GET['act']=='capnhat') ? 'Cập nhật':'Thêm'?></a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <div class="oneOne">
        <div class="widget mtop0">
            <div class="title chonngonngu" style="border-bottom: 0px solid transparent">
                <ul>
                    <?php  foreach ($config['lang'] as $k => $v){ ?>
                    <li><a href="<?=$k?>" class="<?= ($k == 'vi') ? 'active': '' ?> tipS" title="<?=$v?>"><img
                                src="./images/<?=$k?>.png" alt="" class="<?=$func->changeTitle($v)?>" /><?=$v?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="oneOne">
        <div class="widget mtop0">
            <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
                <h6>Thông tin seo</h6>
            </div>
            <div class="formRow">
                <label>Tải hình ảnh:</label>
                <div class="formRight">
                    <input type="file" id="file" name="file" />
                    <img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS"
                        original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
                    <br />
                    <br />
                    <span style="display: inline-block; line-height: 30px;color:#CCC;">
                        Width: <?=$table['img-width']?>px - Height:
                        <?=$table['img-height']?>px
                    </span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="formRow">
                <label>Hình Hiện Tại :</label>
                <div class="formRight">
                    <div class="mt10"><img src="<?=$folder.$item['photo']?>" alt="NO PHOTO" width="300" /></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="formRow">
                <div class="formRight">
                    <div class="mt10">
                        <div style="display:flex;align-items:center">
                            <input type="checkbox" name="mucluc"  <?=(!isset($item['mucluc']) || $item['mucluc']==1)?'checked="checked"':''?> value="1"/>
                            <label style="margin: 0 5px">Mục lục tự động</label>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <?php  foreach ($config['lang'] as $k => $v){ ?>
                <?php if($table['mota']){ ?>
                <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                    <label>Mô tả [<?=$v?>]</label>
                    <div class="ck_editor">
                        <textarea title="Nhập mô tả . " data-height="400" id="mota_<?=$k?>"
                            <?= ($table['mota-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?>
                            name="data[mota_<?=$k?>]"><?=@$item['mota_'.$k]?></textarea>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php } ?>
                <?php if($table['noidung']){ ?>
                <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                    <label>Nội dung [<?=$v?>]</label>
                    <div class="ck_editor">
                        <textarea title="Nhập nội dung . " data-height="400" id="noidung_<?=$k?>"
                            <?= ($table['noidung-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?>
                            name="data[noidung_<?=$k?>]"><?=@$item['noidung_'.$k]?></textarea>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>

    </div>
    <div class="oneOne">
        <div class="widget mtop10">

            <div class="formRow">

                <div class="formRight">
                    <?php  foreach ($config['seo-lang'] as $k => $v){ ?>
                    <div class="box-seo lang_hidden lang_<?=$k?> <?= ($k==$config['lang-default'])?"active":""?>">



                        <p style=" font-size:18px;font-weight:normal;border-bottom:1px solid
                    #ccc;padding-bottom:10px">

                            Hiển thị kết quả tìm kiếm google search</p>

                        <p style="font-size:14px;font-weight:normal;padding:10px 0px">

                            <a href="<?=$https_config?><?=$type?>"
                                target="_blank"
                                title="<?=$https_config?>"><span><?=$https_config?></span><span
                                    id="url_seo_<?=$k?>"><?=$type?></span></a>

                        </p>

                        <h3 style="font-size: 20px;line-height: 1.3;color: #1a0dab;margin-bottom: 0px;font-weight:500"
                            class="title_seo_<?= $k?>" id="title_seo_<?= $k?>">

                            <?=($item['title_'.$k]!='') ? $item['title_'.$k] : '[SEO Onpage] là gì? Hướng dẫn tối ưu SEO Onpage...' ?>

                        </h3>

                        <p style="padding-top:10px;font-size:14px;line-height: 1.57;word-wrap: break-word;color: #6a6a6a;margin-bottom: 0px;"
                            class="description_seo_<?= $k?>" id="description_seo_<?=$k?>">

                            <?=($item['description_'.$k]!='') ? $item['description_'.$k] : ' Hướng dẫn SEO onpage căn bản tối ưu để trang web chuẩn SEO lên top Google nhanh và bền vững, kỹ thuật tối ưu SEO onpage đơn giản' ?>



                        </p>



                    </div>
                    <?php }?>

                </div>

            </div>

        </div>



        <div class="widget mtop10">

            <?php  foreach ($config['seo-lang'] as $k => $v){ ?>
            <div class=" lang_hidden lang_<?=$k?> <?= ($k==$config['lang-default'])?"active":""?>">
                <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />

                    <h6><?=_noidungseo?></h6>

                </div>


                <div class="formRow">

                    <label>Title [ <?=$v?> ]: </label>

                    <div class="formRight">

                        <input type="text" data-validation="required" class="title_seo"
                            data-validation-error-msg="Không được để trống" value="<?=@$item['title_'.$k]?>" id="title"
                            name="data[title_<?=$k?>]" title="Nội dung thẻ meta Title dùng để SEO"
                            class="tipS input100 title-seo" data-lang="<?= $k?>" />

                    </div>

                    <div class="clear"></div>

                </div>



                <div class="formRow">

                    <label>Keywords [ <?=$v?> ]: </label>

                    <div class="formRight">

                        <input type="text" value="<?=@$item['keywords_'.$k]?>" id="url" class="url_seo"
                            name="data[keywords_<?=$k?>]" title="Từ khóa chính cho danh mục" data-lang="<?= $k?>"
                            class="tipS input100" />

                    </div>

                    <div class="clear"></div>

                </div>



                <div class="formRow">

                    <label>Description [ <?=$v?> ]:</label>

                    <div class="formRight">

                        <textarea rows="4" data-validation="required" data-validation-error-msg="Không được để trống"
                            cols="" title="Nội dung thẻ meta Description dùng để SEO"
                            class="tipS input100 description-seo description_seo" name="data[description_<?=$k?>]"
                            data-lang="<?= $k?>" id="description_<?= $k?>"><?=@$item['description_'.$k]?></textarea>

                    </div>

                    <div class="clear"></div>

                </div>

                <div class="formRow">

                    <div class="formRight">

                        <input readonly="readonly" type="text" style="width:45px; margin-top:10px; text-align:center;"
                            name="des_char" id="des_char_<?=$k?>" value="<?=@$item['des_char']?>" /> <?=_kytu?> <b>(Từ
                            160-300
                            ký
                            tự)</b>

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
                        <i class="far fa-save mr-2"></i>Lưu
                    </button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>
</form>