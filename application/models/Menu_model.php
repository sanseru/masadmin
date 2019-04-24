<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model{
    public $table = 'tbl_menu';




    function json() {
        $this->datatables->select('id_menu,title,url,icon,is_main_menu,is_aktif');
        $this->datatables->from('tbl_menu');
        $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-circle btn-xs" data-code="$1"><i class="fa fa-edit"></i></a> | <a href="javascript:void(0);" class="delete_record btn btn-danger btn-circle btn-xs" data-code="$1"><i class="fa fa-trash"></i></a>', 'id_menu');
        return $this->datatables->generate();
    }
	// Menampilkan Data
    function getAllUserLevel()
    {
        $query = $this->db->query('SELECT id_user_level,nama_level FROM tbl_user_level');
        return $query->result();
    }

    function insert($data)
    {
    	$this->db->insert($this->table,$data);
    }

        // update data
    function update($id, $data)
    {
        $this->db->where('id_menu', $id);
        $this->db->update($this->table, $data);
    }

        // delete data
    function delete_product_detail($id)
    {
        $this->db->where('id_menu',$id);
        $result=$this->db->delete($this->table);
    }

}