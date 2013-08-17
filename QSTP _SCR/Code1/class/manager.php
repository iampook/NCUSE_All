 <?php
 include 'config.php';
 class Manager{
		 private $use_Id;
		private $password;
		private $Name;
					
		public function __construct(){
			$db= new Config();
		}
		public function login($password){			
				
				$run=mysql_query('SELECT use_Id, password, Name,statrs FROM login WHERE  password="'.$password.'"');
				mysql_query("SET NAMES UTF8");
				$user_data = mysql_fetch_array($run);
				$row=mysql_num_rows($run);
				if ($row == 1){
					$_SESSION['login'] = true;
					$_SESSION['Name'] = $user_data['Name'];
					$_SESSION['pass'] = $user_data['password'];
					$_SESSION['stat'] = $user_data['statrs'];
					return TRUE;
				}else{
	


					return FALSE;
				}
		}
		
		public function get_session()
		{
			return $_SESSION['login'];
		}
		
		public function add_customer($Latitude,$Longitude,$Name,$Address,$Mobile){
		mysql_query('INSERT INTO customers (Latitude,Longitude,Name,Address,Mobile) VALUES ("'.$Latitude.'","'.$Longitude.'","'.$Name.'","'.$Address.'","'.$Mobile.'")')or die(mysql_error());		
	}
	
	
	public function update_customer($latitude,$longitude,$user,$address,$mobile,$cus_id)
	{
		$con=new Config;
		$con->__construct();
		mysql_query("update customers set Latitude='".$latitude."', Longitude='".$longitude."',Name='".$user."',Address='".$address."', Mobile='".$mobile."' where Cus_Id='".$cus_id."'")	or die(mysql_error());
		header("Location:routing.php");
	}
	
	public function delect_customer($latitude,$longitude,$user,$address,$mobile,$cus_id)
	{
		$con=new Config;
		$con->__construct();
		mysql_query("DELETE FROM customers WHERE Name='".$user."';")or die(mysql_error());
		header("Location:routing.php");
	}	
	public function define_drive($name,$status)
	{
/***************************************************************************************
ฟังก์ชั่น การกำหนดสถานนะพนักงานส่ง

by parichart
***************************************************************************************/
		if($status == 'ว่าง'){
			$con=new Config;
			$con->__construct();
			$sql="update define set status='".$status."' where name='".$name."'" or die(mysql_error());
			$result=mysql_query($sql);
			header("Location:index.php");
		}
		if($status == 'วิ่ง' || $status == 'พัก'){
			$this->deleteOne($name);
			header("Location:index.php");
		}
	}
	
	public function get_show()
	{
		$con=new Config;
		$con-> __construct();
		$run=mysql_query('SELECT name, status FROM define');
				mysql_query("SET NAMES UTF8");
				return $run;
	}
	public function add_driver($name){
/***************************************************************************************

ฟังก์ชั่นการเพิ่มพนักงานส่ง

by parichart
***************************************************************************************/
		mysql_query('INSERT INTO define (name) VALUES ("'.$name.'")')or die(mysql_error());		
	}
	public function deleteClear()
	{
		mysql_query("DELETE FROM define")or die(mysql_error());	
	}
	public function deleteOne($name)
	{
		mysql_query("DELETE FROM define WHERE name='".$name."'")or die(mysql_error());	
	}
	
 }
 ?>