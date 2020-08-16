<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data["sayfa"]=$query->result();

		$data["sayfa"]="Anasayfa | ";
		

		$data["menuac"]="anasayfa";

		$query=$this->db->query("SELECT * FROM blog order by id desc limit 5");
		$data["v"]=$query->result();

		$query=$this->db->query("SELECT * FROM resim order by id desc limit 6");
		$data["ve"]=$query->result();

		$query=$this->db->query("SELECT * FROM album");
		$data["album"]=$query->result();


		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();






		$this->load->view('_header',$data);
		$this->load->view('_content');
		$this->load->view('_footer');
	  
	}

	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		
$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();


		


		$query=$this->db->query("SELECT * FROM menu where id=6");
		$data["menu_ad"]=$query->result();
		$data["sayfa"]=$query->result();
$data["sayfa"]="İletişim | ";

		$data["menuac"]="iletisim";

 



		$this->load->view('_header',$data);
	  
		$this->load->view('iletisim',$data);
		$this->load->view('_footer',$data);
	}



public function mesaj_kaydet()
	{
		 $data=array(
		 			

                        'adsoy'=>$this->input->post('adsoy'),
                          'soyad'=>$this->input->post('soyad'),
                        'email'=>$this->input->post('email'),
                      
                      
						'mesaj'=>$this->input->post('mesaj'),
						
						
                       
                 );

            $this->db->insert('mesajlar',$data);




			   $this->session->set_flashdata("mesaj","Mesajınız Başarıyla Gönderilmiştir. Sizinle en kısa zamanda iletişime geçilecektir."); 
			   redirect(base_url()."home/iletisim");

	}


	





}
