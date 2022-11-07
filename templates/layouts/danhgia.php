<section class="section-feedback pt30 pb30 animated fadeInUp" style="background:url(<?=_upload_hinhanh_l.$bg_ykien['photo_'.$lang]?>)no-repeat center center/cover">
	<div class="container">
		<div class="row d-flex flex-wrap">
			<div class="item col-12">
				<div class="box-feedback">
					<div class="title-feedback t-center">
						<span>ĐÁNH GIÁ KHÁCH HÀNG VỀ WEB3T</span>
					</div>
					<div class="box-desc-one col-10 w-100-m mx t-center">
						<div class="mt20">
	                    	<?=htmLspecialChars_decode($desc_one["mota_$lang"])?>
	                    </div>
	                </div>
					<div class="owl-carousel owl-theme in-home mt40" data-height="575"  data-dot="0" data-nav='1' data-loop='1' data-play='1' data-lg-items='4' data-md-items='3' data-sm-items='3' data-xs-items="1" data-margin='20'>
						<?php foreach($feedbacks as $k => $v){?>
							<div class="box-feddback o-hidden">
								<div class="thumb">
									<img class="img-block w-100-m mx o-hidden" src="<?=_thumbs?>/285x190x1/<?=_upload_baiviet_l.$v['photo']?>" alt="<?=$v['ten_'.$lang]?>" <?=$func->errorImg()?> />
								</div>
								<div class="desc-feedback bg-white pd15 t-center">
									<div class="desc line-3">
										<?=$v['mota_'.$lang]?>
									</div>
									<div class="name mt10">
										<?=$v['ten_'.$lang]?>
									</div>
									<div class="location mt5">
										<i style="color:#6b6b6b"><?=$v['job_'.$lang]?></i>
									</div>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>	
<?php if($com!='dang-ky-tu-van'){?>
<section class="newsletter pt30 pb20 animated fadeInDown">
	<div class="container">
		<div class="row">
            <div class="item col-9 w-100-m mx">
                <div class="title-default p-relative t-center">
                    <span>Đăng ký tư vấn web3t.vn</span>
                </div>
                <div class="box-desc-newsletter mt30">
                	<?=htmLspecialChars_decode($desc_two["mota_$lang"])?>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="item col-9 w-100-m mx">
				<div class="form-newsletter">
					<div class="row10 d-flex flex-wrap box-form-newsletter mt25">
						<div class="item10 col-4 w-50-m box-input mb20">
							<input type="text" name="fullname1" autocomplete="off" class="input-txt" placeholder="Họ và tên"/>
						</div>
						<div class="item10 col-4 w-50-m box-input mb20">
							<input type="number" autocomplete="off" name="phone1" class="input-txt txt-input-number" placeholder="Số điện thoại"/>
						</div>
						<div class="item10 col-4 w-50-m box-input mb20">
							<input type="text" name="email1" autocomplete="off" class="input-txt" placeholder="Email"/>
						</div>
						<div class="item10 col-4 w-50-m box-input mb20">
							<input type="text" autocomplete="off" name="address1" class="input-txt" placeholder="Địa chỉ"/>
						</div>
						<div class="item10 col-4 w-50-m box-input mb20">
							 <select class="form-control cl-black" name="services1">
                                <option value="">Chọn dịch vụ</option>
                                <?php foreach($dichvu_c1 as $k => $v){?>
                                     <option value="<?=$v['id']?>"><?=$v["ten_$lang"]?></option>
                                <?php }?>
                            </select>
						</div>
						<div class="item10 col-4 w-50-m box-input mb20">
							<button type="button" class="btn-newsletter">ĐĂNG KÝ</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>