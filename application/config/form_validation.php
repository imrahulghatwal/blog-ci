<?php

$config =[
        
      'add_article_rules'=>[
                            [
							 'field'=>'title',
							 'lable'=>'Article Title',
							 'rules'=>'required'
							],
                            [
							 'field'=>'body',
							 'lable'=>'Article body',
							 'rules'=>'required'
							]
                           ],
	  
	  'add_registration_rules'=>[
                            [
							 'field'=>'username',
							 'lable'=>'Username',
							 'rules'=>'required|alpha'
							],
                            [
							 'field'=>'password',
							 'lable'=>'Password',
							 'rules'=>'required|max_length[12]'
							],
							[
							 'field'=>'first_name',
							 'lable'=>'First name',
							 'rules'=>'required|alpha'
							],
							[
							 'field'=>'last_name',
							 'lable'=>'Last name',
							 'rules'=>'required|alpha'
							],
							[
							 'field'=>'email',
							 'lable'=>'Email',
							 'rules'=>'required|valid_email|is_unique[user.email]'
							],
                           ],
						   
						   
];


?>