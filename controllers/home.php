<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('lib_table_manager');
	}
	function index(){
		$this->db->select('KODE_PELANGGAN,NAMA_PELANGGAN');
		$query = $this->db->get('tb_pelanggan',5,1);
		$c=0;
		foreach($query->result() as $value){
			$row[$c] = array($value->KODE_PELANGGAN,$value->NAMA_PELANGGAN,'edit','delete');
			$c++;
		}
		$this->lib_table_manager->create_table($row);
	}
}