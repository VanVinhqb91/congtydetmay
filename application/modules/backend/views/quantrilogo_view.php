<style type="text/css">
    fieldset legend{
        font-weight: bold;
        color: brown;
        padding-left: 10px;
    }
    table tr{
        height: 30px;
    }
    table tr td{
        padding-left: 10px;
        padding-top: 10px;
    }
    table tr td input{
        height: 28px;
        padding-left: 10px;
    }
</style>
<div style="width: 1000px; margin: 40px auto;">
    <h2 style="margin-bottom: 30px; display: block;">Khi bạn click thay đổi logo thì tên công ty sẽ được thay đổi!.</h2>
    <fieldset style="width: 800px;">
        <legend>Quản lý logo website</legend>
        <form action="" method="post">
            <table width="700px">
                <tr>
                    <td colspan="2" align="center"><h3>Tên công ty hiện tại : <a style="color: cadetblue;"><?php echo $show_logo['title_logo'];?></a></h3></td>
                </tr>
                <tr>
                    <td>Tên công ty :</td>
                    <td><input type="text" name="txtCty" size="50" placeholder="Nhập vào tên Công ty"/></td>
                </tr>
                <tr>
                    <td>Logo bằng hình ảnh :</td>
                    <td><input type="text" name="txtHinh" size="50" placeholder="Nhập vào tên của hình ảnh làm Logo"/></td>
                </tr>
                <tr>
                    <td>Thẻ Title cho SEO website :</td>
                    <td><input type="text" name="txtTitle" size="50" placeholder="Nhập vào content của thẻ Title"/></td>
                </tr>
                <tr>
                    <td>Thẻ Meta cho SEO website :</td>
                    <td><input type="text" name="txtMeta" size="50" placeholder="Nhập vào content của thẻ Meta"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" style="padding-bottom: 10px;">
                        <input type="submit" name="subLogo" value="THAY ĐỔI LOGO" />
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>
