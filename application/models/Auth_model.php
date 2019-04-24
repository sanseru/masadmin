<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model{
    public $table = 'tbl_user';
    function __construct()
    {
		parent::__construct();
        $db2 = $this->load->database('db2', TRUE);

    }



    function json() {
        $this->datatables->select('user_id,username');
        $this->datatables->from('tbl_user');
        // $this->datatables->add_column('view', '<a href="user/akses/$1" class="akses btn btn-info btn-circle btn-xs" data-code="$1"><i class="fa fa-eye"></i></a> | <a href="javascript:void(0);" class="edit_record btn btn-info btn-circle btn-xs" data-code="$1"><i class="fa fa-edit"></i></a> | <a href="javascript:void(0);" class="delete_record btn btn-danger btn-circle btn-xs" data-code="$1"><i class="fa fa-trash"></i></a>', 'user_id');
        $this->datatables->add_column('view', '<a href="user/akses/$1" class="akses btn btn-info btn-circle btn-xs" data-code="$1"><i class="fa fa-eye"></i></a>', 'user_id');        
        $this->datatables->set_database('db2');
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
        $this->db->where('id_users', $id);
        $this->db->update($this->table, $data);
    }

        // delete data
    function delete_product_detail($id)
    {
        $this->db->where('id_users',$id);
        $result=$this->db->delete($this->table);
    }

}