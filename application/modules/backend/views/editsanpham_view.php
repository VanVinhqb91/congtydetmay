
<div class="add-sanpham">
    <h2 style="padding-bottom: 15px; text-align: center;">Trang sửa sản phẩm</h2>
    <?php
    if (isset($error)) {
        echo $error;
    }
    ?>
    <div class="s-p-add">
        <fieldset>
            <legend>Sửa sản phẩm</legend>
            <form action="<?php echo base_url() . 'index.php/backend/admin/edit/' . $sh_edit['id_pro']; ?>" method="post" enctype="multipart/form-data">
                <table width="980px">
                    <tr>
                        <td>Chuyên mục :</td>
                        <td>
                            <select style="width: 150px;" name="txtCmuc">
                                <option style="padding-left: 7px;" value="1" <?php if ($sh_edit['id_cate'] == 1) echo "selected='selected'"; ?>>Bao bì và in ấn</option>
                                <option style="padding-left: 7px;" value="2" <?php if ($sh_edit['id_cate'] == 2) echo "selected='selected'"; ?>>Máy móc</option>
                                <option style="padding-left: 7px;" value="3" <?php if ($sh_edit['id_cate'] == 3) echo "selected='selected'"; ?>>Sợi tơ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Mã sản phẩm :</td>
                        <td><input type="text" name="txtMasp" size="60" value="<?php echo $sh_edit['ma_pro']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm :</td>
                        <td><input type="text" name="txtTen" size="60" value="<?php echo $sh_edit['title_pro']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Giá sản phẩm :</td>
                        <td><input type="text" name="txtGia" size="60" value="<?php echo number_format($sh_edit['price_pro'], 0, '', '.'); ?> vnd"/></td>
                    </tr>
                    <tr>
                        <td>Số lượng sản phẩm :</td>
                        <td><input type="text" name="txtSl" size="60" value="<?php echo $sh_edit['number_pro']; ?> cái"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">Mô tả sản phẩm :
                            <textarea name="txtMota" style="width: 980px; height: 200px;"></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('txtMota');
                            </script>
                        </td>
                    </tr>
                    <tr>
                        <td>Hình :</td>
                        <td>
                            <img style="float: left; padding-top: 7px; padding-right: 15px;" src="<?php echo base_url() . 'uploads/images/' . $sh_edit['thumb_img_pro']; ?>" width="65" height="45"/>
                            <input type="file" name="userfile" />
                        </td>
                    </tr>
                    <tr>
                        <td>Người nhập :</td>
                        <td><input type="text" name="txtNguoinhap" size="60" value="<?php echo $sh_edit['user_pro']; ?>"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="subEdit" value="Sửa sản phẩm"/></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</div>