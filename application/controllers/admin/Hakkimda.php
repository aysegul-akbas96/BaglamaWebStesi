<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimda extends CI_Controller {

	  function __construct()
        {
                parent::__construct();
                // Your own constructor code
               $this->load->helper('url');
               $this->load->model('Database_Model');
		//$this->load->database();
		//$this->load->library('session');


               if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}




	}
	
	public function index()
	{
		

		$query=$this->db->query("SELECT * FROM menu where id=2");
		$data["menu"]=$query->result();


			 $query=$this->db->query("SELECT * FROM hakkimda");
			$data["hakkimda"]=$query->result();

			$data["sayfa"]="Hakkımda Yönetimi | ";
		    $data["menu"]="Admin Paneli ";
		   
	
		$this->load->view('admin/hakkimda_duzenle',$data);
		
	}




	public function guncelle($id)
	{
		
           $query=$this->db->query("SELECT * FROM menu WHERE id=$id");
			$data["menu"]=$query->result();

			 $query=$this->db->query("SELECT * FROM hakkimda");
			$data["hakkimda"]=$query->result();

			$data["sayfa"]="Hakkımda Yönetimi | ";
		    $data["menu"]="Admin Paneli ";


		

        $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('hakkimda_resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\hakkimda_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'hakkimda_resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("hakkimda",$data,$id);
            }						
		
			  

              	 $data=array(

                        'hakkimda_adi'=>$this->input->post('hakkimda_adi'),
                        'hakkimda_aciklama'=>$this->input->post('hakkimda_aciklama'),
                               
                       
                 );

               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("hakkimda",$data,$id);


			   
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/hakkimda");

       

	


	}



}
