<?php


class login_model extends CI_Model {

	public function isvalidate($username,$password)
	{
		  $q = $this->db->where(['username'=>$username,'password'=>$password])
		                ->get('user');
						
							  if($q->num_rows())
							  {
								  return $q->row()->id;
							  }
							  else
							  {
								  return false;
							  }
	}
	
	public function article_list($limit,$offset){
		     // $this->load->library('session');
		     $id = $this->session->userdata('id');
		     $q = $this->db->select()
		              ->from('article')
					  ->where(['user_id'=>$id])
					  ->limit($limit,$offset)
					  ->get();
					
					  return $q->result();
	}
	
		public function num_rows(){
		     $id = $this->session->userdata('id');
		     $q = $this->db->select()
		              ->from('article')
					  ->where(['user_id'=>$id])
					  ->get();
					
					  return $q->num_rows();
	}
	
	public function all_articles($limit,$offset){
			
		     $q = $this->db->select()
		              ->from('article')
                      ->limit($limit,$offset)					  
					  ->get();
					
					  return $q->result();
	}
	
	public function add_article($arr,$table){
		return $this->db->insert($table,$arr);
		
		
	}
	public function delete_article($id){
		return $this->db->delete('article',['id' => $id]);
	}
	
		public function find_article($article_id){
			        // $q = $this->db->select(['title','body','id'])
					$q = $this->db->select()
		                 ->where('id',$article_id)
						 ->get('article');
						 return $q->row();
	}
	
		public function update_article($arr,$article_id){
		return $this->db->where('id',$article_id)
		                ->update('article',$arr);
	}
	    
		public function articles_count(){
			$q= $this->db->select()
			             ->from('article')
			             ->get();
					 return $q->num_rows();
			
		}
	

	
}
