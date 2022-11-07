<section class="section-about pt30 pb30" style="background:url(<?=_upload_hinhanh_l.$bg_about['photo_'.$lang]?>)no-repeat center center/cover">
	<div class="container">
		<div class="row d-flex flex-wrap justify-content-space">
			<div class="item col-5 w-100-m animated fadeInLeft">
				<div class="box-desc-about">
					<div class="title-about p-relative">
						<h4>
							<a href="gioi-thieu" title="<?=$about['ten']?>">
								<?=$about['ten']?>
							</a>
						</h4>
					</div>
					<div class="box-about mt30">
						<?=htmLspecialChars_decode($about['mota'])?>
					</div>
				</div>
			</div>
			<div class="item col-7 w-100-m animated fadeInRight">
				<div class="box-thumbnail">
					<a href="gioi-thieu" title="<?=$about['ten']?>">
						<img src="<?=_upload_hinhanh_l.$about['photo']?>" alt="<?=$about['ten']?>" <?=$func->errorImg()?>/>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>