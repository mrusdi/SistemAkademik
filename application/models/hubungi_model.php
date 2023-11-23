<?php
 class Hubungi_model extends CI_model {

    public $table ='hubungi';
    public $id = 'id_hubungi';
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data,$table)
    {
        $this->db->insert($table,$data);
    }
    public function update_data($data,$table)
    {
   
        $this->db->update($table,$data);
    }
    

    
    
 }
