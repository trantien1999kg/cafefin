<section class="carts pt10 pb20 bg-bray">

	<div class="container">

		<?php if(count($_SESSION['cart'])==0){ ?>

			<div class="row d-flex flex-wrap ds-mobile">

            
				<div class="empty-cart pd20 col-9 t-center mt-10">

					<img src="images/mascot@2x.png" alt="i-web" class="empty__img">

					<p class="empty__note mt-10"><?=_khongcosanpham?></p><a href="san-pham" class="empty__btn"><?=_tieptucmua?></a>

				</div>


			</div>
			
		<?php }else{ ?>
			
		<div class="row10 d-flex flex-wrap">

			<div class="item10 col-12 w-100-m mb20 mt20">

				<div class="wrap__paymentstep">

					<div class="row10 d-flex flex-wrap">

						<div class="item10 col-4 <?php if($com=='carts' && $_GET["src"]=='gio-hang'){echo "bg-step__active";}?> w-100-m border-step-right">

							<a href="javascript:void(0)" class="wrap__paymentstep-links <?php if($com=='carts' && $_GET["src"]=='gio-hang'){echo "cl-white";}?>"><i class="fa-solid fa-cart-shopping-fast mr10"></i><?=_cart?></a>

						</div>

						<div class="item10 col-4 <?php if($com=='carts' && $_GET["src"]=='thanh-toan'){echo "bg-step__active";}?> d-none-m border-step-right">

							<a href="javascript:void(0)" class="wrap__paymentstep-links <?php if($com=='carts' && $_GET["src"]=='thanh-toan'){echo "cl-white";}?>"><i class="fa-solid fa-money-check mr10"></i><?=_ghvtt?></a>

						</div>

						<div class="item10 col-4 d-none-m">

							<a href="javascript:void(0)" class="wrap__paymentstep-links"><i class="fa-solid fa-circle-check mr10"></i><?=_hoantat?></a>

						</div>

					</div>

				</div>

			</div>

			<div class="item10 col-9 w-100-m">
			<?php if($deviceType=='computer'){?>

				<?=$cart->getTemplateCart($lang)?>

			<?php }else{?>

				<?=$cart->getTemplateCart_m($lang)?>

			<?php }?>
			</div>
			<div class="item10 col-3 w-100-m">
				<div class="box-total-cart-price mt10 sticky-cart">
		            <div class="shadown--cart">
		                <ul class="prices__items">
		                    <li class="prices__item"><span class="prices__text"><?=_tamtinh?></span><span class="prices__value"><span id="js-price-temp"><?=$cart->numbMoney($cart->getTotalOrder(),' ₫')?></span></span>
		                    </li>
		                </ul>
		                <div class="prices__total">
		                    <span class="prices__text"><?=_thanhtien?></span>
		                    <span class="prices__value prices__value--final"><span id="js-total-cart"><?=$cart->numbMoney($cart->getTotalOrder(),' ₫')?></span><i>(<?=_vat?>)</i>
		                    </span>
		                </div>
		            </div>
		            <a href="<?= $lang ?>/carts?src=thanh-toan" class="cart__submit cs--btn-cart t-uppercase"><?=_thanhtoan?></a>
		        </div>
			</div>
		</div>
		<?php }?>
	</div>
</section>