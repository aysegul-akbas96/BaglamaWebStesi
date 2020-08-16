<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayar extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');

                if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}



        }
 
	
	public function index()
	{
	 
		//$this->load->view('admin/site_ayar');
		$this->load->helper('url');
		$this->load->model('Database_Model');
		//$this->load->database();
		//$this->load->library('session');
		
		$data["sayfa"]="Site Ayarları Yönetimi | ";
		$data["menu"]="Admin Paneli ";


		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();


		$this->load->view('admin/site_ayar',$data);
		

		
		if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}
		
	}


	public function ayarlar_guncelle($id)
	{

		$data["sayfa"]="Site Ayarları Yönetimi | ";
		$data["menu"]="Admin Paneli ";
		
		$query=$this->db->query("SELECT * FROM ayarlar where id=$id");
		$data["veri"]=$query->result();

       

              	 $data=array(

                        'title'=>$this->input->post('title'),
                         'meta'=>$this->input->post('meta'),
                         'description'=>$this->input->post('description'),

                      
                        'telefon'=>$this->input->post('telefon'),
                        'fax'=>$this->input->post('fax'),
                        'email'=>$this->input->post('email'),
                        'adres'=>$this->input->post('adres'),
                        'maps'=>$this->input->post('maps'),
                        'face'=>$this->input->post('face'),
                        'twitter'=>$this->input->post('twitter'),
                        'google'=>$this->input->post('google'),
                        'instagram'=>$this->input->post('instagram'),
                        'youtube'=>$this->input->post('youtube'),
                     
						
						
                       
                       
                 );


			   
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("ayarlar",$data,$id);

            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/ayar/");

       

	}



   


  


















}
