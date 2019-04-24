<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    function __construct()
    {
		parent::__construct();
		// $this->load->library('datatables');
		// if($this->session->userdata("nama")=== NULL){
  //           $url=site_url('Auth');
  //           redirect($url);
  //       }
        $this->load->model('Menu_model');
    }



	public function index()
	{


        $this->load->view('cetakan/atas');
		$this->load->view('cetakan/samping');        
		$this->load->view('Menu/Master_menu');
		$this->load->view('cetakan/footer');

	}

	public function json() {
        header('Content-Type: application/json');
        echo $this->Menu_model->json();
    }

	function edit_menu($id)
	{
        $query = $this->db->query("SELECT * from tbl_menu
                                    where id_menu ='$id'");
        $row = $query->row(); 
        $kirim['id_menu'] = $row->id_menu;
        $kirim['title'] = $row->title;
        $kirim['url'] = $row->url;
        $kirim['icon'] = $row->icon;
        $kirim['is_main_menu'] = $row->is_main_menu;
        $kirim['is_aktif'] = $row->is_aktif;
        $this->output->set_content_type('application/json')->set_output(json_encode($kirim));
	}

	public function buat_menu()
	{
		$data = array(
        'title'=>$this->input->post('title',TRUE),
        'url'=>$this->input->post('url',TRUE),    
		'icon'=>$this->input->post('icon',TRUE),                    
		'is_main_menu'=>$this->input->post('main_menu',TRUE),
		'is_aktif'=>$this->input->post('aktif',TRUE),
	);
		$this->Menu_model->insert($data);
		redirect(site_url('menu'));
    }
    
    public function update_menu()
    {
        $password = $this->input->post('passwordedit',true);
        $hashPassword   = password_hash($password,PASSWORD_BCRYPT);
        $id = $this->input->post('idmenu',true);
            $data = array(
                'title'=>$this->input->post('titleedit',TRUE),
                'url'=>$this->input->post('urledit',TRUE),    
                'icon'=>$this->input->post('iconedit',TRUE),                    
                'is_main_menu'=>$this->input->post('main_menuedit',TRUE),
                'is_aktif'=>$this->input->post('aktifedit',TRUE),
            );
            $this->Menu_model->update($id,$data);
            redirect(site_url('Menu'));
    }

}
