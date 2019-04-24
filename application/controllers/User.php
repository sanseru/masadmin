<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
		parent::__construct();
		if($this->session->userdata("user_id")=== NULL){
            $url=site_url('Auth');
            redirect($url);
        }
        $this->load->model('Auth_model');
    }



	public function index()
	{

		// $this->load->view('template/header');
		// $this->load->view('auth/list_user');
        // $this->load->view('template/footer');
        $data['level'] = $this->Auth_model->getAllUserLevel();
        $this->load->view('cetakan/atas',$data);
		$this->load->view('cetakan/samping');        
		$this->load->view('auth/user');
		$this->load->view('cetakan/footer');

    }
    
    public function akses()
    {
        $data['user'] = $this->db->get_where('tbl_user',array('id_users'=>  $this->uri->segment(3)))->row_array();
        $data['menu'] = $this->db->where('is_main_menu',0)->get('tbl_menu')->result();
        $this->load->view('cetakan/atas',$data);
		$this->load->view('cetakan/samping');        
		$this->load->view('auth/akses');
		$this->load->view('cetakan/footer');

    }

    function kasi_akses_ajax(){
        $id_menu        = $_GET['id_menu'];
        $id_user  = $_GET['user'];
        // chek data
        $params = array('id_menu'=>$id_menu,'id_user'=>$id_user);
        $akses = $this->db->get_where('tbl_hak_akses',$params);
        if($akses->num_rows()<1){
            // insert data baru
            $this->db->insert('tbl_hak_akses',$params);
        }else{
            $this->db->where('id_menu',$id_menu);
            $this->db->where('id_user',$id_user);
            $this->db->delete('tbl_hak_akses');
        }
    }

	public function json() {
        header('Content-Type: application/json');
        echo $this->Auth_model->json();
    }

	function edit_users($id)
	{
        $query = $this->db->query("SELECT id_users,full_name,username,email,password,a.id_user_level,b.nama_level,is_aktif from tbl_user a
                                    LEFT JOIN tbl_user_level b ON b.id_user_level = a.id_user_level
                                    where a.id_users ='$id'");
        $row = $query->row(); 
        $kirim['id_users'] = $row->id_users;
        $kirim['full_name'] = $row->full_name;
        $kirim['username'] = $row->username;
        $kirim['email'] = $row->email;
        $kirim['password'] = $row->password;
        $kirim['id_user_level'] = $row->id_user_level;
        $kirim['is_aktif'] = $row->is_aktif;
        $this->output->set_content_type('application/json')->set_output(json_encode($kirim));
	}

	public function register()
	{
		$password = $this->input->post('newpassword',true);
	$hashPassword   = password_hash($password,PASSWORD_BCRYPT);

		$data = array(
        'full_name'=>$this->input->post('fullname',TRUE),
		'username'=>$this->input->post('username',TRUE),        
		'email'=>$this->input->post('email',TRUE),
		'id_user_level'=>$this->input->post('level',TRUE),
		'is_aktif'=>$this->input->post('aktif',TRUE),
		'password'=>$hashPassword,
	);
		$this->Auth_model->insert($data);
		redirect(site_url('user'));
    }
    
    public function update_user()
    {
        $password = $this->input->post('passwordedit',true);
        $hashPassword   = password_hash($password,PASSWORD_BCRYPT);
        $id = $this->input->post('idusers',true);
            $data = array(
            'full_name'=>$this->input->post('fullnameedit',TRUE),
            'username'=>$this->input->post('usernameedit',TRUE),        
            'email'=>$this->input->post('emailedit',TRUE),
            'id_user_level'=>$this->input->post('leveledit',TRUE),
            'is_aktif'=>$this->input->post('aktifedit',TRUE),
            'password'=>$hashPassword,
            );
            $this->Auth_model->update($id,$data);
            redirect(site_url('user'));
    }

}
