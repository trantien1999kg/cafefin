<?php 
    $khuyenmai = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_list where hienthi=1 and FIND_IN_SET(?,status) and type=? order by stt asc,id desc",array("khuyenmai","san-pham"))
?>
<section class="section-news mt20 mb20">
    <div class="container">
        <?php foreach($khuyenmai as $k => $v){
            $tintuc= $db->rawQuery("select id,ten_$lang,tenkhongdau_$lang as tenkhongdau,photo,giaban,giacu from #_baiviet where hienthi=1 and FIND_IN_SET(?,status) and id_list=? order by stt asc, id desc",array("khuyenmai",$v['id']));?>
        <div class="mt20">
            <div class="row">
                <div class="item col-12">
                    <div class="box" element-type="line">
                        <div class="title-default p-relative">
                            <h1>
                                <span>
                                    <a href="<?= $v['tenkhongdau']?>" title="<?= $v['ten']?>">
                                        <?= $v['ten']?>
                                    </a>
                                </span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-wrap mt30">
                <?php if(count($tintuc)>0){?>
                <?php foreach($tintuc as $key=>$value){ ?>
                <div class="item col-4 w-100-m mb10">
                    <div class="pro">
                        <div class="thumb">
                            <figure>
                                <a href="<?= $value['tenkhongdau']?>" title="<?= $value['ten_'.$lang]?>">
                                    <img src="<?= _thumbs?>/380x172x2/<?= _upload_baiviet_l.$value['photo']?>"
                                        alt="<?= $value['ten_'.$lang]?>" class="col-12" />
                                </a>
                            </figure>
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="<?= $value['tenkhongdau']?>" title="<?= $value['ten_'.$lang]?>">
                                    <p class="name line-1"><?= $value['ten_'.$lang]?></p>
                                </a>
                                <p class="price">
                                    <?php if($value['giacu']>0){?><span
                                        class="old"><?= $func->changeMoney($value['giacu'])?> Đ</span> - <?php }?>
                                    <span
                                        class="new"><?= ($value['giaban']>0)?$func->changeMoney($value['giaban'])." Đ":"Liên hệ"?></span>
                                </p>
                            </div>
                            <div class="link">
                                <a href="<?= $value['tenkhongdau']?>" title="<?= $value['ten_'.$lang]?>">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php }else{?>
                <div class="item col-12 t-center">
                    Nội dung đang cập nhật....
                </div>
                <?php }?>
                <div class="item col-12 t-center">
                    <?php echo $paging;?>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</section>