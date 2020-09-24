<?php


class Admin extends CI_Controller {
    
	/*public function __construct(){
		parent::__construct();
		
		
	}*/
	
	public function login()
	        {  
			   if($this->session->userdata('id'))
		        return redirect('Admin/welcome');
		    // $this->load->library('form_validation');
			   $this->form_validation->set_rules('uname', 'Username', 'required|alpha');
			   $this->form_validation->set_rules('password', 'Password', 'required|max_length[12]');
		   
		   if($this->form_validation->run()){
			   
			    $uname = $this->input->post('uname');
			    $password = $this->input->post('password');
			    $this->load->model('login_model');
			    $login_id = $this->login_model->isvalidate($uname,$password);
				if($login_id){
					//$this->load->library('session');
					$this->session->set_userdata('id',$login_id);
					return redirect('admin/welcome');
				}else{
					$this->session->set_flashdata('Login_failed','Invalid Username/Password');
					redirect('admin/login');	
				}
              		   
			   
		   }else{
			   
			   $this->load->view('Admin/login');
		   }
	       }

        public function register(){
			
			$this->load->view('admin/register');
			
		}
		
		  public function sendmail(){
			  
			 if($this->form_validation->run('add_registration_rules')){
				   
				   $arr = $this->input->post();
				   $email = $this->input->post('email');
		
                  $this->load->model('login_model');
				  $this->login_model->add_article($arr,'user');
				  
				   //send email
				    $this->email->from('imrahulghatwal@gmail.com', 'blog Website');
					$this->email->to($email);
					$this->email->subject('Registration Greetings');
					$this->email->message('Thank you for registering.');
					
				  $this->email->send();
				  if($this->email->send()){
				  redirect('Admin/login');   
				  }
			 }else{
				 $this->load->view('Admin/register');
			 }
			 
		}
		public function welcome(){
			//session
              if(!$this->session->userdata('id'))
		      return redirect('Admin/login');
		  
		  	$this->load->model('login_model');
			//pagination
		    $this->load->library('pagination');
		
				 $config = ['base_url'=>base_url('admin/welcome'),
						   'per_page'=>2,
						   'total_rows'=>$this->login_model->num_rows(),
                           'full_tag_open'=>"<ul class='pagination'>",
 						   'full_tag_close'=>"</ul>",
						   'next_tag_open'=>"<li>",
						   'next_tag_close'=>"</li>",
						   'prev_tag_open'=>"<li>",
						   'prev_tag_close'=>"</li>",
						   'num_tag_open'=>"<li>",
						   'num_tag_close'=>"</li>",
						   'cur_tag_open'=>"<li class='active'><a>",
                           'cur_tag_close'=>"</a></li>"						   
						  ];
				  
		    $this->pagination->initialize($config);
	
		  
			$arr['result'] = $this->login_model->article_list($config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/dashboard',$arr);
		
		}
		
		public function add_article(){
			$this->load->view('Admin/add_article');
		}
		
		public function user_validation(){
			$config=[
			      'upload_path'=>'./assets/',
			      'allowed_types'=>'gif|jpg|png',
				  'max_size'=>1500
			];
			
			$this->load->library('upload',$config);
			
			
			
			if($this->form_validation->run('add_article_rules') && $this->upload->do_upload()){
				//$data = $this->input->post();
				$id =  $this->session->userdata('id');
				$title = $this->input->post('title');
				$body = $this->input->post('body');
                $date = $this->input->post('created_at');					
				
				
				
				$data = $this->upload->data();
				
				$image_path =base_url("assets/".$data['raw_name'].$data['file_ext']);
				
                $arr = array('body'=>$body,'title'=>$title,'user_id'=>$id,'image'=>$image_path,'created_at'=>$date);				   
				$this->load->model('login_model');
				if($this->login_model->add_article($arr,'article')){
				     $this->session->set_flashdata('msg','Articles added successfully');
					 $this->session->set_flashdata('msg_class','alert-success');
				}else{
					$this->session->set_flashdata('msg','couldnt add Articles');
					$this->session->set_flashdata('msg_class','alert-danger');
				}
				redirect('admin/welcome');
			}else{
				$upload_error =$this->upload->display_errors();
				$this->load->view('Admin/add_article',compact('upload_error'));
			}
		}
		
		public function delete_article(){
			$id = $this->input->post('id');
			$this->load->model('login_model');
			if($this->login_model->delete_article($id)){
				redirect('admin/welcome');
			}
		}
		public function edit_article($edit_id){
			$this->load->model('login_model');
			$arr1['result']=$this->login_model->find_article($edit_id);
			$this->load->view('admin/edit_article',$arr1);
		}
		
			
		public function update_article($article_id){
			$arr = $this->input->post();
			$this->load->model('login_model');	
            			
			if($this->login_model->update_article($arr,$article_id)){
				     $this->session->set_flashdata('msg','Articles edit successfull');
					 $this->session->set_flashdata('msg_class','alert-success');
				}else{
					$this->session->set_flashdata('msg','Articles not edit');
					$this->session->set_flashdata('msg_class','alert-danger');
				}
				redirect('admin/welcome');
		}
		
		public function logout(){		
			$this->session->unset_userdata('id');
			redirect('Admin/login');
			
		}
		
		
}
