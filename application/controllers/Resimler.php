<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resimler extends CI_Controller {

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

		$query=$this->db->query("SELECT * FROM menu where id=4");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT * FROM resim");
		$data["verim"]=$query->result();
		$data["sayfa"]="Resimler | ";

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();





       $query=$this->db->query("SELECT * FROM resim inner join album on resim.album_id=album.id where album.id");
		$data["resim"]=$query->result();

		

       $data["menuac"]="resimler";
 

		



		$this->load->view('_header',$data);
	  
		$this->load->view('resimler',$data);
		$this->load->view('_footer');
	  
	}



	





	





}
