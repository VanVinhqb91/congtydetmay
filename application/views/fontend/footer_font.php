<script type="text/javascript">
    $(document).ready(function(){
        $(".form-vchat").hide();
        $("#vchat").click(function(){
            $("#vchat").hide();
            $(".form-vchat").show();
        });
        $(".f-vchat-top").click(function(){
            $(".form-vchat").hide();
            $("#vchat").show();
        });
    });
</script>
<div class="footer-address">
    <div style="display: inline; float: left;">
        <?php
        foreach ($show_foot as $showFoot) {
            echo $showFoot['content'];
        }
        ?>
    </div>
    <div class="live-chat">
        <img id="vchat" src="<?php echo base_url().'uploads/images/vchat.jpg'?>" />
    </div>
    <div class="form-vchat">
        <div class="f-vchat-top">
            <h5>Xin để lại tin nhắn cho chúng tôi!.</h5>
            <img src="<?php echo base_url().'uploads/images/vchat-hiden.png';?>"/>
        </div>
        <div class="vchat-content">
            <p>Hiện nay chúng tôi không ở đây, xin để lại tin nhắn cho chúng tôi, thanks!.</p>
            <form action="<?php echo base_url().'index.php/fontend/home/addVchat';?>" method="post">
                <input type="text" name="txtTen" size="43" placeholder="Xin mời nhập họ tên!."/>
                <input type="text" name="txtEmail" size="43" placeholder="Xin mời nhập Email!."/>
                <input type="text" name="txtPhone" size="43" placeholder="Xin mời nhập số điện thoại!."/>
                <textarea name="txtVchat" style="width: 274px; height: 80px;" placeholder="Nhập nội dung tin nhắn tại đây!."></textarea>
                <input type="submit" name="subVchat" value="Gửi tin nhắn" />
            </form>
        </div>
    </div>
</div>
