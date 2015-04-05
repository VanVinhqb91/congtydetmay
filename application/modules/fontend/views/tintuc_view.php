<div class="all-new">
    <b>Trang chủ -> Tin tức</b>
    <?php foreach ($show_new as $showNew) : ?>
        <p><?php echo $showNew['title_new']; ?></p>
        <img src="<?php echo base_url()?>uploads/images/congtythanhvin.jpg" />
        <div class="new-rigt">
            <p><?php echo word_limiter($showNew['content_new'],120); ?></p>
        </div>
    <?php endforeach; ?>
    <?php echo $this->pagination->create_links();?>
</div>
