<?php
class Admin extends Backend_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("Madmin");
        session_start();
        $_SESSION['KCFINDER']['disabled'] = false;
    }
    public function index() {
        $this->_data['title'] = "Trang dành riêng cho quản trị viên";
        $this->_data['loadPage'] = "content_view";
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function qlLogo() {
        $this->_data['title'] = "Quản lý logo website";
        $this->_data['loadPage'] = "quantrilogo_view";
        // show logo ra ngoài view
        $this->_data['show_logo'] = $this->Madmin->showLogo();
        // update logo 
        if ($this->input->post("subLogo")) {
            $ten = $this->input->post("txtCty");
            $img = $this->input->post("txtHinh");
            $tit = $this->input->post("txtTitle");
            $met = $this->input->post("txtMeta");
            $up_logo = array(
                "title_logo" => $ten,
                "img_logo" => $img,
                "title_seo" => $tit,
                "alt_seo" => $met,
            );
            $this->Madmin->editLogo($up_logo);
            echo "<script type='text/javascript'>";
            echo "alert('Update Logo thành công!.');";
            echo "window.location = 'http://localhost:81/congtydetmay/index.php/backend/admin';";
            echo "</script>";
            exit();
        }
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function qlSanpham() {
        $this->load->helper("text");
        $this->_data['title'] = "Trang quản lý sản phẩm";
        $this->_data['loadPage'] = "qlsanpham_view";
        $this->_data['show_sp'] = $this->Madmin->qlSanpham();
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function addSanpham() {
        $this->_data['error'] = null;
        $this->_data['title'] = "Trang quản thêm sản phẩm";
        $this->_data['loadPage'] = "addSanpham_view";
        $ngay = getdate();
        if ($ngay['mday'] < 10) {
            $ngay['mday'] = "0" . $ngay['mday'];
        }
        if ($ngay['mon'] < 10) {
            $ngay['mon'] = "0" . $ngay['mon'];
        }
        $ngaynhap = $ngay['mday'] . "-" . $ngay['mon'] . "-" . $ngay['year'];
        if ($this->input->post("subAdd")) {
            $cmuc = $this->input->post("txtCmuc");
            $masp = $this->input->post("txtMasp");
            $ten = $this->input->post("txtTen");
            $gia = $this->input->post("txtGia");
            $sl = $this->input->post("txtSl");
            $mta = $this->input->post("txtMota");
            $nnhap = $this->input->post("txtNguoinhap");
            if ($ten != "") {
                $config['upload_path'] = './uploads/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2000';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload()) {
                    $data = $this->upload->data();
                    $hinh = $data['file_name'];
                    $this->load->library('image_lib');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './uploads/images/' . $hinh;
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 180;
                    $config['height'] = 140;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $add = array(
                        "ma_pro" => $masp,
                        "title_pro" => $ten,
                        "content_pro" => $mta,
                        "price_pro" => $gia,
                        "number_pro" => $sl,
                        "thumb_img_pro" => "thumb_" . $hinh,
                        "img_pro" => $hinh,
                        "day_pro" => $ngaynhap,
                        "id_cate" => $cmuc,
                        "user_pro" => $nnhap,
                    );
                    $this->Madmin->addSanpham($add);
                    echo "<script type='text/javascript'>";
                    echo "alert('Thêm sản phẩm thành công!.');";
                    echo "window.location = 'http://localhost:81/congtydetmay/index.php/backend/admin';";
                    echo "</script>";
                    exit();
                } else {
                    $this->_data['error'] = $this->upload->display_errors();
                    $this->load->view($this->_data['path'], $this->_data);
                }
            } else {
                echo "Bạn phải điền tên sản phẩm!.";
            }
        }
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function delete() {
        $this->_data['title'] = "Trang xoá sản phẩm!.";
        $id = $this->uri->segment(4);
        $this->Madmin->delete($id);
        redirect(base_url() . 'index.php/backend/admin/qlSanpham');
        exit();
    }
    public function edit() {
        $eid = $this->uri->segment(4);
        $check_img = TRUE;
        $this->_data['error'] = null;
        $this->_data['title'] = "Trang sửa sản phẩm!.";
        $this->_data['loadPage'] = "editsanpham_view";
        $this->_data['sh_edit'] = $this->Madmin->showEditproduct($eid);

        $ngay = getdate();
        if ($ngay['mday'] < 10) {
            $ngay['mday'] = "0" . $ngay['mday'];
        }
        if ($ngay['mon'] < 10) {
            $ngay['mon'] = "0" . $ngay['mon'];
        }
        $ngaynhap = $ngay['mday'] . "-" . $ngay['mon'] . "-" . $ngay['year'];
        if ($this->input->post("subEdit")) {
            $cmuc = $this->input->post("txtCmuc");
            $masp = $this->input->post("txtMasp");
            $ten = $this->input->post("txtTen");
            $gia = $this->input->post("txtGia");
            $sl = $this->input->post("txtSl");
            $mta = $this->input->post("txtMota");
            $nnhap = $this->input->post("txtNguoinhap");
            if ($ten != "") {
                $upda = array(
                    "ma_pro" => $masp,
                    "title_pro" => $ten,
                    "content_pro" => $mta,
                    "price_pro" => $gia,
                    "number_pro" => $sl,
                    "day_pro" => $ngaynhap,
                    "id_cate" => $cmuc,
                    "user_pro" => $nnhap,
                );
                if ($_FILES["imge"]["name"] != "") {
                    $config['upload_path'] = './uploads/images/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size'] = '2000';
                    $config['max_width'] = '1024';
                    $config['max_height'] = '768';
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload()) {
                        $data = $this->upload->data();
                        $hinh = $data['file_name'];
                        $this->load->library('image_lib');
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './uploads/images/' . $hinh;
                        $config['create_thumb'] = TRUE;
                        $config['maintain_ratio'] = TRUE;
                        $config['width'] = 180;
                        $config['height'] = 140;
                        $this->image_lib->initialize($config);
                        $this->image_lib->resize();
                        $upda['thumb_img_pro'] = "thumb_".$hinh;
                        $upda['img_pro'] = $hinh;
                    } else {
                        $this->_data['error'] = $this->upload->display_errors();
                        $check_img = FALSE;
                    }
                }
                if ($check_img == TRUE) {
                    $this->Madmin->updateSanpham($eid, $upda);
                    echo "<script type='text/javascript'>";
                    echo "alert('Sửa sản phẩm thành công!.');";
                    echo "window.location = 'http://localhost:81/congtydetmay/index.php/backend/admin/qlSanpham';";
                    echo "</script>";
                    exit();
                }
            } else {
                echo "Bạn phải điền tên sản phẩm!.";
            }
        }
        $this->load->view($this->_data['path'], $this->_data);
    }
}