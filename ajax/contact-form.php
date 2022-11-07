<?php
    $id_baiviet = $_POST['id'];

    require_once 'ajaxConfig.php';

    $content_News = $db->rawQueryOne("select noidung_$lang as noidung from #_baiviet where hienthi=1 and type=? and id=?",array('gioi-thieu-top',$id_baiviet));
?>
<div id="modal-contact" class="modal">
    <div class="modal-container" id="modal-container">
        <div class="modal-content">
            <form action="" id="newsletter-form" name="newsletter-form" method="post" accept-charset="utf-8"
                enctype="multipart/form-data">
                <div class="modal-header">
                    <p class="title">Nội dung chi tiết</p>
                    <span class="close-modal"><i class="fa fa-times" aria-hidden="true"></i></span>
                </div>
                <div class="modal-body">
                    <?php if($content_News){?>

                   <div class="modal-body__desscrition"><?= htmlspecialchars_decode($content_News["noidung"])?></div>

                   <?php }else{ ?>

                    <div class="modal-body__desscrition"></div>
                    
                    <?php }?>
                </div>
            </form>
        </div>
    </div>
</div>