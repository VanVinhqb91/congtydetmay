<div class="list-sp">
    <div class="l-sp-top">
        <b>Trang chủ -> sản phẩm</b>
    </div>
    <div class="l-sp-bottom">
        <ul class="l-sp-content">
            <?php foreach ($showSp as $showSpham) : ?>
                <li>
                    <img title="<?php echo $showSpham['title_pro']; ?>" src="<?php echo base_url().'uploads/images/'.$showSpham['img_pro']; ?>" alt="<?php echo $showSpham['title_pro']; ?>"/>
                    <a href="<?php echo base_url().'index.php/fontend/sanpham/chitiet/'.$showSpham['id_pro'];?>"><?php echo $showSpham['title_pro']?></a>
                    <p>Giá: <?php echo number_format($showSpham['price_pro'], 0,'','.'); ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>