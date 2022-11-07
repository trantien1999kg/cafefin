<div class="container">
    <div class="d-flex flex-wrap row">
        <div class="col-3 w-100-m item mt20">
            <div class="map-box">
                <div class="title-font small d-flex justify-content-center mb10">
                    <a href="javascript:void(0)" class="cl-primary">
                        <span>Chi nhánh miền bắc</span>
                    </a>
                </div>
                <ul class="ul-list-none ul-map first" element-type="scroll">
                    <?php foreach($map1 as $key => $value){?>
                    <li>
                        <span>
                            <i class="fas fa-home"></i>
                        </span>
                        <div class="">
                            <a href="javascript:void(0)" class="js-active" data-target="#map<?= $value['id']?>">
                                <p><?= $value['diachi_'.$lang]?></p>
                                <p class="phone">
                                    <a href="tel:<?= $value['phone']?>">
                                        <?= $value['phone']?>
                                    </a>
                                    &nbsp; (<?= $value['ten_'.$lang]?>)
                                </p>
                            </a>
                        </div>
                    </li>
                    <?php }?>
                </ul>
                <div class="title-font small d-flex justify-content-center mb10 pt10"
                    style="border-top:1px solid var(--html-bg-primary);">
                    <a href="javascript:void(0)" class="cl-primary">
                        <span>Chi nhánh miền Nam</span>
                    </a>
                </div>
                <ul class="ul-list-none ul-map list-map" element-type="scroll">
                    <?php foreach($map2 as $key => $value){?>
                    <li>
                        <span>
                            <i class="fas fa-home"></i>
                        </span>
                        <div class="">
                            <a href="javascript:void(0)" class="js-active" data-target="#map<?= $value['id']?>">
                                <p><?= $value['diachi_'.$lang]?></p>
                                <p class="phone">
                                    <a href="tel:<?= $value['phone']?>">
                                        <?= $value['phone']?>
                                    </a>
                                    &nbsp; (<?= $value['ten_'.$lang]?>)
                                </p>
                            </a>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="col-9 w-100-m item mt20">
            <?php foreach($map1 as $key => $value){?>
            <div class="maps-container js-tab-active <?= ($key==0)?"active":""?>" id="map<?= $value['id']?>">
                <?= htmlspecialchars_decode($value['iframe_map'])?>
            </div>
            <?php }?>
            <?php foreach($map2 as $key => $value){?>
            <div class="maps-container js-tab-active" id="map<?= $value['id']?>">
                <?= htmlspecialchars_decode($value['iframe_map'])?>
            </div>
            <?php }?>
        </div>
    </div>
</div>