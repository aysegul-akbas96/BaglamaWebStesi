<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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

		$query=$this->db->query("SELECT * FROM menu where id=3");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT * FROM blog");
		$data["verim"]=$query->result();


		$query=$this->db->query("SELECT blog_baslik FROM blog");
		$data["v"]=$query->result();
		$data["sayfa"]="Blog | ";


$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();



		

       $data["menuac"]="blog";
 

		



		$this->load->view('_header',$data);
	  
		$this->load->view('blog',$data);
		$this->load->view('_footer');
	  
	}

	public function blog_detay($id){
        $query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=3");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT * FROM blog where id=$id");
		$data["verim"]=$query->result();
		$data["sayfa"]="Blog | ";

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();







		

       $data["menuac"]="blog";

		$this->load->view('_header',$data);
	  
		$this->load->view('blog_detay',$data);
		$this->load->view('_footer');

	}

	





	





}
