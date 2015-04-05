<?php
class Fontend_Controller extends MY_Controller {
    public $_data = null;
    public function __construct() {
        parent::__construct();
        // show logo
        $this->load->model("Mhome");
        $this->_data['show_logo'] = $this->Mhome->showLogo();
        // show menu
        $this->_data['show_menu'] = $this->Mhome->showMenu();
        // show footer
        $this->_data['show_foot'] = $this->Mhome->showFooter();
        // show danh mục sản phẩm bên introduct_view
        $this->load->model("Mhome");
        $this->_data['show_cate'] = $this->Mhome->showDanhmucsanpham();
        // truyền biến
        $uri = $this->uri->segment(1);
        $this->_data['modu'] = $uri;
        $this->_data['path'] = $uri . "/template_font";
    }
}