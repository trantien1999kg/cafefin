<?php

    require_once 'ajaxConfig.php';

    $name = $_POST["name"];

    $email = $_POST["email"];

    $address = $_POST["address"];

    $phone = $_POST["phone"];

    $content = $_POST["content"];

    $idship = $_POST["payship"];

    $idpayment = $_POST["payment"];

    $total = $_POST["total"];

    $rows_htgh = $db->rawQueryOne("select id, ten_$lang as ten from #_baiviet where hienthi=1 and type=? and id=? limit 1",array('htgh',$idship));

	$rows_httt = $db->rawQueryOne("select id, ten_$lang as ten from #_baiviet where hienthi=1 and type=? and id=? limit 1",array('pttt',$idpayment));

?>
<div id="modal-contact" class="modal">
    <div class="modal-container" id="modal-container">
        <div class="modal-content">
            <div class="modal-header">
                <p class="title"><?=_xntt?></p>
                <span class="close-modal"><i class="fa fa-times" aria-hidden="true"></i></span>
            </div>
            <div class="modal-body mt20 mb20">

                <div class="row">

                    <div class="item col-12">

                        <div class="t-center">

                            <div class="row0 d-flex flex-wrap">

                    <div class="item0 col-12">

                        <div class="wrap-modal__two-layer">

                            <div class="row0 d-flex flex-wrap">

                                <div class="item0 col-4 d-flex">

                                    <span class="modal-body__label flex-100"><?=_hoten?>:</span>

                                </div>

                                <div class="item0 col-8 d-flex">

                                    <span class="modal-body__content"><?=$name?></span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item0 col-12">

                        <div class="wrap-modal__two-layer">

                            <div class="row0 d-flex flex-wrap">

                                <div class="item0 col-4 d-flex">
                                    <span class="modal-body__label flex-100"><?=_sodienthoai?>:</span>
                                </div>

                                <div class="item0 col-8 d-flex">
                                    <span class="modal-body__content"><?=$phone?></span>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item0 col-12">

                        <div class="wrap-modal__two-layer">

                            <div class="row0 d-flex flex-wrap">

                                <div class="item0 col-4 d-flex">

                                    <span class="modal-body__label flex-100">Email</span>

                                </div>

                                <div class="item0 col-8 d-flex">

                                    <span class="modal-body__content"><?=$email?></span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item0 col-12">

                        <div class="wrap-modal__two-layer">

                            <div class="row0 d-flex flex-wrap">

                                <div class="item0 col-4 d-flex">

                                    <span class="modal-body__label flex-100"><?=_diachi?></span>

                                </div>

                                <div class="item0 col-8 d-flex">

                                    <span class="modal-body__content"><?=$address?></span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item0 col-12">

                        <div class="wrap-modal__two-layer">

                            <div class="row0 d-flex flex-wrap">

                                <div class="item0 col-4 d-flex">

                                    <span class="modal-body__label flex-100"><?=_ghichu?></span>

                                </div>

                                <div class="item0 col-8 d-flex">

                                    <span class="modal-body__content"><?=$content?></span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item0 col-12">

                        <div class="wrap-modal__two-layer">

                            <div class="row0 d-flex flex-wrap">

                                <div class="item0 col-4 d-flex">

                                    <span class="modal-body__label flex-100"><?=_chiphihanghoa?></span>

                                </div>

                                <div class="item0 col-8 d-flex">

                                    <span class="modal-body__content"><?=$total?></span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item0 col-12">

                        <div class="wrap-modal__two-layer">

                            <div class="row0 d-flex flex-wrap">

                                <div class="item0 col-4 d-flex">

                                    <span class="modal-body__label flex-100"><?=_giaship?></span>

                                </div>

                                <div class="item0 col-8 d-flex">

                                    <span class="modal-body__content"><?=_thoathuan?></span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item0 col-12">

                        <div class="wrap-modal__two-layer">

                            <div class="row0 d-flex flex-wrap">

                                <div class="item0 col-4 d-flex">

                                    <span class="modal-body__label flex-100"><?=_thanhtien?></span>

                                </div>

                                <div class="item0 col-8 d-flex">

                                    <span class="modal-body__content modal-body__content-price"><?=$total?></span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item0 col-12 mt10">

                        <span class="d-block modal-checkout__payship mb10" style="text-align:left;mb10"><i class="fa-solid fa-truck mr5"></i><?=_phuongthucgiaohang?>: <span><?=$rows_htgh["ten"]?></span> </span>

                        <span class="d-block modal-checkout__payment" style="text-align:left;"><i class="fa-solid fa-credit-card mr5"></i> <?=_phuongthucthanhtoan?>: <span><?=$rows_httt["ten"]?></span></span>

                    </div>

                </div>

                        </div>
                    
                    </div>

                </div>

            </div>

            <div class="modal-footer d-flex flex-wrap">

                <div class="btn-boking item col-6 w-100-m  pl0 pd-m-0">
                    <a href="javascript:void(0)" class="btn-taovandon close-modal cl-white">
                        <?=_back?>
                    </a>
                </div>

                <div class="btn-boking mb10 item col-6 w-100-m pr0 pd-m-0">
                    <a href="javascript:void(0)" class="btn-taovandon cl-white" id="checkout-modal__submit-form">
                        <?=_xacnhan?>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>