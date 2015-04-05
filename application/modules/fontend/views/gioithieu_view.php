<div class="cen-right-url">
    <b>Trang chủ -> Giới thiệu</b>
    <?php foreach($sh_gt as $showGt) : ?>
    <h3><?php echo $showGt['title_gt'];?></h3>
    <div class="r-ul-content">
        <img src="<?php echo base_url().'uploads/images/'.$showGt['img_gt'];?>" title="công ty thành vinh" alt="logo công ty" width="270" height="200"/>
        <div class="ul-content-right">
            <p class="format-fr"><?php echo $showGt['content_gt'];?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>