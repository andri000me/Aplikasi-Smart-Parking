<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {
	
	function getData($table){
		$query = $this->db->get($table);
		return $query;
	}

	public function getDataJoin($table,$join,$kolom) {
		$this->db->select($kolom);
		$this->db->from($table);
		foreach ($join as $col => $value) {
			$this->db->join($col,$value);
		}
		$query = $this->db->get();
		return $query->result_array();
	}

	function query($query){
		return $this->db->query($query);
	}

	function tambahData($table,$data){
		$this->db->insert($table,$data);
	}
	function getDataW($table,$where){
		return $this->db->get_where($table,$where);
	}
	function editData($table,$where,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapusData($table,$where){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>