<style type="text/css">
    div #featured ul li[class~=the-h5]{
        height: 30px;
        background-color: #f1f1f1;
        color: brown;
        padding-left: 15px;
        font-weight: bold;
        margin-bottom: 10px;
        line-height: 30px;
    }
</style>
<div class="main-top">
    <div class="top-all">
        <div class="main-slide">
            <div id="featured" >
                <ul class="ui-tabs-nav">
                    <li class="the-h5">TIN MỚI NHẤT - TIÊU ĐỀ TIN</li>
                    <?php
                    foreach ($sh_new as $key => $value) {
                        $key++;
                        ?>
                        <li class="ui-tabs-nav-item" id="nav-fragment-<?php echo $key; ?>">
                            <a href="#fragment-<?php echo $key; ?>">
                                <img src="<?php echo base_url() . 'uploads/images/' . $value['img_thub_new']; ?>" alt="<?php echo $value['title_new']; ?>"/>
                                <span style="color: #202D3E;"><?php echo $value['title_new']; ?></span>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <?php
                foreach ($sh_new as $k => $item) {
                    $k++;
                    ?>
                    <div id="fragment-<?php echo $k; ?>" class="ui-tabs-panel ui-tabs-hide">
                        <img src="<?php echo base_url() . 'uploads/images/' . $item['img_new']; ?>" alt="<?php echo $item['title_new']; ?>" width="670" height="370" />
                        <div class="info" >
                            <a class="hideshow" href="#" >Hide</a>
                            <h2>
                                <a href="#" ><?php echo $item['title_new']; ?></a>
                            </h2>
                            <p><?php echo $item['content_new']; ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div id="bong-slider-top"></div>
</div><!-- End .main-top -->

<div class="main-introduct">
    <div class="introduct-top">
        <div class="i-top-left">
            <h1>
                <span class="h1-itop">Công ty cổ phần sơi Fortex</span>
            </h1>
            <div class="itop-img">
                <a href="#">
                    <img src="<?php echo base_url(); ?>/uploads/images/introduct.jpg" title="" alt=""/>
                </a>
            </div>
            <p class="itop-content">Được thành lập từ năm 2002, đến nay Công ty cổ phần sợi Fortex được biết đến như là một doanh nghiệp sản xuất sợi hàng đầu tại Việt Nam. Với mục đích tạo ra sản phẩm tốt nhất cung cấp cho các khách hàng lớn và yêu cầu cao về chất lượng trong khu vực cũng như trên khắp thế giới, chúng tôi đã đầu tư và nâng cấp các dây chuyền sản xuất hiện đại, thế hệ mới của các hãng cung cấp thiết bị uy tính như Rieter với máy chải C60, máy chải kỹ E66,máy ghép RSBD-40, và máy con đổ sợi tự động G35, hãng Toyota và Murata với máy ghép DX8, máy đánh ống tự động 21C….Song song với việc đầu tư dây chuyển sản xuất hiện đại, chúng tôi còn đầu tư trung tâm kiểm soát chất lượng với thiết bị kiểm soát chất lượng USTER 5 và [...] </p>
        </div>
        <div class="i-top-right">
            <iframe width="320" height="300" src="//www.youtube.com/embed/xLOI4eA5T0w?theme=light&fs=0&hd=1&showsearch=0&showinfo=0&modestbranding=1&disablekb=1&iv_load_policy=3&cc_load_policy=1&autoplay=0&start=0&autohide=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
    </div>
    <div id="bong-introduct-top"></div>
    <div class="introduct-center">
        <!-- ************************************************************ -->
        <div class="track example-7">
            <div class="inner">
                <h2>Thư viện ảnh</h2>
                <div class="view-port">
                    <div id="example-7" class="slider-container">
                        <?php foreach($sh_pic as $showPic) : ?>
                        <div class="item">
                            <a href="<?php echo $showPic['link_lib'];?>"><img src="<?php echo base_url().'uploads/images/'.$showPic['img_lib'];?>" width="224" height="128" /></a>
                            <p><?php echo $showPic['title_lib'];?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div style="margin-top: -20px;" class="bullet-pagination"></div>
            <div  class="pagination">
                <a href="#" class="prev disabled"></a>
                <a href="#" class="next disabled"></a>
            </div>
        </div>
        <!-- ************************************************************ -->
    </div>
    <div id="bong-introduct-center"></div>
    <div class="introduct-bottom">
        <div class="in-bo-top">
            <h3>ĐỐI TÁC - KHÁCH HÀNG</h3>
        </div>
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <li><img src="<?php echo base_url().'uploads/images/';?>img1.jpg" alt="Image 1">abc</li>
                    <li><img src="<?php echo base_url().'uploads/images/';?>img2.jpg" alt="Image 2"></li>
                    <li><img src="<?php echo base_url().'uploads/images/';?>img3.jpg" alt="Image 3"></li>
                    <li><img src="<?php echo base_url().'uploads/images/';?>img4.jpg" alt="Image 4"></li>
                    <li><img src="<?php echo base_url().'uploads/images/';?>img5.jpg" alt="Image 5"></li>
                    <li><img src="<?php echo base_url().'uploads/images/';?>img6.jpg" alt="Image 6"></li>
                </ul>
            </div>
            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
        </div>
    </div>
</div>

