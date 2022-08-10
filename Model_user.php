<?php

class Model_user extends CI_Model {
	function __construct(){
    parent::__construct();
  	}

  	var $table="data_perkembangan";

	function tampil_data(){
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->order_by('Id_data','desc');
		return $this->db->get();
	}
	
	function simpan_tabel_data($data){
		$this->db->insert($this->table,$data);
	}
}  
?>