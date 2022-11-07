<?php
    require_once 'ajaxConfig.php';

    if($func->isAjax()){

        @$data = $_POST['data'];

        if(isset($_POST['rel'])){

            @$rel = $_POST['rel'];

            $result = $db->rawQuery("select id_list,type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,ngaytao from #_baiviet where id_list=? and type=? order by stt,id desc",array($rel,$data));

        }else{

            switch($data){

                case 'tin-noi-bat':
                    $result = $db->rawQuery("select id_list,type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,ngaytao from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc",array('tin-tuc'));
                    break;
                case 'tin-tuc':
                    $result = $db->rawQuery("select id_list,type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,ngaytao from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('tin-tuc'));
                    break;
                case 'phong-thuy':
                    $result = $db->rawQuery("select id_list,type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,ngaytao from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc",array('phong-thuy'));
                    break;
                default:
                    $result = $db->rawQuery("select id_list,type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,ngaytao from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc",array($data));
                    break;
            }

        }

        $firstalias = $func->getAlias($result[0]['id_list'],'baiviet_list',$result[0]['type']);
        
    }
?>
<?php if(count($result)>0){?>
<div class="d-flex flex-wrap row">
    <div class="col-6 item w-100-m mb20i">
        <div class="news" parent>
            <div class="thumb">
                <figure class="shine">
                    <a href="<?= $result[0]['type']?>/<?= $firstalias.$result[0]['tenkhongdau']?>" title="<?= $result[0]['ten']?>">
                        <img src="<?= _upload_baiviet_l.$result[0]['photo']?>" alt="<?= $result[0]['ten']?>" />
                    </a>
                </figure>
            </div>
            <div class="content">
                <a href="<?= $result[0]['type']?>/<?= $firstalias.$result[0]['tenkhongdau']?>" title="<?= $result[0]['ten']?>">
                    <h3 class="line-3"><?= $result[0]['ten']?></h3>
                </a>
                <p class="calendar">
                    <i class="far fa-clock mr5"></i>
                    <?= $func->daysOfTheWeek($result[0]['ngaytao'])?>, Ngày
                    <?= date("d/m/Y",$result[0]['ngaytao'])?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-6 item w-100-m">
        <div class="news-box">
            <?php foreach ($result as $key => $value){
                    if($key != 0){
                        $alias = $func->getAlias($value['id_list'],'baiviet_list',$value['type']);
                    ?>
            <div class="news" child>
                <div class="thumb">
                    <figure class="shine">
                        <a href="<?= $value['type']?>/<?= $alias.$value['tenkhongdau']?>" title="<?= $value['ten']?>">
                            <img class="col-12" src="<?= _upload_baiviet_l.$value['photo']?>"
                                alt="<?= $value['ten']?>" />
                        </a>
                    </figure>
                </div>
                <div class="content">
                    <a href="<?= $value['type']?>/<?= $alias.$value['tenkhongdau']?>" title="<?= $value['ten']?>">
                        <h3 class="line-3"><?= $value['ten']?></h3>
                    </a>
                    <p class="calendar">
                        <i class="far fa-clock mr5"></i>
                        <?= $func->daysOfTheWeek($value['ngaytao'])?>, Ngày <?= date("d/m/Y",$value['ngaytao'])?>
                    </p>
                </div>
            </div>
            <?php }}?>
        </div>
    </div>
</div>
<?php }?>