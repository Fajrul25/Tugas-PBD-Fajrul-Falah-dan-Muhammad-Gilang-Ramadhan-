<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct(){
  parent::__construct();                        

  $this->load->model('m_data');
  }
  function user(){
  $data['bangunan'] = $this->m_data->ambil_data()->result();
  $this->load->view('v_home.php',$data);

                }		
				
	public function index()
	{
		#$data['user'] = $this->m_data->tampil_data()->result();
	#	$this->load->view('v_home',$data);
	$this->load->view('v_home');
	}
	#public function bangunan_json()
	#{
	#	$data=$this->db->get('bangunan')->result();
	#	print_r($data);
	#}
}