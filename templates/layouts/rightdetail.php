<?php

    $desc_detail=$db->rawQueryOne("select * from #_company where type=? limit 0,1",array('desc-detail'));

?>

<div class="item col-3 d-none-m d-none-tablet">

    <div class="sidebar-detail">

        <div class="header-sidebar">

            <span><?=_hotrokhachhang?></span>

        </div>

        <div class="body-sidebar pd10 p-relative">

            <div class="des">

                <?=htmLspecialChars_decode($desc_detail['mota_'.$lang])?>
            
            </div>
           
            <div class="box-under">

                <div style="font-weight:600;" class="t-center t-uppercase"><?=_yeucaugoilai?></div>
               
                <div class="letter-form">

                    <input type="number" autocomplete="off" name="contact-phone1-detail" class="input-txt txt-input-number"
                        placeholder="<?=_nhapsodienthoai?>" />

                        <button type="button" id="btn-newsletter" class="btn-newsletter call-back__detail"><?=_gui?></button>
                
                </div>

            </div>


        </div>

    </div>

</div>