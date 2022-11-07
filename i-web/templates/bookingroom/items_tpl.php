<div class="control_frm">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
            <li><a href="index.php?com=order&act=man"><span><?=_datphong?></span></a></li>
            <li class="current"><a href="#" onclick="return false;"><?=_tatca?></a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<script language="javascript">

$(document).ready(function() {
    $('#search_btn').click(function() {
        var loai = 1;
        var madonhang = $('#madonhang').val();
        var hoten = $('#hoten').val();
        window.location = "index.php?com=bill&act=man&loai=" + loai + "&code=" + madonhang +
            "&hoten=" + hoten;
        return true;
    });
     $("#xoahet").click(function() {
        var listid=$("input[name='chon']:checked").map(function() {
            return this.value
        }).get().join(",");

        if(listid.length>0){
            $.confirm({
                title: 'Xác nhận!',
                content: 'Bạn có chắc chắn muốn xóa mục này!',
                buttons: {
                    success: {
                        text: 'Đồng ý!',
                        btnClass: 'btn-blue',
                        action: function(){
                           redirect("index.html?com=bill&act=delete&page=<?=$_GET['page']?>&listid=" + listid);
                        }
                    },
                    cancel: {   
                        text: 'Hủy ngay!',
                        btnClass: 'btn-red'
                    }
                }
            });
        }
    });
});
</script>

<form name="f" id="f" method="post">
    <div class="oneOne" style="margin-top:0;">
        <div style="float:left;">
            <input type="text" name="madonhang" id="madonhang" class="input_search" placeholder="Mã vận đơn" />
            <input type="text" name="hoten" id="hoten" class="input_search" placeholder="Họ và tên người gửi" />
            <input type="button" id="search_btn" class="greenB" value="<?=_tim?>" />
        </div>
    </div>
    <div class="oneOne" style="margin-top:0;">
        <div style="float:left;">
        </div>
    </div>
    <div class="oneOne">
        <div class="box-admin" style="display:flex; align-items:center;">
            <div class="box-action">
                <a class="btn btn-sm bg-gradient-danger text-white" id="xoahet">
                    <i class="far fa-trash-alt mr-2"></i>Xóa tất cả
                </a>
            </div>
        </div>
    </div>
    <div class="oneOne">
        <div class="widget mtop10">
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
                <thead>
                    <tr>
                        <td align="center">

                            <label class="stardust-checkbox">
                                <input class="stardust-checkbox__input" id="checkAll" type="checkbox" value=""
                                    style="display:none">
                                <div class="stardust-checkbox__box"></div>
                            </label>
                        </td>
                        <td align="center" class="sortCol" width="100">
                            <div>Mã phòng<span></span></div>
                        </td>

                        <td align="center" class="sortCol" width="150">
                            <div>Tên người đặt<span></span></div>
                        </td>

                        <td align="center" width="100">
                            <div><?=_dienthoai?></div>
                        </td>

                        <td align="center" class="sortCol" width="100">

                            <div>Giá phòng<span></span></div>

                        </td>

                        <td align="center" class="sortCol" width="150">
                            <div>Ngày đặt<span></span></div>
                        </td>

                        <td align="center" class="sortCol" width="100">
                            <div>Tình trạng<span></span></div>
                        </td>

                        <td class="tb_data_small" style="width: 100px !important;">Thao tác</td>

                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0, $count=count($items); $i<$count; $i++){ ?>
                    <tr>
                        <td align="center">
                            <label class="stardust-checkbox checker">
                                <input class="stardust-checkbox__input" name="chon" id="check<?=$i?>" type="checkbox"
                                    value="<?=$items[$i]['id']?>" style="display:none">
                                <div class="stardust-checkbox__box"></div>
                            </label>
                        </td>
                        <td align="center" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                            <?=$items[$i]['room_code']?>
                        </td>
                        <td align="center" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                            <?=$items[$i]['fullname']?>
                        </td>
                        <td align="center" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                            <?=$items[$i]['phone']?>
                        </td>
                        <td align="center" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                            <span <?php if(!empty($items[$i]['id_customer'])){ echo "color='#f00;'";}?>>
                                <?=$func->changeMoney($items[$i]['price_room'],$lang)?> đ
                            </span>
                        </td>
                        <td align="center" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                            <?= date('d/m/Y H:i:s',$items[$i]['ngaytao'])?>
                        </td>
                        <td align="center" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                            <?php 
                            $result=$db->rawQueryOne("select trangthai_$lang from #_tinhtrang where id= '".$items[$i]['room_status']."' ");
                            echo $result["trangthai_$lang"];
                        ?>
                        </td>    
                        <td class="actBtns">
                            <a class="text-primary" href="index.php?com=bookroom&act=edit&id=<?=$items[$i]['id']?>" title=""
                                class="smallButton tipS" original-title="Xem và sửa danh sách đặt phòng"><i class="fas fa-edit"></i></a>
                            <a class="text-danger" data-product="<?=$items[$i]['id']?>" data-com="<?=$_GET['com']?>" data-act="delete" data-tbl="<?=$_GET['tbl']?>" data-type="<?=$_GET['type']?>" data-page="<?=$_GET['page']?>" href="javascript:" data-js-delete title=""
                                    class="smallButton tipS" original-title="Xóa ">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
<div class="paging"><?=$paging?></div>
