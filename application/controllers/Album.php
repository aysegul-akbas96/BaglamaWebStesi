<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

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
$query=$this->db->query("SELECT * FROM album inner join resim on resim.album_id=album.id group by album.id ");
		$data["resim"]=$query->result();
	$query=$this->db->query("SELECT * FROM album");
		$data["album"]=$query->result();
         $data["menuac"]="album";


        $query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();


    


		$query=$this->db->query("SELECT * FROM menu where id=4");
		$data["menu_ad"]=$query->result();
		$data["sayfa"]=$query->result();
		$data["sayfa"]="Resim | ";

$query=$this->db->query("SELECT *from album inner JOIN resim on album.id=resim.album_id
group by album.adi ");
		$data["resimcek"]=$query->result();

	  $this->load->view('_header',$data);
	  
		$this->load->view('galeri',$data);
		$this->load->view('_footer',$data);
	
	
	}


public function resim_getir()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		
		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=4");
		$data["menu_ad"]=$query->result();
		$data["sayfa"]=$query->result();
		$data["sayfa"]="Resim | ";

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();





			$query=$this->db->query("SELECT * FROM resim inner join album on resim.album_id=album.id where album.id");
		$data["resim"]=$query->result();


		$query=$this->db->query("SELECT * FROM album");
		$data["album"]=$query->result();

		$query=$this->db->query("SELECT * FROM video");
		$data["video"]=$query->result();

		$data["menuac"]="resim";


$this->load->view('_header',$data);
	  
	$this->load->view('album',$data);
		$this->load->view('_footer',$data);

	
		
	}


public function res_getir($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();



		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=4");
		$data["menu_ad"]=$query->result();
		$data["sayfa"]=$query->result();

		$data["sayfa"]="Resim | ";

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();




		$query=$this->db->query("SELECT album.adi, resim.* FROM resim inner join album on resim.album_id=album.id where album.id=$id group by resim.id");
		$data["resim"]=$query->result();

 
		$query=$this->db->query("SELECT * FROM album");
		$data["album"]=$query->result();

		$data["menuac"]="resim";

 $query=$this->db->query("SELECT *from album inner JOIN resim on album.id=resim.album_id
group by album.adi ");
		$data["resimcek"]=$query->result();
 
	

$this->load->view('_header',$data);
	  
		$this->load->view('resimler',$data);
				$this->load->view('_footer',$data);
		
	}














}
