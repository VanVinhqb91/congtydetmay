<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=1510399182539685&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="all-chitiet-sp">
    <div class="ct-sp-top">
        <h5>Trang chủ -> Sản phẩm -> 
<?php foreach ($chitietSp as $showCtiet) {
    echo $showCtiet['title_pro'];
} ?></h5>
    </div>
    <div class="ct-sp-content">
        <div class="ct-sp-cont-left">
            <img title="<?php echo $showCtiet['title_pro']; ?>" src="<?php echo base_url() . 'uploads/images/' . $showCtiet['img_pro']; ?>" alt="<?php echo $showCtiet['title_pro']; ?>" />
        </div>
        <div class="ct-sp-cont-right">
            <h4>SẢN PHẨM: <?php echo $showCtiet['title_pro']; ?></h4>
            <p>Mã SP: <?php echo $showCtiet['ma_pro']; ?></p>
            <p>Chi tiết sản phẩm: <?php echo $showCtiet['content_pro']; ?></p>
            <p>Giá: <?php echo number_format($showCtiet['price_pro'], 0, '', '.'); ?> vnd</p>
            <p>Số lượng: <?php echo $showCtiet['number_pro']; ?> cái</p>
            <div class="add-to-card">
                <a href="">Add to card</a>
                <div class="fb-like" data-href="<?php echo base_url().'index.php/fontend/sanpham/chitiet/'.$showCtiet['id_pro'];?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
            </div>
        </div>
    </div>
</div>



