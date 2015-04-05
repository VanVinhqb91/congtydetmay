
<div class="doitac-all">
    <div class="l-a-link doitac-bor">
        <h4>Trang chủ -> Đối tác - khách hàng</h4>
    </div>
    <?php foreach ($sh_dtac as $showDtac) : ?>
        <div class="doitac-content">
            <p><?php echo $showDtac['title_dt'] ?></p>
            <img src="<?php echo base_url() . 'uploads/images/' . $showDtac['img_dt']; ?>" width="296" height="174"/>
            <div class="doi-ta-ri">
                <p><?php echo $showDtac['content_dt']; ?></p>
                <a href="<?php echo $showDtac['link_dt']; ?>" target="_blank">Xem thêm...</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>