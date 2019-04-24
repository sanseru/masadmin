<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 300);
class Claim extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        is_login();
		if($this->session->userdata("user_id")=== NULL){
            $url=site_url('Auth');
            redirect($url);
        }
        $this->db2 = $this->load->database('db2', TRUE);

    }

	public function index()
	{

        $this->load->view('cetakan/atas');
		$this->load->view('cetakan/samping');        
		$this->load->view('claim/claim_edit');
		$this->load->view('cetakan/footer');

    }

    public function cek_data()
    {
        $id = $this->uri->segment(3);
        $id2 = str_replace("-","/",$id);
        $e = $this->db2->join('case_status', 'case_status.case_status_id = claim.claim_status')->where('claim_number', $id2)->get('claim')->row();
        $kirim['claim_id'] = $e->claim_id;
        $kirim['group_name'] = $e->group_name;
        $kirim['claim_charge'] = $e->claim_charge_value;
        $kirim['claim_approved'] = $e->claim_approved_value;
        $kirim['claim_excess'] = $e->claim_excess_value;
        $kirim['member_name'] = $e->member_name;
        $kirim['admission_date'] = $e->admission_date;
        $kirim['diagnosis1_code'] = $e->diagnosis1_code;
        $kirim['member_plan'] = $e->member_plan;
        $kirim['provider_name'] = $e->provider_name;
        $kirim['claim_status'] = $e->case_status_name;
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($kirim));
    }

    public function cek_data_batch()
    {
        $id = $this->uri->segment(3);
        $id2 = str_replace("-","/",$id);
        $e = $this->db2->join('case_status', 'case_status.case_status_id = batch_claim.batch_claim_status')->join('client', 'client.client_id = batch_claim.client_id')->where('batch_claim_number', $id2)->get('batch_claim')->row();
        $kirim['batch_claim_id'] = $e->batch_claim_id;
        $kirim['invoice_number'] = $e->invoice_number;
        $kirim['provider_name'] = $e->provider_name;
        $kirim['client_name'] = $e->client_name;
        $kirim['batch_claim_status'] = $e->case_status_name;
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($kirim));
    }

    public function open_edit_action()
    {
        $claim_id = $this->input->post('claim_id',true);
        $claim_approved = $this->input->post('claim_approved',true);
        $cek = $this->db2->select('product_id')->where('claim_id',$claim_id)->get('claim')->row();
        $cek2 = $this->db2->where('member_product_id',$cek->product_id)->get('member_product')->row();
        
        $this->db2->set('claim_status',1)->where('claim_id',$claim_id)->update('batch_claim');
        if ($cek2->family_product_id != 0 or $cek2->family_product_id != NULL){
            $query = $this->db2->where('family_product_id', $cek2->family_product_id)->get('member_product');
            $num = $query->num_rows();
            if ($num > 0){

                foreach($query->result() as $row){
                        $actual_benefit_limit_back = intval($row->actual_benefit_limit)+intval($claim_approved);
                        if($row->benefit_usage == 0 OR $row->benefit_usage == NULL){
                            $benefit_usage = $row->benefit_usage;
                            
                        }else{
                            $benefit_usage = intval($row->benefit_usage) - intval($claim_approved);
                        }
                        if($row->annual_benefit == $row->actual_benefit_limit){
                            $this->db2->set('benefit_usage',$benefit_usage)->where('member_product_id',$row->member_product_id)->update('member_product');
                            // var_dump($row->member_product_id);
                            // var_dump($benefit_usage);
                            // // var_dump($actual_benefit_limit_back); 
                            // var_dump('Coba');
                        }else{
                    $this->db2->set('actual_benefit_limit', $actual_benefit_limit_back)->set('benefit_usage',$benefit_usage)->where('member_product_id',$row->member_product_id)->update('member_product');
                        // var_dump($row->member_product_id);
                        // var_dump($benefit_usage);
                        // var_dump($claim_approved);
                        // var_dump($actual_benefit_limit_back);
                        // var_dump('coba2');
                        }


                }

            }
            // var_dump('test');
        }else{
        // $cek2 = $this->db2->where('member_product_id',$cek->product_id)->get('member_product')->row();

            if($cek2->actual_benefit_limit == '-1'){
                $actual_benefit_limit_back = '-1';
            }else{
                $actual_benefit_limit_back = intval($cek2->actual_benefit_limit) + intval($claim_approved);
            }
       
            if($cek2->benefit_usage == 0 OR $cek2->benefit_usage == NULL){
            
                $this->db2->set('actual_benefit_limit', $actual_benefit_limit_back)->where('member_product_id',$cek->product_id)->update('member_product');
                var_dump($actual_benefit_limit_back);
                var_dump('Testing');

                }else{
        
                $balikin = intval($cek2->benefit_usage) - intval($claim_approved);
                $this->db2->set('actual_benefit_limit', $actual_benefit_limit_back)->set('benefit_usage',$balikin)->where('member_product_id',$cek->product_id)->update('member_product');
                var_dump($actual_benefit_limit_back);
                var_dump('Testing2');
               
            }
        // var_dump($actual_benefit_limit_back);

            } 
        // $actual_benefit_limit_back = intval($cek2->actual_benefit_limit)+intval($claim_approved);
        // $this->db2->set('actual_benefit_limit', $actual_benefit_limit_back)->where('member_product_id',$cek->product_id)->update('member_product');
        // if($cek2->benefit_usage == 0 OR $cek2->benefit_usage == NULL){
            
        // $this->db2->set('actual_benefit_limit', $actual_benefit_limit_back)->where('member_product_id',$cek->product_id)->update('member_product');

        // }else{

            // $balikin = intval($cek2->benefit_usage) - intval($claim_approved);
        // $this->db2->set('actual_benefit_limit', $actual_benefit_limit_back)->set('benefit_usage',$balikin)->where('member_product_id',$cek->product_id)->update('member_product');

        // }
        
        // var_dump($balikin);
        // var_dump($cek);
        // var_dump($cek2);
        // var_dump($actual_benefit_limit_back);

        $this->session->set_flashdata('success', 'Data Berhasil Di Ubah Menjadi Open');
        redirect('claim');
    }

    public function cdv_edit_action()
    {
        $claim_id = $this->input->post('claim_id2',true);
        $this->db2->set('claim_status',13)->where('claim_id',$claim_id)->update('claim');
        // var_dump($claim_id);
        $this->session->set_flashdata('success', 'Data Berhasil Di Ubah Menjadi CDV ISSUE');
        redirect('claim');

    }

    public function batch_open()
    {
        $batch_claim_id = $this->input->post('batch_claim_id_m', TRUE);
        $this->db2->set('batch_claim_status',1)->where('batch_claim_id',$batch_claim_id)->update('batch_claim');
        //  var_dump($batch_claim_id);
        $this->session->set_flashdata('success', 'Data Berhasil Di Ubah Menjadi Open');
        redirect('claim');

    }

    public function batch_cdv()
    {
        $batch_claim_id = $this->input->post('batch_claim_id_cdv', TRUE);
        $this->db2->set('batch_claim_status',13)->where('batch_claim_id',$batch_claim_id)->update('batch_claim');
        //  var_dump($batch_claim_id);
        $this->session->set_flashdata('success', 'Data Berhasil Di Ubah menjadi CDV Issue');
        redirect('claim');


    }

}
