<?php 
    $loaiphongs = $db->rawQuery("select ten_$lang as ten,id,tenkhongdau_$lang as tenkhongdau from #_baiviet_list where hienthi=1 order by stt asc, id desc",array('dat-phong'));
?>

<section class="wrapsc-search" style="background:url('<?= _upload_hinhanh_l.$bg_boloc["photo"]?>') center center/cover;">

    <div class="container">

        <div class="row">

            <div class="item col-12 mt10">

                <ul class="navSearch d-flex flex-wrap">
                <?php
                    if(isset($_GET["phanloaidat"])){
                ?>
                    <?php
                        foreach($phanloai as $key=>$vpl){
                    ?>
                        <li class="navSearch__item">
                            <a class="<?=($_GET["phanloaidat"]==$vpl["id"]) ? 'pl_active':''?> navSearch__link" data-id="<?=$vpl["id"]?>">
                                <?=$vpl["ten"]?>
                            </a>
                        </li>
                    <?php }?>
                <?php }else{?>
                    <?php
                        foreach($phanloai as $key=>$vpl){
                    ?>
                        <li class="navSearch__item">
                            <a class="<?=($key==0)? 'pl_active':''?> navSearch__link" data-id="<?=$vpl["id"]?>">
                                <?=$vpl["ten"]?>
                            </a>
                        </li>
                    <?php }?>
                <?php }?>
                </ul>
            </div>
            <div class="item col-12">

                <div class="box-bg-search pd20 pb20" id="synced">

                    <div class="row d-flex flex-wrap align-items-center">

                        <div class="item col-2 w-33-t mb-m-8 mb-t-16 w-33-m clearfix">

                            <div class="wrapper-box-bg-search__time">
                            
                                <input type="text" name="time" title="Nhập ngày đến"
                                    id="time_start" class="daterange wrapper-box-bg-search__time-input" value="<?=(isset($_GET['time_start']))?$_GET['time_start']:date('d-m-Y',time())?>"  placeholder="Ngày đến"/>

                                <span class="wrapper-box-bg-search__time-icon"><i class="fa-light fa-calendar-days"></i></span>

                            </div>

                        </div>

                        <div class="item col-2 w-33-t mb-m-8 mb-t-16 w-33-m clearfix">

                            <div class="wrapper-box-bg-search__time">
                                
                                <input type="text" name="time" title="Nhập ngày đi"
                                    id="time_end" class="daterange wrapper-box-bg-search__time-input" value="<?=(isset($_GET['time_end']))?$_GET['time_end']:date('d-m-Y', strtotime("+1 day"))?>" placeholder="Ngày đi"/>

                                <span class="wrapper-box-bg-search__time-icon"><i class="fa-light fa-calendar-days"></i></span>

                            </div>

                        </div>

                        <div class="item col-2 w-33-t mb-m-8 mb-t-16 w-33-m clearfix">

                            <select class="nice-select selectplace" id="loaiphong">

                                <option value=""><?=_loaiphong?></option>

                                <?php foreach ($loaiphongs as $key => $value){?>

                                <option value="<?= $value['tenkhongdau']?>" <?= ($_GET['loaiphong']==$value['tenkhongdau'])?"selected":""?>><?= $value['ten']?></option>
                                
                                <?php }?>
                                
                            </select>

                        </div>

                        <div class="item col-2 w-33-t mb-m-8 mb-t-16 w-33-m clearfix">

                            <select class="nice-select" id="songuoi">
                              
                                <option value="0"><?=_songuoi?></option>
                               
                                <option value="1" <?= ($_GET['songuoi'] == 1) ? "selected" :""?>>1</option>

                                <option value="2" <?= ($_GET['songuoi'] == 2) ? "selected" :""?>>2</option>

                                <option value="3" <?= ($_GET['songuoi'] == 3) ? "selected" :""?>>3</option>

                                <option value="4" <?= ($_GET['songuoi'] == 4) ? "selected" :""?>>4</option>

                                <option value="5" <?= ($_GET['songuoi'] == 5) ? "selected" :""?>>5</option>

                            </select>

                        </div>

                        <div class="item col-2 w-33-t mb-m-8 mb-t-16 w-33-m clearfix">
                      
                            <select id="project" class="nice-select">

                                
                                <option value="0">Trẻ em</option>

                            
                            </select>


                        </div>

                        <div class="item col-2 w-33-t w-33-m mb-m-8 mb-t-16 clearfix">

                             <button data-view-search onclick="_FRAMEWORK.booking('<?= $lang?>')" class="focus-button">

                                <?=_timphongngay?>

                            </button>
                        
                        </div>

                    </div>

                </div>

                </div>
                
            </div>
    </div>
</section>

