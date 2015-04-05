<div id="all-tuyendung">
    <div class="td-top">
        <h5>Trang chủ -> Tuyển dụng</h5>
    </div>
    <?php foreach($sh_td as $showTd) : ?>
    <div class="td-content">
        <a href="#"><?php echo $showTd['title_td'];?></a><br />
        <img src="<?php echo base_url().'uploads/images/'.$showTd['img_td'];?>" width="200px" height="120px"/>
        <p><?php echo $showTd['content_td'];?></p>
    </div>
    <?php endforeach; ?>
</div>