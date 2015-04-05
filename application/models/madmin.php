<?php
class Madmin extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    public function showLogo(){
        return $this->db->get("logo")->row_array();
    }
    public function editLogo($data){
        return $this->db->update("logo",$data);
    }
    public function qlSanpham(){
        return $this->db->get("products")->result_array();
    }
    public function addSanpham($add){
        return $this->db->insert("products",$add);
    }
    public function delete($id){
        $this->db->where("id_pro",$id);
        return $this->db->delete("products");
    }
    public function showEditproduct($eid){
        $this->db->where("id_pro",$eid);
        return $this->db->get("products")->row_array();
    }
    public function updateSanpham($id,$data){
        $this->db->where("id_pro",$id);
        return $this->db->update("products",$data);
    }
}