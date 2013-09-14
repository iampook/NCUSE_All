<?php

	//include '../Config.php';
	include 'config.php';

	class Driver{
		private $use_Id;
		private $password;
		private $Name;
					
		public function __construct(){
			$db= new Config();
		}
		
		public function login($password){			
				
				$run=mysql_query('SELECT use_Id, password, Name FROM login WHERE  password="'.$password.'"');
				mysql_query("SET NAMES UTF8");
				$user_data = mysql_fetch_array($run);
				$row=mysql_num_rows($run);
				if ($row == 1){
					$_SESSION['login'] = true;
					$_SESSION['Name'] = $user_data['Name'];
					$_SESSION['pass'] = $user_data['password'];
					return TRUE;
				}else{
	


					return FALSE;
				}
		}
		
		public function get_session()
		{
			return $_SESSION['login'];
		}	

	}
?>