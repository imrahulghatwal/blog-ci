<?php


class User extends CI_Controller {
	

	public function index()
	{
		
		$this->load->model('login_model');
		$this->load->library('pagination');
		$config=[
		       'base_url'=>base_url('user/index'),
			   'per_page'=>2,
			   'total_rows'=>$this->login_model->articles_count(),
			   'full_tag_open'=>"<ul class='pagination'>",
			   'full_tag_close'=>"</ul>",
			   'next_tag_open'=>"<li>",
			   'next_tag_close'=>"</li>",
			   'next_tag_open'=>"<li>",
			   'next_tag_close'=>"</li>",
			    'next_tag_open'=>"<li>",
			   'next_tag_close'=>"</li>",
			    'next_tag_open'=>"<li class='active'><a>",
			   'next_tag_close'=>"</a></li>",
		];
		
		$this->pagination->initialize($config);
		$articles=$this->login_model->all_articles($config['per_page'],$this->uri->segment(3));
		$this->load->view('User/Article_List',compact('articles'));
	}
	public function article_page($id)
	{
		$this->load->model('login_model');
		$arr['result']=$this->login_model->find_article($id);
	    $this->load->view('user/article_details',$arr);
	}
	
	
	
	
}
