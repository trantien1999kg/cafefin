<?php
    require_once 'ajaxConfig.php';

    @$data=isset($_POST['p']) ? $_POST['p'] : '';

    @$id=isset($_POST["value"]) ? $_POST["value"]:'';

    @$action= isset($_POST["action"]) ? $_POST["action"] : '';

    if($action == 'city'){
        $title = 'Quận Huyện';
        $result = $db->rawQuery("select id,ten,tenkhongdau from #_place_dist where id_city=?",array($id));

    }elseif($action=='dist'){
        $title = 'Phường Xã';
        $result = $db->rawQuery("select id,ten,tenkhongdau from #_place_ward where id_dist=?",array($id));
    }

    echo "<option value='0'>{$title}</option>";

    foreach($result as $k => $v){     

        echo "<option value=".$v['id'].">".$v['ten']."</option>";

    }
?>