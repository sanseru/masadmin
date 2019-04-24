<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
    {
		parent::__construct();
		// $this->load->library('datatables');
		// if($this->session->userdata("nama")=== NULL){
        //     $url=site_url('Auth');
        //     redirect($url);
        // }
        $this->load->model('Auth_model');
        $this->db2 = $this->load->database('db2', TRUE);

    }



	public function index()
	{

		$this->load->view('Auth/login');

	}

	function cheklogin(){
        $username      = $this->input->post('username');
        //$password   = $this->input->post('password');
        $password = $this->input->post('password',TRUE);
        // $hashPass = password_hash($password,PASSWORD_DEFAULT);
        // $test     = password_verify($password, $hashPass);
        // query chek users
        $this->db->where('username',$username);
        $this->db2->where('password',  md5($password));
        $users       = $this->db2->get('tbl_user');
        if($users->num_rows()>0){
            $user = $users->row_array();
                // retrive user data to session
                $this->session->set_userdata($user);
                $this->session->set_flashdata('status_login','Aktiv');
                redirect('welcome');                 
        }else{
            $this->session->set_flashdata('status_login','email atau password yang anda input salah');
            redirect('auth');
        }
    }

        function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('status_login','Anda sudah berhasil keluar dari aplikasi');
        redirect('auth');
    }
}
