<div id="all-ql-sp">
    <h2 style="padding-bottom: 15px;">Danh sách sản phẩm hiện có trong wesite</h2>
    <table border="1" width="1000px">
        <tr>
            <td colspan="9" align="center"><a href="<?php echo base_url().'index.php/backend/admin/addSanpham';?>">Thêm sản phẩm</a></td>
        </tr>
        <tr>
            <td>STT</td>
            <td>MaSP</td>
            <td>TenSP</td>
            <td>Giá</td>
            <td>Số lượng</td>
            <td>Hình</td>
            <td>Ngày nhập</td>
            <td>Xoá</td>
            <td>Sửa</td>
        </tr>
        <?php
        $stt = 0;
        foreach ($show_sp as $showSp) {
            $stt++;
            ?>
            <tr>
                <td><?php echo $stt;?></td>
                <td><?php echo $showSp['ma_pro'];?></td>
                <td><?php echo $showSp['title_pro'];?></td>
                <td><?php echo $showSp['price_pro'];?></td>
                <td><?php echo $showSp['number_pro'];?></td>
                <td style="width: 90px;">
                    <img style="padding: 5px 0px 0px 10px;" src="<?php echo base_url().'uploads/images/'.$showSp['thumb_img_pro'];?>" width="70px" height="40px"/>
                </td>
                <td><?php echo $showSp['day_pro'];?></td>
                <td><a href="<?php echo base_url().'index.php/backend/admin/delete/'.$showSp['id_pro'];?>">Xoá</a></td>
                <td><a href="<?php echo base_url().'index.php/backend/admin/edit/'.$showSp['id_pro'];?>">Sửa</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>