<?php
class Mhome extends CI_Model{
    protected $tab_logo = "logo";
    protected $tab_menu = "menu";
    protected $tab_footer = "footer";
    protected $tab_cate = "categories";
    protected $tab_new = "news";
    public function __construct() {
        parent::__construct();
    }
    // *************** SHOW LOGO *************************** //
    public function showLogo(){
        return $this->db->get($this->tab_logo)->result_array();
    }
    // *************** SHOW MENU *************************** //
    public function showMenu(){
        $this->db->select("title_menu,intro_menu,url_menu");
        $this->db->order_by("id_menu","asc");
        return $this->db->get($this->tab_menu)->result_array();
    }
    // *************** SHOW TIN TỨC Ở SLIDE CONTENT *************************** //
    public function showContent(){
        $this->db->order_by("id_new","asc");
        $this->db->limit(4,0);
        return $this->db->get("news")->result_array();
    }
    public function pictureLibrary(){
        $this->db->select("title_lib,img_lib,link_lib");
        return $this->db->get("picture_library")->result_array();
    }
    // *************** GIỚI THIỆU VỀ CÔNG TY ************* //
    public function introduct(){
        return $this->db->get("gioithieu")->row_array();
    }
    // *************** SHOW ĐỐI TÁC - KHÁCH HÀNG ************* //
    public function doitac(){
        return $this->db->get("doitac")->result_array();
    }
    // *************** SHOW TUYỂN DỤNG *************************** //
    public function tuyendung(){
        $this->db->select("title_td,img_td,content_td");
        return $this->db->get("tuyendung")->result_array();
    }
    // *************** SHOW FOOTER *************************** //
    public function showFooter(){
        return $this->db->get($this->tab_footer)->result_array();
    }
    public function showDanhmucsanpham(){
        $this->db->select("title_cate");
        return $this->db->get($this->tab_cate)->result_array();
    }
    // *************** SHOW TẤT CẢ TIN TỨC *************************** //
    public function listAllNew(){
        return $this->db->count_all($this->tab_new);
    }
    // *************** PHÂN TRANG TIN TỨC *************************** //
    public function showNew($recor,$start){
        $this->db->limit($recor,$start);
        return $this->db->get($this->tab_new)->result_array();
    }
    // *************** CHÈN LIÊN HỆ *************************** //
    public function insertLienhe($data){
        return $this->db->insert("lienhe",$data);
    }
    // *************** THẮC MẮC KHÁCH HÀNG *************************** //
    public function addVchat($vchat){
        return $this->db->insert("vchat",$vchat);
    }
}
