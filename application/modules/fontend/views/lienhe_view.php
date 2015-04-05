<script type="text/javascript">
    function resetGui(){
        document.getElementById("txtTen").value = "";
        document.getElementById("txtEmail").value = "";
        document.getElementById("txtPhone").value = "";
        document.getElementById("txtContent").value = "";
    }
</script>
<style type="text/css">
    table tr td input{
        height: 28px;
    }
</style>
<div class="liehe-all">
    <div class="l-a-link">
        <h4>Trang chủ -> Liên hệ</h4>
    </div>
    <div class="l-a-content">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6753832555532!2d106.66734400000001!3d10.759481999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee5205c8b95%3A0x8ab8b569fa0b6eb5!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBDw7RuZyBOZ2jhu4cgVGjDtG5nIFRpbiDEkOG6oWkgSOG7jWMgUXXhu5FjIEdpYSBUcC9IY20!5e0!3m2!1sen!2s!4v1427975553378" width="720" height="380" frameborder="0" style="border:0"></iframe>
        <h3>Công ty cổ phần Đầu tư và Phát triển Đức Quân</h3>
        Địa chỉ: Lô A2, Khu Công nghiệp Nguyễn Đức Cảnh, Tp Thái Bình<br />
        Phone: (84.36) 384.5379<br />
        fax: (84.36) 3845 305<br />
        Email: info@fortex.com.vn <br />
        <fieldset>
            <legend><b>Liên hệ qua website</b></legend>
            <form action="<?php echo base_url().'index.php/fontend/home/insertLienhe'?>" method="post">
                <table border="0" cellspacing="0" cellpadding="0" width="700">
                    <tr>
                        <td>Tên của bạn :</td>
                        <td><input type="text" id="txtTen" name="txtTen" size="60" /></td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="text" id="txtEmail" name="txtEmail" size="60" /></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại :</td>
                        <td><input type="text" id="txtPhone" name="txtPhone" size="60" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea id="txtContent" style="width: 690px; height: 70px;" name="txtContent" placeholder="Nhập nội dung vào đây!."></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="subGui" style="width: 100px" value="Gửi" />
                            <input type="button" name="subRe" style="width: 100px" value="Reset" onclick="resetGui();"/>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</div>
