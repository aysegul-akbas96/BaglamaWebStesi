<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		

		$query=$this->db->query("SELECT * FROM blog");
		$data["blog"]=$query->result();

		$data["sayfa"]="Blog Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		   
	
		$this->load->view('admin/blog_listele',$data);
		
	}




	 public function ekle()
	{     

		$data["sayfa"]="Blog Yönetimi | ";
		$data["menu"]="Admin Paneli ";
	
		$this->load->view('admin/blog_ekle',$data);
		
	}

public function ekle_kaydet()
	{
		$data["sayfa"]="Blog Yönetimi | ";
		$data["menu"]="Admin Paneli ";


	    $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2024;
        $config['max_height']           = 2000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('blog_resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\blog_ekle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
			    

			     $data=array(

		 			
                         'blog_baslik'=>$this->input->post('blog_baslik'),
                        'blog_yazi'=>$this->input->post('blog_yazi'),
                      
                       
						'blog_resim'=>$upload_data["file_name"],
									
                       
                 );

              
             	$this->db->insert("blog",$data);
			
            }						

			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/blog");

	}
	







	public function duzenle($id)
	{
			$data["sayfa"]="Blog Yönetimi | ";
		    $data["menu"]="Admin Paneli ";
		
			$query=$this->db->query("SELECT * FROM blog WHERE id=$id");
			$data["blog"]=$query->result();


			$this->load->view('admin/blog_duzenle',$data);
	}


	
	public function guncelle($id)
	{
		
          $query=$this->db->query("SELECT * FROM blog WHERE id=$id");
		  $data["blog"]=$query->result();

		  $data["sayfa"]="Blog Yönetimi | ";
		  $data["menu"]="Admin Paneli ";


		

        $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2024;
        $config['max_height']           = 2000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('blog_resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\blog_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'blog_resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("blog",$data,$id);
            }						
		
			  

              	 $data=array(

                        'blog_baslik'=>$this->input->post('blog_baslik'),
                        'blog_yazi'=>$this->input->post('blog_yazi'),
                               
                       
                 );

               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("blog",$data,$id);


			   
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/blog");




	}


		public function sil($id)
	{
			    $this->db->query("DELETE FROM blog WHERE id=$id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/blog");
	}




}
