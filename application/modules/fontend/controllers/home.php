<?php
class Home extends Fontend_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("Mhome");
    }
    public function index() {
        $this->_data['title'] = "Website chuyên về dệt may";
        $this->_data['loadPage'] = "content_view";
        $this->_data['sh_new'] = $this->Mhome->showContent();
        $this->_data['sh_pic'] = $this->Mhome->pictureLibrary();
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function introduct() {
        $this->_data['title'] = "Giới thiệu về công ty";
        $this->_data['loadPage'] = "introduct_view";
        $this->_data['loadContent'] = "gioithieu_view";
        $this->_data['sh_gt'] = $this->Mhome->introduct();
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function tintuc() {
        $this->load->helper('text');
        $this->_data['title'] = "Trang tin tức";
        $this->_data['loadPage'] = "introduct_view";
        $this->_data['loadContent'] = "tintuc_view";
        $start = $this->uri->segment(4);
        $config['base_url'] = base_url()."index.php/fontend/home/tintuc";
        $config['total_rows'] = $this->Mhome->listAllNew();
        $config['uri_segment'] = 4;
        $config['per_page'] = 1; 
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $this->load->library('pagination',$config);
        $this->_data['show_new'] = $this->Mhome->showNew($config['per_page'],$start);
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function sanpham() {
        
    }
    public function doitac(){
        $this->_data['title'] = "Trang đối tác khách hàng của công ty";
        $this->_data['loadPage'] = "introduct_view";
        $this->_data['loadContent'] = "doitac_view";
        $this->_data['sh_dtac'] = $this->Mhome->doitac();
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function tuyendung(){
        $this->_data['title'] = "Trang tuyển dụng công ty";
        $this->_data['loadPage'] = "introduct_view";
        $this->_data['loadContent'] = "tuyendung_view";
        $this->_data['sh_td'] = $this->Mhome->tuyendung();
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function lienhe(){
        $this->_data['title'] = "Liện hệ công ty";
        $this->_data['loadPage'] = "introduct_view";
        $this->_data['loadContent'] = "lienhe_view";
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function insertLienhe(){
        if($this->input->post("subGui")){
            $ten = $this->input->post("txtTen");
            $email = $this->input->post("txtEmail");
            $phone = $this->input->post("txtPhone");
            $content = $this->input->post("txtContent");
            if($ten && $email && $phone && $content){
                $inse = array(
                    "name_lh" => $ten,
                    "email_lh" => $email,
                    "phone_lh" => $phone,
                    "content_lh" => $content,
                );
                $this->Mhome->insertLienhe($inse);
                redirect(base_url()."index.php/fontend/home/index");
                exit();
            } else {
                echo "<script type='text/javascript'>";
                echo "alert('Bạn phải điền đầy đủ thông tin trước khi gửi đi!.');";
                echo "window.location = 'http://localhost:81/congtydetmay/index.php/fontend/home/lienhe';";
                echo "</script>";
            }
        }
    }
    public function addVchat(){
        $timezone = +6;
        $day = gmdate("H:i:s A | d-m-Y ", time() + 3600*($timezone+date("I")));
        if($this->input->post("subVchat")){
            $ten = $this->input->post("txtTen");
            $email = $this->input->post("txtEmail");
            $phone = $this->input->post("txtPhone");
            $content = $this->input->post("txtVchat");
            if($ten && $email && $content){
                $vchat = array(
                    "name_chat" => $ten,
                    "email_chat" => $email,
                    "phone_chat" => $phone,
                    "content_chat" => $content,
                    "date_chat" => $day,
                );
                $this->Mhome->addVchat($vchat);
                echo "<script type='text/javascript'>";
                echo "alert('Tin nhắn của bạn đã được gửi đi, cảm ơn bạn!.');";
                echo "window.location = 'http://localhost:81/congtydetmay/index.php/fontend/home';";
                echo "</script>";
                exit();
            } else {
                echo "<script type='text/javascript'>";
                echo "alert('Bạn phải điền đầy đủ Họ tên, Email và Nội dung trước khi gửi đi.');";
                echo "window.location = 'http://localhost:81/congtydetmay/index.php/fontend/home';";
                echo "</script>";
                exit();
            }
        }
    }
}