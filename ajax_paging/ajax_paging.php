<?php

  require_once 'ajaxConfig.php';

  include_once "class_paging_ajax.php";

  if(isset($_REQUEST["page"]))

    {
      $idcat = "";
      
      $cond = [];

      if($_REQUEST["id_cat"]>0){
        $idcat = " and id_cat = ? ";
        array_push($cond,$_REQUEST["id_cat"]);
      }
      $idlist = "";
      if($_REQUEST["id_list"]>0){
        $idlist = " and id_list= ?";
        array_push($cond,$_REQUEST["id_list"]);
      }
      $type = $_REQUEST['type'];
      array_push($cond,$type);

      $str_van = "select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 ".$idlist." ".$idcat." and type= ? order by stt asc,id desc";

      $colclass = 'col-3 w-100-m';
  
      $paging = new paging_ajax();

      $paging->class_pagination = "pagination";

      $paging->class_active = "active";

      $paging->class_inactive = "inactive";

      $paging->class_go_button = "go_button";

      $paging->class_text_total = "total";

      $paging->class_txt_goto = "txt_go_button";

      $paging->cond = $cond;

        $paging->per_page = $_REQUEST['per_page'];   

        $sotrang=$_REQUEST['per_page'];

        $paging->page = $_REQUEST["page"];

      $paging->text_sql = $str_van;

        $result_pag_data = $paging->GetResult();

    }

    

?>

<div class="row">

    <?php if(count($result_pag_data)>0){ ?>

    <?php foreach ($result_pag_data as $key => $value){

       $alias = $func->getAlias($value['id_list'],'baiviet_list', $func->getCom($value['type']));
      
      ?>

      <div class="col l-4 m-4 c-6 mb20 d-flex flex-column">

        <div class="energy-colorboard__box d-flex flex-column">

          <div class="energy-colorboard__box-img">

            <a href="<?=$func->getCom($value["type"])?>/<?=$alias.$value["tenkhongdau"]?>" title="<?=$value["ten_$lang"]?>" class="d-block hover-left" rel="dofollow">

              <img src="resize1/385x288/1/<?=_upload_baiviet_l.$value["photo"]?>" loading="lazy" alt="<?=$value["ten_$lang"]?>" <?=$func->errorImg()?>>

            </a>

          </div>

          <div class="energy-colorboard__box-detail d-flex flex-column">

            <h5 class="energy-colorboard__box-detail-title line-2 mg0">

              <a href="<?=$func->getCom($value["type"])?>/<?=$alias.$value["tenkhongdau"]?>" title="<?=$value["ten_$lang"]?>" rel="dofollow"><?=$value["ten_$lang"]?></a>

            </h5>

          </div>

        </div>

      </div>

    <?php } ?>

    <?php if($paging->getRow()>$_REQUEST['per_page']){?>

    <div class="col l-12 m-12 c-12">

        <?= $paging->Load()?>

    </div>

    <?php }?>

    <?php }else{ ?>

    <div class="col l-12 m-12 c-12">
      <p class="t-center"><?=_noidungdangcapnhat?></p>
    </div>

    <?php }?>

</div>