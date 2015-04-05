<?php
class Sanpham extends Fontend_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model("Msanpham");
    }
    public function index(){
        $this->_data['title'] = "Danh mục sản phẩm";
        $this->_data['loadPage'] = "introduct_view";
        $this->_data['loadContent'] = "sanpham_view";
        $this->_data['showSp'] = $this->Msanpham->listAllsanpham();
        $this->load->view($this->_data['path'], $this->_data);
    }
    public function chitiet(){
        $id = $this->uri->segment(4);
        $this->_data['title'] = "Tên sản phẩm";
        $this->_data['loadPage'] = "chitietsanpham_view";
        $this->_data['chitietSp'] = $this->Msanpham->chitietsanpham($id);
        $this->load->view($this->_data['path'], $this->_data);
    }
}