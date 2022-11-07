<?php 

    $privacyPolicy = $func->OneDataDes('desc-security','object');     //Mô tả chính sách bảo mật

    $typeCard = $func->AllData('id,','loai-the',null,null,'array');   //Lấy toàn bộ loại thẻ thanh toán

    $currentYear = date('Y')+50;
    
    // $disabled=[
    //     '01/06/2022'=>array('price'=>200000),
    //     '02/09/2022'=>array('price'=>210000),
    //     '30/04/2022'=>array('price'=>220000),
    //     '01/05/2022'=>array('price'=>230000)
    // ];
    // $str='20/06/2022 - 22/06/2022,20/06/2022 - 22/06/2022,20/06/2022 - 22/06/2022,20/06/2022 - 22/06/2022';
    // $arr=explode(',',$str);
    // $arr=explode(' - ',$str);
    // var_dump($arr);
    // list($a,$b)=explode(' - ',$str);
    // var_dump($a);

?>

<?php include_once _layouts.'sliderbooking.php'; ?>

<section class="wrapper-formbooking">

    <div class="grid wide">

        <form action="<?=$lang?>/booking?src=bookroom-handle" method="post" id="form-bookroom">

            <div class="row">

                <div class="col l-12 m-12 c-12 mb30">

                    <div class="wrapper-formbooking__title">

                        <h1>

                            <span><?=_datphong?></span>

                        </h1>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12 mb30">

                    <div class="wrapper-formbooking-header">

                        <div class="row align-items-center">

                            <div class="col l-4 m-12 c-12 mb-m-10">

                                <div class="wrapper-formbooking-header-info">

                                    <span><?=$listName["ten"]?></span>

                                </div>

                            </div>

                            <div class="col l-4 m-12 c-12 mb-m-10">

                                <div class="wrapper-formbooking-header-info t-left">

                                    <span class="d-flex align-items-center wrapper-formbooking-header-info-top">

                                        <label for=""><?=_lichtrinh?>:</label>

                                        <input type="text" name="data[arrival_date]" id="arrival_date" required readonly> <?php /*<span id="content-arrival_date"><?=(isset($_GET["time_start"])) ? $_GET["time_start"]: date('d-m-Y',time());?></span> ~ <span id="content-department_date"><?=(isset($_GET["time_end"]))  ? $_GET["time_end"] : date('d-m-Y', strtotime("+1 day"));?></span> <button type="button" class="wrapper-formbooking-header-info-edit" id="edit-time__bookroom"><i class="fa-solid fa-pen-to-square"></i></button> */ ?>
                                    
                                    </span>
                                    
                                </div>

                            </div>


                            <div class="col l-2 m-12 c-12 mb-m-10">

                                <div class="wrapper-formbooking-header-info">

                                    <span><?=_soluongnguoi?>: <?=$roomDetail["songuoi"]?></span>
                                    
                                </div>

                            </div>

                            <div class="col l-2 m-12 c-12 mb-m-10">

                                <div class="wrapper-formbooking-header-info">

                                    <span><?=$roomDetail["buaan"]?></span>
                                    
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col l-6 m-12 c-12 d-flex flex-column mb30">

                    <div class="wrapper-formbooking__info">

                        <div class="wrapper-formbooking__info-title mb20">

                            <span class="wrapper-formbooking__info-title-name"><i class="fa-solid fa-user"></i> <?=_thongtindatphong?></span>

                            <span class="wrapper-formbooking__info-title-note"><span>*</span> <?=_thongtinbatbuocdien?></span>

                        </div>

                        <div class="row">

                            <div class="col l-6 m-12 c-12">

                                <div class="wrapper-formbooking__info-row mb20">

                                    <label for=""><span>*</span> <?=_hovaten?></label>

                                    <input type="text" name="data[fullname]" value="<?=isset($_SESSION["saveForm"]["fullname"]) ?  $_SESSION["saveForm"]["fullname"] : '';?>" required placeholder="<?=_hovatencuaban?>">

                                    <input type="hidden" name="data[id_room]" value="<?=(isset($_SESSION["saveForm"]["id_room"])) ?  $_SESSION["saveForm"]["id_room"] : $roomDetail["id"];?>">

                                    <input type="hidden" name="data[id_list_room]" value="<?=isset($_SESSION["saveForm"]["id_list_room"]) ?  $_SESSION["saveForm"]["id_list_room"] : $listName["id"]?>">

                                    <input type="hidden" name="data[people]" value="<?= isset($_SESSION["saveForm"]["people"]) ?  $_SESSION["saveForm"]["people"] : $roomDetail["songuoi"]?>">

                                    <input type="hidden" name="data[price_room]" value="<?=$roomDetail["mucgia"]?>">

                                </div>

                            </div>

                            <div class="col l-6 m-12 c-12">

                                <div class="wrapper-formbooking__info-row mb20">

                                    <label for=""><span>*</span> <?=_email?></label>

                                    <input type="text" name="data[email]" value="<?=isset($_SESSION["saveForm"]["email"]) ?  $_SESSION["saveForm"]["email"] : '';?>" required placeholder="<?=_emailcuaban?>">
                            
                                </div>

                            </div>

                            <div class="col l-6 m-12 c-12">

                                <div class="wrapper-formbooking__info-row mb20">

                                    <label for=""><span>*</span> <?=_sodienthoai?></label>

                                    <input type="text" name="data[phone]" value="<?=isset($_SESSION["saveForm"]["phone"]) ?  $_SESSION["saveForm"]["phone"] : '';?>" required placeholder="<?=_sodienthoaicuaban?>">
                                    
                                </div>

                            </div>

                            <div class="col l-6 m-12 c-12">

                                <div class="wrapper-formbooking__info-row mb20">

                                    <label for=""><span>*</span> <?=_matkhauphong?></label>

                                    <input type="password" name="data[password_room]" value="<?=isset($_SESSION["saveForm"]["password_room"]) ?  $_SESSION["saveForm"]["password_room"] : '';?>" required placeholder="<?=_matkhauphongcuaban?>">
                                    
                                </div>

                            </div>

                        </div>     

                    </div>

                </div>

                <div class="col l-6 m-12 c-12 d-flex flex-column mb30">

                    <div class="wrapper-formbooking__info">

                        <div class="wrapper-formbooking__info-title mb20">

                            <span class="wrapper-formbooking__info-title-name"><i class="fa-solid fa-id-card"></i> THÔNG TIN THANH TOÁN</span>

                            <span class="wrapper-formbooking__info-title-note"><span>*</span> Thông tin bắt buộc điền</span>

                        </div>

                        <div class="row">

                            <div class="col l-6 m-12 c-12">

                                <div class="wrapper-formbooking__info-row mb20">

                                    <label for="cartType"><span>*</span> <?=_loaithe?></label>

                                    <select name="data[type_card]" required id="cartType">

                                        <option value=""><?=_chonloaithe?></option>

                                        <?php foreach($typeCard as $key=>$value){ ?>

                                            <option <?php if(isset($_SESSION["saveForm"]["type_card"]) && $_SESSION["saveForm"]["type_card"] == $value["id"]) {echo "selected";} ?> value="<?=$value["id"]?>"><?=$value["ten"]?></option>

                                        <?php }?>

                                    </select>

                                </div>

                            </div>

                            <div class="col l-6 m-12 c-12">

                                <div class="wrapper-formbooking__info-row mb20">

                                    <label for=""><span>*</span> <?=_sothe?></label>

                                    <input type="text" name="data[card_code]" value="<?=isset($_SESSION["saveForm"]["card_code"]) ?  $_SESSION["saveForm"]["card_code"] : '';?>" placeholder="<?=_sothecuaban?>">
                            
                                </div>

                            </div>

                            <div class="col l-6 m-12 c-12">
                                
                                <div class="wrapper-formbooking__info-row mb20">

                                    <label for="expirationDate"><span>*</span> <?=_ngayhethan?></label>

                                    <div class="row">

                                        <div class="col l-6">

                                            <select name="data[expiration_month]" required class="wrapper-formbooking__info-row-select" id="expirationDate">

                                                <option value=""><?=_chonthang?></option>

                                                <?php for($i=1;$i<=12;$i++){ ?>

                                                <option <?php if(isset($_SESSION["saveForm"]["expiration_month"]) && $_SESSION["saveForm"]["expiration_month"] == $i) {echo "selected";} ?> value="<?=$i?>"><?=_thang?> <?=$i?></option>

                                                <?php }?>

                                            </select>

                                        </div>

                                        <div class="col l-6">
        
                                            <select name="data[expiration_year]" required class="wrapper-formbooking__info-row-select" id="expirationYear">

                                                <option value=""><?=_chonnam?></option>

                                                <?php  foreach (range(2000, $currentYear) as $value) { ?>

                                                <option <?php if(isset($_SESSION["saveForm"]["expiration_year"]) && $_SESSION["saveForm"]["expiration_year"] == $value) {echo "selected";} ?> value="<?=$value?>"><?=$value?></option>

                                                <?php }?>



                                            </select>

                                        </div>

                                    </div>
                            
                                </div>

                            </div>

                            <div class="col l-6 m-12 c-12">

                                <div class="wrapper-formbooking__info-row mb20">

                                    <label for=""><?=_macapcha?></label>

                                    <div class="wrapper-formbooking__info-row-body">

                                        <span>

                                            <img height="40" class="cs-pointer" src="img.php" onclick="$(this).attr('src', 'img.php?rand=' + Math.random())" alt="Mã capcha"/>

                                        </span>

                                        <input type="text" placeholder="<?=_macapcha?>" required name="capcha_bookroom">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12 mb30">

                    <div class="wrapper-formbooking-bottom">

                        <div class="wrapper-formbooking__aside mb30">
                            
                            <div class="wrapper-formbooking__aside-des"><?= htmlspecialchars_decode($privacyPolicy->mota)?></div>

                        </div>

                        <div class="wrapper-formbooking__check">

                            <label for="agree">

                                <input type="radio" value="1" id="agree" required> <?=_chinhsachbaomat?>

                            </label>
                        
                        </div>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12">

                    <div class="wrapper-formbooking-btn t-center">

                        <button type="button" id="formbooking-btn-submit"><?=_xacnhandatphong?></button>

                    </div>

                </div>

            </div>

        </form>

    </div>

</section>
