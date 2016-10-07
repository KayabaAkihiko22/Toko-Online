<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class m_brg extends CI_Model {

  	private $tabel = "barang";


    public function getitem($id) {  
    	$field = 'id';
    	$this->db->where($field,$id);
      	return $this->db->get($this->tabel)->row();

    }
    public function getall() {

      $q = $this->db->get($this->tabel);
   
      return $q->result();

    }
     public function getdata($start=0,$limit) {

      $q = $this->db->get($this->tabel,$limit,$start);
   
      return $q->result();

    }
    public function getcount() {

      return $this->db->get($this->tabel)->num_rows();

    }
     public function search($field,$value) {

      $this->db->where($field,$value);
      return $this->db->get($this->tabel)->result();

    }
    public function input_data($data,$table){
      $this->db->insert($table,$data);
      if ($this->db->affected_rows()>0) {
        return TRUE;
      } 
      else {
        return FALSE;
      }
    }
   }