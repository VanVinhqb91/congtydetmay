<?php
class Msanpham extends CI_Model{
    protected $tab_sp = "products";
    public function __construct() {
        parent::__construct();
    }
    public function listAllsanpham(){
        return $this->db->get($this->tab_sp)->result_array();
    }
    public function chitietsanpham($id){
        $this->db->where("id_pro", $id);
        return $this->db->get($this->tab_sp)->result_array();
    }
}

