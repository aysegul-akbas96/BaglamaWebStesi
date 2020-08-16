<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimda extends CI_Controller {

	 public function __construct()
        {
                   parent::__construct();
                // Your own constructor code
               $this->load->helper('url');
               $this->load->model('Database_Model');
        }
 
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM hakkimda");
		$data["verim"]=$query->result();
		$data["sayfa"]="Hakkımda | ";


$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();




		

       $data["menuac"]="hakkimda";
 

		



		$this->load->view('_header',$data);
	  
		$this->load->view('hakkimda',$data);
		$this->load->view('_footer');
	  
	}



	





	





}
