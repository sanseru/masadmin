<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blokir extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        header('Refresh:10; url= '. base_url().'index.php/welcome'); 
        $this->db2 = $this->load->database('db2', TRUE);

    }

	public function index()
	{

        $this->load->view('cetakan/atas');
		$this->load->view('cetakan/samping');        
		$this->load->view('auth/blokir');
		$this->load->view('cetakan/footer');

    }



}
