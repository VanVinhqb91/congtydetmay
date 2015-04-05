
<div class="add-sanpham">
    <h2 style="padding-bottom: 15px; text-align: center;">Thêm sản phẩm mới vào website</h2>
    <?php if(isset($error)){
        echo $error;
    }
?>
    <div class="s-p-add">
        <fieldset>
            <legend>Thêm sản phẩm mới</legend>
            <form action="<?php echo base_url().'index.php/backend/admin/addSanpham';?>" method="post" enctype="multipart/form-data">
                <table width="980px">
                    <tr>
                        <td>Chuyên mục :</td>
                        <td>
                            <select style="width: 150px;" name="txtCmuc">
                                <option style="padding-left: 7px;" value="1">Bao bì và in ấn</option>
                                <option style="padding-left: 7px;" value="2">Máy móc</option>
                                <option style="padding-left: 7px;" value="3">Sợi tơ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Mã sản phẩm :</td>
                        <td><input type="text" name="txtMasp" size="60" /></td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm :</td>
                        <td><input type="text" name="txtTen" size="60" /></td>
                    </tr>
                    <tr>
                        <td>Giá sản phẩm :</td>
                        <td><input type="text" name="txtGia" size="60" /></td>
                    </tr>
                    <tr>
                        <td>Số lượng sản phẩm :</td>
                        <td><input type="text" name="txtSl" size="60" /></td>
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
                        <td><input type="file" name="userfile" /></td>
                    </tr>
                    <tr>
                        <td>Người nhập :</td>
                        <td><input type="text" name="txtNguoinhap" size="60" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="subAdd" value="Thêm sản phẩm"/></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</div>