"use strict";

_FRAMEWORK={

	init:function(){

		_FRAMEWORK.preLoader();

		_FRAMEWORK.carouselSlider();

		_FRAMEWORK.searchPage();

		_FRAMEWORK.submitContact();



		_FRAMEWORK.emailForm();

		_FRAMEWORK.callBackPhone();

		_FRAMEWORK.owlSlider();

		_FRAMEWORK.ratioImage();

		_FRAMEWORK.LoadingImages();

		// _FRAMEWORK.newsLetter();

		_FRAMEWORK.menuMobile();

		// _FRAMEWORK.validateForm();

		_FRAMEWORK.tocList();



		_FRAMEWORK.scrollTo();

		_FRAMEWORK.ajaxMore();

		_FRAMEWORK.custom.init();

		_FRAMEWORK.fixMenu();

		_FRAMEWORK.formSearch();

		_FRAMEWORK.mobiTool();

		_FRAMEWORK.placeHolder();

		_FRAMEWORK.langSelect();

		_FRAMEWORK.simple();

		_FRAMEWORK.onChangePlayer();

		_FRAMEWORK.checkoutModal();
		
		new WOW().init();


	},

	ratioImage:function(){

		var ratioAll = document.querySelectorAll('.ratio-img');

		for (let index = 0; index < ratioAll.length; index++) {

			let width = ratioAll[index].getAttribute("img-width");

			let height = ratioAll[index].getAttribute("img-height");
			
			ratioAll[index].style.setProperty('--data-ratio',`calc((${height} / ${width}) * 100%)`);

			
		}

	},
	owlSlider: () => {
		
		
		
		if (exists('#owl-banner')) {
			$('#owl-banner').owlCarousel({
				items: 1,
				slideSpeed: 1500,
				autoplayHoverPause: true,
				margin: 0,
				nav: false,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: true,
				autoplayTimeout:10000, 
				loop: true,
				dots: false,
				lazyLoad: true,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items: 1
					},
					600: {
						items: 1
					},
					1000: {
						items: 1
					},
					1200: {
						items: 1
					},


				}
			});
		}


		
	},
	LoadingImages:function(){

		const images = document.querySelectorAll(".ratio-img__content");

		const imgOptions = {};

		const imgObserver = new IntersectionObserver((entries, imgObserver) => {

		entries.forEach((entry) => {

			if (!entry.isIntersecting) return;

			const img = entry.target;

			const newUrl = img.getAttribute('data-src');

			img.src = newUrl;

			img.classList.remove('img-scale');

			imgObserver.unobserve(entry.target);
			
		});

		}, imgOptions);

		images.forEach((img) => {

			imgObserver.observe(img);

		});

	},


	simple: function(){
		$('.js-tab').click(function(){
			$('.js-tab').removeClass('show');
			$(this).addClass('show');
			let target = $(this).data('target'); 
			$('.box-tab').removeClass('show');
			$(target).addClass('show');
			$('.box_product').fadeIn(3000);
		})
		$(".js-booking").click(function(){
			let params = "";
			if($("#params").length>0){
				params = $("#params").val();
			}
			let id = $(this).data("id");
			let lang = $(this).data("lang");
			window.location.href = lang+"/booking?id="+id+params;
		})
	},
	onChangePlayer:function(){
		$('#edit-time__bookroom').click(function(){
			$('.wrapper-formbooking__info-asdie-twoplayer').toggleClass('activePlayer');
		})
	},
	langSelect:function(){
		$("#langselect").change(function(){
			let link = $(this).find("option:selected").data("link");
			window.location.href = link;
		})
	},
	fixMenu:function() {

		var nav = $('.menu-sticky');

		var _height=$('.menu-sticky').height();

		var nav_m = $('.menu-sticky[mobile]');

		var _height_m = $('.menu-sticky[mobile]').height();

		$(window).scroll(function() {

			if ($(this).scrollTop() > _height) {

				nav.addClass("sticky");

			} else {

				nav.removeClass("sticky");

			}

			if($(this).scrollTop() > _height_m) {

				nav_m.addClass("sticky");

			}else{

				nav_m.removeClass("sticky");

			}

		});

	},

	mobiTool: function(){
        $('.js-mobi-tool').click(function(){
            var $this = $(this);
            var target = $this.data('target');
            var id = $this.attr('id');
            $('.js-mobi-tool').each(function(){
                if($(this).attr('id') != id & $(this).find('.mobi-tool-act').hasClass('active')){
                    var t = $(this).data('target');
                    $(this).find('.mobi-tool-act').removeClass('active');
                    $(t).removeClass('active');
                }
            })
            $this.find('.mobi-tool-act').toggleClass('active');
            $(target).toggleClass('active');
        });
        $(".toggle-btn").click(function(e){
            e.preventDefault();
            var $next = $(this).parent().next();
            var $grandparent = $(this).parent().parent().parent();
            $grandparent.find("li").removeClass('active');
            $grandparent.find(".ic-arrow").removeClass('active');
            if($next.hasClass("show")){
                $next.removeClass("show");
                $next.slideUp(500);
                $(this).parent().parent().addClass('active');
            }else{
                $grandparent.find("li .inner").removeClass("show");
                $grandparent.find("li .inner").slideUp(500);
                $grandparent.find("i").attr("class","fal fa-chevron-down");
                $next.slideDown(500);
                $(this).parent().parent().addClass('active');
                $(this).addClass('active');
                $next.addClass("show");
            }
            
        });
        $('.js-droptab').click(function() {
            var $this = $(this);
            $('.js-droptab').removeClass('active');
            if ($this.parent().hasClass('active')) {
                $this.parent().removeClass('active');
                $this.removeClass('active');
                $this.next().slideUp(500);
            } else {
                $(".js-droptab").parent().removeClass('active');
                $(".js-droptab").next().slideUp(500);
                $this.parent().addClass('active');
                $this.addClass('active');
                $this.next().slideDown(500);		
            }
        });
    },

	placeHolder:function(){

		$('input[data-input-search]').placeholderTypewriter({text: PLACEHOLDER});

	},
	
	custom:{
		init: function(){
			_FRAMEWORK.custom.active();
			_FRAMEWORK.custom.checkSeoImg();
			_FRAMEWORK.custom.tabloadData();
			_FRAMEWORK.custom.map();
			_FRAMEWORK.custom.chaychu();
			_FRAMEWORK.custom.preLoader();
			_FRAMEWORK.custom.contact();
			_FRAMEWORK.custom.clickyeuthich();
			_FRAMEWORK.custom.DropDown();
			_FRAMEWORK.custom.checkFormRoom();
			_FRAMEWORK.custom.overflowscroll();
			// _FRAMEWORK.custom.tabClickSearch();
			_FRAMEWORK.custom.LoadPlace();
		},
		LoadPlace:()=>{
			$('select.selectplace').on('change',(e)=>{
				var val = $(e.target).find('option:selected').val();
				var action = $(e.target).attr("id");
				var result = '';
				if(action == 'city'){
					result = 'dist';
				}else{
					result = 'ward';
				}
				if(action == 'city' && val == 0){
					$('#dist').val('');
					$('#dist').html('<option value="0">Quận Huyện</option>');
					$('.nice-select').niceSelect('update');
					$('#ward').val('');
					$('#ward').html('<option value="0">Phường Xã</option>');
					$('.nice-select').niceSelect('update');
				}else if(action == 'dist' && val == 0){
					$('#ward').val('');
					$('#ward').html('<option value="0">Phường Xã</option>');
					$('.nice-select').niceSelect('update');
				}
				if(val!=0){
					$.ajax({
						url:'ajax/ajaxLoadPlace.php',
						type:'POST',
						data:{value:val,action:action},
						success:(res)=>{
							$('#'+result).html(res);
							$('.nice-select').niceSelect('update');
						}
					});
				}	
			});
		},
		checkFormRoom:function(){

			$("#formbooking-btn-submit").click(function(){
	
				if(!$('#agree').prop("checked")){
		
					alert(lang.chua_dongy_dieukhoan);
	
					return false;
	
				}else{
	
					$("#form-bookroom").submit();
	
				}
			});
	
		},
		submitFormCheckOut:function(){

			$('#checkout-modal__submit-form').click(function(){
	
				$("#form-checkout").submit();
	
			});
	
		},
		DropDown:()=>{
			$(()=>{
				$(".typeofhouse").click((e)=>{
					$(e.target).parent().toggleClass('active');
				});
				$(".details-price").click((e)=>{
					if($(e.target).is('a')){
						$(e.target).toggleClass('active');
						$('.details-phone').removeClass('active');
					}else{
						$(e.target).parent().toggleClass('active');
						$('.details-phone').removeClass('active');
					}
					
				});
				$('.details-phone').click((event)=>{
					if($(event.target).is('a')){
						$(event.target).toggleClass('active');
						$('.details-price').removeClass('active');
					}else{
						$(event.target).parent().toggleClass('active');
						$('.details-price').removeClass('active');
					}
				});
				$('.navSearch__link').click((event)=>{
					$('.navSearch__link').removeClass('pl_active');
					$(event.target).toggleClass("pl_active");
				});
			});
		},
		// tabClickSearch:()=>{		
		// 	var buttons = document.getElementsByClassName('tablinks');
		// 	var contents = document.getElementsByClassName('tabcontent');
		// 	function showContent(id){
		// 		for (var i = 0; i < contents.length; i++) {
		// 			contents[i].style.display = 'none';
		// 		}
		// 		var content = document.getElementById(id);
		// 		content.style.display = 'block';
		// 	}
		// 	for (var i = 0; i < buttons.length; i++) {
		// 		buttons[i].addEventListener("click", function(){
		// 			var id = this.getAttribute('data-target');
		// 			for (var i = 0; i < buttons.length; i++) {
		// 				buttons[i].classList.remove("active");
		// 			}
		// 			this.className += " active";
		// 			showContent(id);
		// 		});
		// 	}
		// 	showContent('MoTa');
		// },
		
		chaychu:function(){
			$('.chaychu > div').textillate({
				in: {
					effect: 'fadeInLeft'
				},
				out: {
					effect: 'fadeInRight'
				},
				loop: true
			});
		},
		clickyeuthich:()=>{
			$(function(){
				$(".yeuthich").click(function(){
					$(this).toggleClass("active");
				})
			});
		},
		map:function(){
			$('body').click(".js-map",function(e){
				var id = e.target.getAttribute('data-id');
				if(id != "" & id != null & id != undefined){
					var params = {id:id};
				}else{
					if(e.target.classList.contains('js-map')){
						params = {};
					}
				}
				if(e.target.classList.contains('js-map')){
					$.post("ajax/loadMap.php",params,
					function(data,status){
						if(status == "success"){
							$("body").append(data);
							$(".close-modal").click(function(){
								$("#modal-map").remove();
							})
						}
					})
					$("body").click(".modalmap,.modalmap-container",function(event){   
						var modals = document.getElementById("modal-map");   
						var container = document.getElementById("modalmap-container");
						if(event.target == modals || event.target == container){
							$("#modal-map").remove();
						}
					})
				}
			});
		},
		preLoader:function(){
			$('.popup__close-btn').click(()=>{
				$('.home--popup').remove();
			});
			var h_s=$('.h__box__subject').height()/3;

			if(h_s>0){

			
				$('.h__box__subject').css({'max-height':'10'+'px','overflow':'hidden'}).append('<div class="append__subject"><a class="expend"><span>Xem thêm</span>&nbsp;<i class="fa-light fa-angle-down"></i></a></div>');
				$('body').on('click','.append__subject a.expend',function(){
					if(!$(this).hasClass('is-expend')){
						$(this).addClass('is-expend');
						$('.h__box__subject').css('max-height','100%');
						$('.append__subject a.expend span').text(lang.thugon);
						$('.append__subject a.expend i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
					}else{
						$(this).removeClass('is-expend');
						$('.h__box__subject').css('max-height','10px');
						$('.append__subject a.expend span').text(lang.xemthem);
						$('.append__subject a.expend i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
					}
					
				});

			}
		
	
		},
		tabloadData: function(){

			$('[item-tab]').click(function(){
				var data = $(this).attr('item-tab');
				var rel = $(this).attr('rel');
				var box = $(this).attr('tab-box');
				if(rel != '',rel != undefined && rel !=null){
					var params = {
						data: data,
						rel:rel		
					}
				}else{
					var params = {
						data: data
					}
				}
				$('[item-tab]').removeClass('active');
				$(this).addClass('active');
				$.post('ajax/loadNews.php',params,function(data,status){
					if(status == 'success'){
						$(box).html(data);
					}
				})
			});

		},
		tabtoggle: function(){
			$('.js-droptab').click(function() {
				var $this = $(this);
				if ($this.parent().hasClass('active')) {
					$this.parent().removeClass('active');
					$this.next().slideUp();
					$this.find("i").removeClass('fa-minus');
					$this.find("i").addClass('fa-plus');
				} else {
					$(".js-droptab").parent().removeClass('active');
					$(".js-droptab").next().slideUp();
					$(".js-droptab").find("i").removeClass('fa-minus');
					$(".js-droptab").find("i").addClass('fa-plus');
					$this.parent().addClass('active');
					$this.next().slideDown();
					$this.find("i").removeClass('fa-plus');
					$this.find("i").addClass('fa-minus');			
				}
			});
		},
		checkSeoImg:function(){
			$('img').each(function(){
				var alter = $(this).attr('alt');
				if(alter == "" || alter == null || alter == undefined){
					$(this).attr('alt',"I-WEB");
				}
			})
		},
		contact:function(){
			$(".js-content").click(function(){
				var _id = $(this).data('id');
				$.post("ajax/contact-form.php",{
					id: _id
				},
				function(data,status){
					if(status == "success"){
						$("body").append(data);
						_FRAMEWORK.custom.sendMail();
						$(".close-modal").click(function(){
							$("#modal-contact").remove();
						})
					}
				})
			});
		   
			$("body").click(".modal,.modal-container",function(event){   
				var modals = document.getElementById("modal-contact");   
				var container = document.getElementById("modal-container");
				if(event.target == modals || event.target == container){
					$("#modal-contact").remove();
				}
			})
		},
		sendMail:function(){
			var _o='.btn-booking',
			_input_fullname_modal='input.booking-input[name="fullname"]',
			//_input_email_modal='input.booking-input[name="email"]',
			_input_phone_modal='input.booking-input[name="phone"]';
			// _input_address_modal='input.booking-input[name="address"]',
			//_input_content_modal='textarea.booking-input[name="content"]';
			$(_o).click(function(e){
				e.preventDefault();
				var _that=$(this);
				var _i=$(_input_fullname_modal).val();
				//var _k=$(_input_email_modal).val();
				// var _p=$(_input_address_modal).val();
				var _s=$(_input_phone_modal).val();
				//var _t=$(_input_content_modal).val();
				if(isBlank(_i)){
				    _FRAMEWORK.showError('Vui lòng nhập họ tên !','error');
				    $(_input_fullname_modal).focus();
				    return false;
				}
				
				else 
				// if (isBlank(_k)) {
				// 	_FRAMEWORK.showError('Vui lòng nhập email !','error');
				// 	return false;
				// } 
				// else if (!isEmail(_k)) {
				// 	_FRAMEWORK.showError('Email không đúng định dạng !','error');
				// 	$(_input_email_modal).focus();
				// 	return false;
				// }
				// else if(isBlank(_p)){
				//     _FRAMEWORK.showError('Vui lòng nhập địa chỉ !','error');
				//     $(_input_address_modal).focus();
				//     return false;
				// }
				// else if(isBlank(_s)){
				//     _FRAMEWORK.showError('Vui lòng nhập số điện thoại !','error');
				//     $(_input_phone_modal).focus();
				//     return false;
				// }
				if(!validatePhone(_s)){
				    _FRAMEWORK.showError(lang.sdtkhongdung,'error');
				    $(_input_phone_modal).focus();
				    return false;
				}
				// if (isBlank(_t)) {
				//     _FRAMEWORK.showError('Vui lòng nhập nội dung !','error');
				//     $(_input_content_modal).focus();
				//     return false;
				// } 
				else{
					$.ajax({
						url: 'ajax/ajaxNewsletter.php',
						type:'POST',
						data:{
							fullname:_i,
							// email:_k,
							// address:_p,
							phone:_s,
							// content:_t
						},
						dataType: 'json',
						beforeSend:function(){
							_that.addClass('loading');
						},
						success:function(res){
							setTimeout(function(){
								_that.removeClass('loading');
								if(res.status==200){
									_FRAMEWORK.showError(res.message,'success');
								}else{
									_FRAMEWORK.showError(res.message,'error');
								}
								$("#modal-contact").remove();	
							},2000);
						}
					});
					$(_input_fullname_modal).val('');
					$(_input_email_modal).val('');
					$(_input_phone_modal).val('');
					// $(_input_adress_modal).val('');
					$(_input_content_modal).val('');
				}
			});
		},
		pagingData:function(page, per_page, url, id_list,id_cat,type, tabs){
			$.post(
				"ajax_paging/"+url,
				{
					page: page,
					per_page: per_page, 
					id_list: id_list, 
					id_cat:id_cat,
					type: type
				},function(data,status){
					if(status == "success"){
						$(tabs).html(data);

							$(tabs + ' .pagination li.active').click(function() {

							var pager = $(this).attr('p');

							_FRAMEWORK.custom.pagingData(pager, per_page, url, id_list,id_cat,type, tabs);

							goToByScroll(tabs);

            			});
					}
				}
			);
		},
		overflowscroll:function(){
			// $('a[data-catology-prev]').click(function(){
			// 	var scroll = $(this).next().scrollLeft();
			// 	$(this).next().scrollLeft(scroll-400);
			// });

			// $('a[data-catology-next]').click(function(){
			// 	var scroll = $(this).prev().scrollLeft();
			// 	$(this).prev().scrollLeft(scroll+400);
			// });

			$('span[data-catology-prev]').click(function(){

				var scroll = $('.wrapper-products__list').scrollLeft();
	
				$('.wrapper-products__list').animate({scrollLeft: scroll - 300}, 50);
	
			})
	
			$('span[data-catology-next]').click(function(){
	
				var scroll = $('.wrapper-products__list').scrollLeft();
	
				$('.wrapper-products__list').animate({scrollLeft: scroll + 300}, 50);
	
			})

		},
		active:function(){
			$(".js-active").click(function(){
				var $this = $(this);
				var targetid = $this.attr("data-target");
				$(".js-active").removeClass("active");
				
				$this.addClass("active");
				if(!$(targetid).hasClass("active")){	
					$(targetid).addClass("active");			
				}else{
					$(targetid).removeClass("active");	
				}
			});

			$(".js-cat").click(function(){
				var $this = $(this);
				var targetid = $this.attr("data-target");
				var idlist = $this.attr("data-list");
				var idcat = $this.attr("data-cat");
				var type = $this.attr("data-type");
 				$(".js-cat[data-target='" + targetid + "']").removeClass("active");
				$this.addClass("active");
				_FRAMEWORK.custom.pagingData(1,PAGE_INDEX,"ajax_paging.php",idlist,idcat,type,targetid);
			});
			
		}
	},
	checkoutModal:function(){

		$(".js-checkout__tpl").click(function(){

			var name = $('.wrap-input__checkout-name').val();

			var email = $('.wrap-input__checkout-email').val();

			var phone = $('.wrap-input__checkout-phone').val();

			var city = $('.wrap-input__checkout-city').val();

			var dist = $('.wrap-input__checkout-dist').val();

			var address = $('.wrap-input__checkout-address').val();

			var content = $('.wrap-input__checkout-content').val();

			var payship = $('.wrap-input__checkout-payship').val();

			var payment = $('.wrap-input__checkout-payment').val();

			var total = $('.wrap-input__checkout-payment-total').val();

			if (isBlank(name)){

				_FRAMEWORK.showError('Tên không được bỏ trống!!!','error');

				$('.input wrap-input__checkout-name').focus();

				return false;

			} else if (isBlank(phone)) {

				_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!','error');

				$('.input wrap-input__checkout-phone').focus();

				return false;

			} else if (!validatePhone(phone)) {

				_FRAMEWORK.showError('Số điện thoại sai định dạng!!!','error');

				$('.input wrap-input__checkout-phone').focus();

				return false;

			}else if (isBlank(city)) {

				_FRAMEWORK.showError('Bạn chưa chọn tỉnh thành!!!','error');

				return false

			}else if (isBlank(dist)) {

				_FRAMEWORK.showError('Bạn chưa chọn quận huyện!!!','error');

				return false

			}else if (isBlank(address)) {

				_FRAMEWORK.showError('Địa chỉ không được bỏ trống!!!','error');

				return false

			}else{

			
			$.post("ajax/modal-checkout.php",{
				name:name,
				phone:phone,
				email:email,
				address:address,
				content:content,
				payship:payship,
				payment:payment,
				total:total
			},
			function(data,status){
				if(status == "success"){
					$("body").append(data);
					_FRAMEWORK.custom.submitFormCheckOut();
					$(".close-modal").click(function(){
						$("#modal-contact").remove();
					})
				}
			});

			}
			
		});
	   
		$("body").click(".modal,.modal-container",function(event){   
			var modals = document.getElementById("modal-contact");   
			var container = document.getElementById("modal-container");
			if(event.target == modals || event.target == container){
				$("#modal-contact").remove();
			}
		})
},
	ajaxMore:function(){

		if(exists('a.more-paging[data-view]')){

			$('a.more-paging[data-view]').click(function(){

	            var _o=$(this);

	            var type=_o.attr('data-type');

	            var p=_o.attr('data-p');

	            var view=_o.attr('data-view');

				var table = _o.attr('data-table');

	            var item=_o.attr('data-item');

				var idlist = _o.attr('data-idlist');

				var typeid = _o.attr("type-id");

				var databox = _o.attr('data-target');

	            var _c=parseInt(p)+1;

				var itemDouble = item * 2;

	            $.ajax({

	                url:'ajax/loadPaging.php',


	                data:{

	                    p:p,

	                    view:view,

	                    item:item,

	                    type:type,

						table:table,

						idlist:idlist,

						typeid:typeid

	                },


	                type: 'POST',



	                dataType: 'json',



	                beforeSend: function(){



	                    _o.addClass('loading');



	                },

	                success: function(data){


	                    _o.attr('data-p',_c);

						// _o.attr('data-item',itemDouble);

	                    $(""+databox).append(data['html']);


	                    if(data['count-list']==0){



	                    	_o.addClass('d-none');



	                    }



	                },

	                complete: function(){

	                    _o.removeClass('loading');

	                }



	            })



	        });

		}

		if(exists('a.more-paging[data-view-listroom]')){

			$('a.more-paging[data-view-listroom]').click(function(){

	            var _o=$(this);

	            var type=_o.attr('data-type');

	            var p=_o.attr('data-p');

	            var view=_o.attr('data-view-listroom');

				var table = _o.attr('data-table');

	            var item=_o.attr('data-item');

				var idlist = _o.attr('data-idlist');

				var typeid = _o.attr("type-id");

				var databox = _o.attr('data-target');

	            var _c=parseInt(p)+1;

				var itemDouble = item * 2;

	            $.ajax({

	                url:'ajax/loadPaging_list.php',


	                data:{

	                    p:p,

	                    view:view,

	                    item:item,

	                    type:type,

						table:table,

						idlist:idlist,

						typeid:typeid

	                },


	                type: 'POST',



	                dataType: 'json',



	                beforeSend: function(){



	                    _o.addClass('loading');



	                },

	                success: function(data){


	                    _o.attr('data-p',_c);

						// _o.attr('data-item',itemDouble);

	                    $(""+databox).append(data['html']);


	                    if(data['count-list']==0){



	                    	_o.addClass('d-none');



	                    }



	                },

	                complete: function(){

	                    _o.removeClass('loading');

	                }



	            })



	        });

		}

		if(exists('a.more-paging[data-view-allroom]')){

			$('a.more-paging[data-view-allroom]').click(function(){

	            var _o=$(this);

	            var type=_o.attr('data-type');

	            var p=_o.attr('data-p');

	            var view=_o.attr('data-view-listroom');

				var table = _o.attr('data-table');

	            var item=_o.attr('data-item');

				var idlist = _o.attr('data-idlist');

				var typeid = _o.attr("type-id");

				var databox = _o.attr('data-target');

	            var _c=parseInt(p)+1;

				var itemDouble = item * 2;

	            $.ajax({

	                url:'ajax/loadPaging_all.php',


	                data:{

	                    p:p,

	                    view:view,

	                    item:item,

	                    type:type,

						table:table,

						idlist:idlist,

						typeid:typeid

	                },


	                type: 'POST',



	                dataType: 'json',



	                beforeSend: function(){



	                    _o.addClass('loading');



	                },

	                success: function(data){


	                    _o.attr('data-p',_c);

						// _o.attr('data-item',itemDouble);

	                    $(""+databox).append(data['html']);


	                    if(data['count-list']==0){



	                    	_o.addClass('d-none');



	                    }



	                },

	                complete: function(){

	                    _o.removeClass('loading');

	                }



	            })



	        });

		}

		if(exists('.wrapper-introduces__mid-box[data-view-intromid]')){

			$('.wrapper-introduces__mid-box[data-view-intromid]').click(function(){


				$('.col-trigger-click').removeClass('active');

	            var _o=$(this);

				_o.parent().addClass('active');

	            var type=_o.attr('data-type');

	            var view=_o.attr('data-view-listroom');

				var table = _o.attr('data-table');

				var id_news = _o.attr('data-id');

				var databox = _o.attr('data-target');

	            $.ajax({

	                url:'ajax/loadPaging_intro.php',

	                data:{

	                    view:view,

	                    type:type,

						table:table,

						id:id_news

	                },


	                type: 'POST',



	                dataType: 'json',



	                beforeSend: function(){



	                    _o.addClass('loading');



	                },

	                success: function(data){

	                    $(""+databox).html(data['html']);

						// goToByScroll(databox);

	                },

	                complete: function(){

	                    _o.removeClass('loading');

	                }



	            })



	        });

			$('.col-trigger-click:first-child').find('.wrapper-introduces__mid-box[data-view-intromid]').trigger( "click" );;

		}

		
		

		if(exists('.wrapper-introduces__bottom-left-items[data-view-introbottom]')){

			$('.wrapper-introduces__bottom-left-items[data-view-introbottom]').click(function(){

				$('.wrapper-introduces__bottom-left-items[data-view-introbottom]').removeClass('activeBT');

	            var _o=$(this);

				_o.addClass('activeBT');

	            var type=_o.attr('data-type');

	            var view=_o.attr('data-view-listroom');

				var table = _o.attr('data-table');

				var id_news = _o.attr('data-id');

				var databox = _o.attr('data-target');

	            $.ajax({

	                url:'ajax/loadPaging_itbottom.php',

	                data:{

	                    view:view,

	                    type:type,

						table:table,

						id:id_news

	                },


	                type: 'POST',



	                dataType: 'json',



	                beforeSend: function(){



	                    _o.addClass('loading');



	                },

	                success: function(data){

	                    $(""+databox).html(data['html']);

						// goToByScroll(databox);

	                },

	                complete: function(){

	                    _o.removeClass('loading');

	                }



	            })



	        });

			$('.wrapper-introduces__bottom-left-items[data-view-introbottom]:first-child').trigger('click');

		}

	},
	formSearch:()=>{
		let formSearch = document.querySelector(".form-search");
		$("#form-search").click(()=>{
			formSearch.classList.toggle('active');
			$(".form-search-parent").toggleClass("fa-xmark");	
		});
		let formSearchSticky = document.querySelector(".form-search-sticky");
		$("#form-search-sticky").click(()=>{
			formSearchSticky.classList.toggle("active");
			$(".form-search-parent-sticky").toggleClass("fa-xmark");
			
		});
	},
	preLoader:function(){



		$(".js-moredetail").click(function(){
            var target = $(this).data('target');
            $(target).toggleClass('active');
            if($(target).hasClass('active')){
                $(this).html(lang.thugon + ' <i class="ml5 fal fa-chevron-up ms-2"></i>');
            }else{  

                $(this).html(lang.xemthem + ' <i class="ml5 fal fa-chevron-down ms-2"></i>');
				
				goToByScroll(target);
            }
        })

        $(document).ready(function(){

            var x=1;

            setInterval(function(){

                var step='.process'+x;

                $('.process-line').removeClass('active');

                $(step).addClass('active');

                x++;

                if(x==7){ x=1}

                

            },1000);

        });

        

    },

    checkDomain:function(){

    	$('#domain').keypress(function(e) {

	        if(e.which==13){

	            var domain = $(this).val();

	            if (domain == '') {

	                $(this).focus();

	                return false;

	            }



	            if (domain.length <= 2) {

	                alert('Tên miền phải lớn hơn 2 ký tự!');

	                $(this).focus();

	                return false;

	            }

	            if (domain.length > 63) {

	                alert('Tên miền phải nhỏ hơn 63 ký tự');

	                $(this).focus();

	                return false;

	            } else {

	                window.location.href = "whois?domain=" + domain;

	            }

	        }

	    });

	    $('button#btn-check,.btn-check-domain').click(function() {

		    var domain = $('#domain').val();

	        if (domain == '') {

	            $('#domain').focus();

	            return false;

	        }



	        if (domain.length <= 2) {

	            alert('Tên miền phải lớn hơn 2 ký tự!');

	            $('#domain').focus();

	            return false;

	        }

	        if (domain.length > 63) {

	            alert('Tên miền phải nhỏ hơn 63 ký tự');

	            $('#domain').focus();

	            return false;

	        } else {

	            window.location.href = "whois?domain=" + domain;

	        }

		});

		var res='';

	    $('ul li[data-domain]').each(function(i, v) {

	        var v = $(this).attr('data-domain');

	        var v_v = '.' + v;

	        var domain=_DOMAIN;

	        res += '<li data-domain="'+v+'">\
				<div class="left-res">'+domain+'<span>'+v_v+'</span></div>\
					<div class="right-res"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>\
				</li>';

	    });

	    $('ul li[data-domain]').each(function(i, v) {

	        var v = $(this).attr('data-domain');

	        var v_v = '.' + v;

	        var str=_DOMAIN;

	        var mang=str.split('.');

	        var domain=mang[0];

	        $.ajax({

	            url: 'ajax/domain.php',

	            type: 'POST',

	            data: {

	                domain: domain,

	                ext: v

	            },

	            success: function(data) {

	                var elem = $("li[data-domain=\"" + v + "\"]");

	                data = $.parseJSON(data);

	                if (data.status == "1") {

	                    elem.find('.left-res').html('<div class="left-res">' + domain +

	                        '<span class="text-success">' + v_v + '</span></div>');

	                    elem.find(".right-res").html(

	                        "<a class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#ModalNotice\">" +

	                        "Chưa đăng ký" + "</a>");

	                } else {

	                    elem.find('.left-res').html('<div class="left-res">' + domain +

	                        '<span class="text-danger">' + v_v + '</span></div>');

	                    elem.find(".right-res").html("<a class=\"btn btn-danger\">" +

	                        "Đã đăng ký" + "</a>");

	                }

	            }

	        });

	    });

	    var html_result = '<ul class="domainResults">'+res+'</ul>';

		$('#domainCheckResults').html(html_result);

    },

	scrollTo:function(){

		$('body').append('<div id="back-to-top" style=""><a class="top arrow"><i class="fa fa-angle-up"></i> <span></span></a></div>');

	    $(window).scroll(() => {

	        if ($(window).scrollTop() > 100) {

	            $('#back-to-top .top').addClass('animate_top');

	        } else {

	            $('#back-to-top .top').removeClass('animate_top');

	        }

	    });

	    $('#back-to-top .top').click(() => {

	        $('html, body').animate({ scrollTop: 0 }, 500);

	    });

		$('.slide-menu-right').click(function() {

            var id=$(this).attr('data-id');

            var container = $('#slide-menu'+id);

            sideScroll(container, 'right', 25, 100, $(".slide-menu"+id).width());

        });



        $('.slide-menu-left').click(function() {

            var id=$(this).attr('data-id');

            var container = $('#slide-menu'+id);

            sideScroll(container, 'left', 25, 100, $(".slide-menu"+id).width());

        });

	},

	validateForm:function(){

		if(exists($('#submit-form'))){

			$('#submit-form').validate({

		        rules: {

		            'fullname': { required: true },

		            'email': { required: true,validateEmail: true,email: true },

		            'phone':{ required:true,validatePhone: true},

		            'address':{ required: true},

		            'services':{ required: true}

		        },

		        messages: {

		            'fullname': { required: 'Bạn chưa nhập họ tên' },

		            'email': { required: 'Bạn chưa nhập email',validateEmail:'Email không đúng định dạng',email:'Email không đúng định dạng' },

		            'phone':{ required:'Bạn chưa nhập điện thoại',validatePhone:'Điện thoại không đúng định dạng'},

		            'address':{ required: 'Bạn chưa nhập địa chỉ'},

		            'services':{ required: 'Bạn chưa chọn dịch vụ'}

		        },

		        submitHandler: function(form) {

		   

		            var thisForm = $(form);

		            if (thisForm.valid()) {

		                $.ajax({

	                    	url: 'ajax/ajaxNewsletter.php',

		                    type: thisForm.attr('method'),

		                    data: thisForm.serialize(),

		                    dataType: 'JSON',

		                    beforeSend:function(){

				                $('#btn-submit').addClass('loading');

				            },

				            error:function(res){

				                $('#btn-submit').removeClass('loading');

				                _FRAMEWORK.showError('server error!', 'error');

				            },

				            success:function(res) {

				                setTimeout(function(){

				                    $('#btn-submit').removeClass('loading');

				                    if(res.status==200){

				                        _FRAMEWORK.showError(res.message, res.error);

				                    }else{

				                        _FRAMEWORK.showError(res.message, res.error);

				                    }

				                },1500);

				            }

		                });

		                return false;

		            }

		        }



		    });

		    $.validator.addMethod("validateEmail", function (value, element) {

	            return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);

	        }, 'Email sai định dạng');

	        $.validator.addMethod("validatePhone", function (value, element) {

	            return this.optional(element) || /^((09|03|07|08|05)+([0-9]{8}))+$/i.test(value);

	        }, 'Điện thoại sai định dạng');

	    }

	},

	blockSite:function(){

	    function clickIE() {

	        if (document.all) {return false;}

	    }

	    function clickNS(e) {

	        if (document.layers||(document.getElementById&&!document.all)) {

	        if (e.which==2||e.which==3) {return false;}}

	    }

	    if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new Function("return false")

	    function disableselect(e){

	        return false

	    }

	    function reEnable(){

	        return true

	    }

	    document.onselectstart=new Function ("return false")

	    if (window.sidebar){

	        document.onmousedown=disableselect

	        document.onclick=reEnable

	    }

	    $(document).keydown(function(event){

	        if(event.ctrlKey && event.shiftKey && event.keyCode==73)

	        {        

	            return false;

	        }

	        if (event.ctrlKey && event.shiftKey && event.keyCode == 74) {

	            return false;

	        }

	        if (event.keyCode == 83 && (navigator.platform.match("Mac") ? event.metaKey : event.ctrlKey)) {

	            return false;

	        }

	        // "U" key

	        if (event.ctrlKey && event.keyCode == 85) {

	            return false;

	        }

	         if (event.keyCode == 123) {

	            return false;

	        }

	    });

	},

	menuMobile:function(){

		$('div[data-toggle-menu]').click(function() {

	        if (!$(this).hasClass('active')) {

	            $(this).addClass('active');

	            $('body').append('<div class="bg-mask"></div>');

	            $('.box-modal-menu').css({'transform': 'translateX(0)','left':'0'});

	        } else {

	            $(this).removeClass('active');

	            $('.bg-mask').remove();

	            $('.box-modal-menu').css({'transform': 'translateX(-260px)','left':'-260px'});

	        }

	    });

	    $('body').on('click', '.bg-mask', function() {

	        $('.bg-mask').remove();

	        $('.navbar-menu').removeClass('active');

	        $('.box-modal-menu').css({'transform': 'translateX(-260px)','left':'-260px'});

	    });

	    $('span.drop').click(function() {

	        if (!$(this).hasClass('active')) {

	            $(this).removeClass('active');

	            $(this).addClass('active');

	            $(this).closest('li').find('>ul').stop().slideUp();

	            $(this).closest('li').find('>ul').stop().slideDown();

	        } else {

	            $(this).removeClass('active');

	            $(this).removeClass('active');

	            $(this).closest('li').find('>ul').stop().slideUp();

	        }

	    });

		$('#fabCheckboxClick').click(function(){

			if($('.box-social-mobile').hasClass('active')){

				$('.box-social-mobile').removeClass('active');

			}else{

				$('.box-social-mobile').addClass('active');

			}
	

		});

	    $('#fabCheckbox').click(function() {

            if (this.checked) {

                $('.mask-overlay').addClass('is-active');

            } else {

                $('.mask-overlay').removeClass('is-active');

            }

        });

	},

	emailForm:function(){

		var _o='#btn-signupfor',

        _input_email='input[name="txt-email__footer"]';

	    $(_o).click(function(e){

	        e.preventDefault();

	        var _that=$(this);

	        var _k=$(_input_email).val();

				if (isBlank(_k)) {

					_FRAMEWORK.showError('Vui lòng nhập email của bạn !','error');

					$(_input_email).focus();

					return false;

				}else if (!isEmail(_k)) {

					_FRAMEWORK.showError('Email không đúng định dạng !','error');

					$(_input_email).focus();

					return false;

				}

	            $.ajax({

	                url: 'ajax/ajaxEmail.php',

	                type:'POST',

	                data:{

	                    email:_k,

	                },
	                dataType: "json",

	                beforeSend:function(){

	                    _that.addClass('loading');

	                },

	                success:function(res){

	                    setTimeout(function(){

	                        _that.removeClass('loading');

	                        if(res.status==200){

								_FRAMEWORK.showError(res.message,'success');

	                        }else{

								_FRAMEWORK.showError(res.message,'error');

	                        }

	                    },2000);

	                }

	            });

	            $(_input_email).val('');


	    });

	},

	addCart:()=>{

		$('body').on('click','.js-addcart',function(e){

			e.preventDefault();
			
			var id = $(this).attr('data-id');

			var qty = $(this).attr('data-qty');
	
			$.ajax({
	
				url:'ajax/addCart.php',
	 
				type:'POST',
	 
				data:{ 
					
					pid:id,

					quality:qty
				},
	 
				dataType:'json',
	 
				beforeSend:function(){

					$('#loader').addClass('active');
	 
				},
	 
				success:function(res){
	 
				$('.viewcart').html(res['total-product']);

				$('.viewcartm').html(res['total-product']);

				$('.view-cart').html(res['total-product']);

				$('.view-cartm').html(res['total-product']);

				$('.view-price').html(res['price-string']);

				$('#total-product').html(res['total-product']);

				$('.numb-cart').html(res['total-product']);

				$('#total-price').html(res['total-price']);

				$('.cart-price').html(res['total-price']);

				$('#js-price-temp').html(res['price-string']);

				$('#js-total-cart').html(res['price-string']);

				$('#js-total-cart1').html(res['price-string']);

				$('.body-cart').html(res['html']);

				// _FRAMEWORK.showError(res['total-price'],'success');
					
	 
				},
	 
				complete:function(){
					$('#loader').removeClass('active');
					_FRAMEWORK.showError('Thêm vào giỏ hàng thành công !','success');
	 
				}
	 
			});
			
	
		});

		$('body').on('click','.js-addcart-buynow',function(e){

			

			e.preventDefault();
			
			var id = $(this).attr('data-id');

			var qty = $(this).attr('data-qty');

			
	
			$.ajax({
	
				url:'ajax/addCart.php',
	 
				type:'POST',
	 
				data:{ 
					pid:id,
					quality:qty
				},
	 
				dataType:'json',
	 
				beforeSend:function(){

					$('#loader').addClass('active');
	 
				},
				error:function(res){

	                // _o.removeClass('loading');

	                // _FRAMEWORK.showError('server error!', 'error');

					// alert("OK");

	            },
				success:function(res){

	 
				$('.viewcart').html(res['total-product']);

				$('.view-price').html(res['price-string']);

				$('#total-product').html(res['total-product']);

				$('.numb-cart').html(res['total-product']);

				$('#total-price').html(res['total-price']);

				$('.cart-price').html(res['total-price']);

				$('#js-price-temp').html(res['price-string']);

				$('#js-total-cart').html(res['price-string']);

				$('#js-total-cart1').html(res['price-string']);

				$('.body-cart').html(res['html']);

				console.log(res.url);

				window.location.href = res.url;

				// _FRAMEWORK.showError(res['total-price'],'success');		 
					
	 
				},
	 
				complete:function(){
					
					$('#loader').removeClass('active');
	 
				}
	 
			});
			
	
		});
	},


	callBackPhone:function(){

		var _o='#btn-newsletter',

        _input_email='input[name="contact-phone1-detail"]';

	    $(_o).click(function(e){

	        e.preventDefault();

	        var _that=$(this);

	        var _k=$(_input_email).val();

	        if(isBlank(_k)){

	            _FRAMEWORK.showError(lang.nhapsodienthoai,'error');

	            return false;

	        }else if(!validatePhone(_k)){

	            _FRAMEWORK.showError(lang.sdtkhongdung,'error');

	            return false;

	        }

	            $.ajax({

	                url: 'ajax/ajaxPhone.php',

	                type:'POST',

	                data:{

	                    phone:_k,

	                },
	                dataType: "json",

	                beforeSend:function(){

	                    _that.addClass('loading');

	                },

	                success:function(res){

	                    setTimeout(function(){

	                        _that.removeClass('loading');

	                        if(res.status==200){

								_FRAMEWORK.showError(res.message,'success');

	                        }else{

								_FRAMEWORK.showError(res.message,'error');

	                        }

	                    },2000);

	                }

	            });

	            $(_input_email).val('');


	    });


	},

	carouselSlick:function(){

		if ($('.slide-news').length > 0) {
            $('.slide-news').slick({
                autoplay: true,
				arrows: false,
				dots: false,
				slidesToShow: 3,
				centerPadding: "10px",
				draggable: false,
				infinite: true,
				pauseOnHover: false,
				swipe: false,
				touchMove: false,
				vertical: true,
				speed: 1000,
				autoplaySpeed: 4000,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            slidesToShow: 3
                        }
                    }
                ]
            });
        }

	},

	carouselSlider:function(){

		var owl = $('.owl-carousel.in-home');

	  		owl.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-deplay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 5;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ['<span aria-label="Prev"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item)				

					},

					600:{

						items:Number(sm_item)				

					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});
		
		var owl2 = $('.owl-carousel.product-details');

			owl2.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-deplay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }


			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ['<span aria-label="Prev"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item)				

					},

					600:{

						items:Number(sm_item)				

					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owlbanner = $('.owl-carousel.banner-home');

			owlbanner.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

                animateOut: 'fadeOut',

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

				autoplay:play,

				autoplayTimeout: 10000,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item)				

					},

					600:{

						items:Number(sm_item)				

					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owlQuick = $('.owl-carousel.quick-slide');

		owlQuick.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin= $(this).attr('data-margin');

			var dot= $(this).attr('data-dot');

			var nav= $(this).attr('data-nav');

			var height= $(this).attr('data-height');

			var play= $(this).attr('data-play');

			var loop= $(this).attr('data-loop');

			var delay= $(this).attr('data-deplay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }


			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,	

				navText: ['<span class="constr-slider__prev constr-slider__btn"><i class="fa-light fa-angle-left"></i></span>','<span class="constr-slider__prev constr-slider__btn"><i class="fa-light fa-angle-left"></i></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});


		var owlNews = $('.owl-carousel.news-slide');

		owlNews.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}


			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,	

				navText: ['<span class="constr-slider__prev constr-slider__btn"><i class="fa-light fa-angle-left"></i></span>','<span class="constr-slider__prev constr-slider__btn"><i class="fa-light fa-angle-left"></i></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		$('.button--prev').click(function() {

			owlNews.trigger('prev.owl.carousel');
	
		});
		
		$('.button--next').click(function() {
	
			owlNews.trigger('next.owl.carousel');
	
		});

		var sliderHeader = $('.owl-carousel.slider-header');

		sliderHeader.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play= $(this).attr('data-play');

			var loop= $(this).attr('data-loop');

			var delay= $(this).attr('data-deplay');
	

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,	

				navText: ['<span class="constr-slider__prev constr-slider__btn"><i class="fa-light fa-angle-left"></i></span>','<span class="constr-slider__prev constr-slider__btn"><i class="fa-light fa-angle-left"></i></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owlPn = $('.owl-carousel.partners-carousel');

		owlPn.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-deplay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,	

				navText: ['<span class="constr-slider__prev constr-slider__btn"><i class="fa-light fa-angle-left"></i></span>','<span class="constr-slider__prev constr-slider__btn"><i class="fa-light fa-angle-left"></i></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		if(exists('#slide__feedbacks')){

			$('.trigger__feedback').click(function(){

				$('.trigger__feedback').removeClass('active');

				$(this).addClass('active');

				let index=$(this).attr('data-index');

				let target=$(this).attr('data-target');

				let sfeed=500;

				$(target).trigger('to.owl.carousel',[index,sfeed]);

			});

			$('.trigger__feedback:first-child').trigger('click');

		}

		var pdrlt = $('.owl-carousel.product-related');

		pdrlt.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-deplay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,	

				navText: ['<span class="constr-slider__prev constr-slider__btn"><i class="fa-light fa-angle-left"></i></span>','<span class="constr-slider__prev constr-slider__btn"><i class="fa-light fa-angle-left"></i></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),

						dots:true	

					},

					600:{

						items:Number(sm_item),
						
						dots:true


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		$('#product-related__prev').click(function() {

			pdrlt.trigger('prev.owl.carousel');
	
		});
		
		$('#product_related__next').click(function() {
	
			pdrlt.trigger('next.owl.carousel');
	
		});

	},

	searchPage:function(){

		$('button[data-btn-search-pc]').click(function(){

        	var t=$('#keywordspc');

	        searchEnter(t);

	    });
		$('button[data-btn-search-m]').click(function(){

        	var t=$('#keywords-m');

	        searchEnter(t);

	    });
	    $('button.button-search-m').click(function(){

        	var t=$('#keywords-m');

	        searchEnter(t);

	    });

		$('button.btn--search').click(function(){

        	var t=$('#keywords');

	        searchEnter(t);

	    });
	    

	    $('#keywords').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });

		$('#keywords-m').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });

		$('#keywordspc').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });


	    $('input[role="search-input"]').placeholderTypewriter({text: _PLACEHOLDER});

		$('input[data-inputsearch-mobile]').placeholderTypewriter({text: _PLACEHOLDER});

		

	},

	showError:function(message,status){



		 $.toast({



	        heading: lang.thongbao,



	        text: message,



	        position: 'top-right',



	        stack: false,



	        icon: status



	    });



	},

	submitContact:function(){

		$('#submit-contact').click(function() {

	        var _o=$(this);

	        var _fn = $('#customername').val();

	        var _el = $('#customerEmail').val();

	        var _pn = $('#customerPhone').val();

	        var _obj = $('#contactSubject').val();

	        var _capcha = $('#contactCapcha').val();

			var _content = $('#contactMessage').val();

	        if (isBlank(_fn)) {

	            $('#customername').focus();

	            return false;

	        } else if (isBlank(_el)) {

	            $('#customerEmail').focus();

	            return false

	        } else if (!isEmail(_el)) {

	            $('#customerEmail').focus();

	            return false;

	        } else if (isBlank(_pn)) {

	            $('#customerPhone').focus();

	            return false;

	        } else if (!validatePhone(_pn)) {

	            $('#customerPhone').focus();

	            return false;

	        }else if (isBlank(_capcha)) {

	            $('#contactCapcha').focus();

	            return false;

	        }

	        var params={

	            _fn:_fn,

	            _el:_el,

	            _pn:_pn,

	            _obj:_obj,

				_content:_content,

	            _capcha:_capcha

	        };

	        $.ajax({

	            url:'ajax/ajaxContact.php',

	            dataType:'json',

	            data:params,

	            type:'post',

	            beforeSend:function(){

	                _o.addClass('loading');

	            },

	            error:function(res){

	                _o.removeClass('loading');

	                _FRAMEWORK.showError('server error!', 'error');

	            },

	            success:function(res) {

	                setTimeout(function(){

	                    _o.removeClass('loading');

	                    if(res.status==200){

	                        _FRAMEWORK.showError(res.message, res.error);

	                        $('#customername').val('');

	                        $('#customerEmail').val('');

	                        $('#customerPhone').val('');

	                        $('#contactSubject').val('');

	                        $('#contactMessage').val('');

	                        $('#contactCapcha').val('');

	                    }else{

	                        _FRAMEWORK.showError(res.message, res.error);

	                    }

	                },1500);

	            }

	        })

	    });

	},

	tocList:function(){

		if(_TOC==1 || _LIST_TOC==1){

			$('#toc').toc({

	            selectors: 'h2, h3, h4, h5, h6',

	            container: $('.content'),

	            status: true

	          });

	          $('a#toc').click(function(){

	            $('.toc-list').toggle(200);

	          });

	        $('.toc-list').find('a').click(function(e) {

	            e.preventDefault();

		        var x = $(this).attr('data-rel');

		        goToByScroll(x);

		    });

	    }

	},

	newsLetter:function(){

		var _o='.btn-newsletter',

        _input_fullname='input[name="fullname1"]',

        _input_email='input[name="email1"]',

        _input_phone='input[name="phone1"]',

        _input_address='input[name="address1"]',

        // _input_services='select[name="services1"]',

        _input_content='textarea[name="content1"]';

	    $(_o).click(function(e){

	        e.preventDefault();

	        var _that=$(this);

	        var _i=$(_input_fullname).val();

	        var _k=$(_input_email).val();

	        var _p=$(_input_address).val();

	        // var _d=$(_input_services).val();

	        var _s=$(_input_phone).val();

	        var _t=$(_input_content).val();

	        if(isBlank(_i)){

	            _FRAMEWORK.showError('Vui lòng nhập họ tên !','error');

	            $(_input_fullname).focus();

	            return false;

	        }

	        

	        else if (isBlank(_k)) {

	            _FRAMEWORK.showError('Vui lòng nhập email !','error');

	            return false;

	        } 

	        else if (!isEmail(_k)) {

	            _FRAMEWORK.showError('Email không đúng định dạng !','error');

	            $(_input_email).focus();

	            return false;

	        }

	        else if(isBlank(_p)){

	            _FRAMEWORK.showError('Vui lòng nhập địa chỉ !','error');

	            $(_input_address).focus();

	            return false;

	        }

	        else if(isBlank(_s)){

	            _FRAMEWORK.showError('Vui lòng nhập số điện thoại !','error');

	            $(_input_phone).focus();

	            return false;

	        }if(!validatePhone(_s)){

	            _FRAMEWORK.showError('Số điện thoại không đúng định dạng !','error');

	            $(_input_phone).focus();

	            return false;

	        }

	        // else if(isBlank(_d)){

	        //     _FRAMEWORK.showError('Vui chọn dịch vụ !','error');

	        //     $(_input_services).focus();

	        //     return false;

	        // }

	        else if (isBlank(_t)) {

	            _FRAMEWORK.showError('Vui lòng nhập nội dung !','error');

	            $(_input_content).focus();

	            return false;

	        } 

	        else{

	            $.ajax({

	                url: 'ajax/ajaxNewsletter.php',

	                type:'POST',

	                data:{

	                    fullname:_i,

	                    email:_k,

	                    address:_p,

	                    // services:_d,

	                    phone:_s,

	                    content:_t

	                },

	                dataType: 'json',

	                beforeSend:function(){

	                    _that.addClass('loading');

	                },

	                success:function(res){

	                    setTimeout(function(){

	                        _that.removeClass('loading');

	                        if(res.status==200){

	                            _FRAMEWORK.showError(res.message,'success');

	                        }else{

	                            _FRAMEWORK.showError(res.message,'error');

	                        }

	                    },2000);

	                    $(_input_fullname).val('');

			            $(_input_email).val('');

			            $(_input_phone).val('');

			            $(_input_address).val('');

			            // $(_input_services).val('');

			            $(_input_content).val('');

	                }

	            });

	        }

	    });

	}



}

_FRAMEWORK.init();