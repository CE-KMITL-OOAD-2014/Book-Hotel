<?php 
	class Userinfo{
		private $name;
		private $lastname;
		private $phone;
		private $email;
		private $password;
		private $booked;
//-----------------------------------------
// construction
		public function __construct(){
			$this->name=NULL;
			$this->lastname=NULL;
			$this->phone=NULL;
			$this->email=NULL;
			$this->password=NULL;
			$this->booked=NULL;
		}

// get set function
		public function getName(){
			return $this->name;
		}
		public function getLastname(){
			return $this->lastname;
		}
		public function getPhone(){
			return $this->phone;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getPassword(){
			return $this->password;
		}
		public function getBooked(){
			return $this->booked;
		}
		//- - - - - - - - - - - - - - - - - 
		public function setName($temp){
			$this->name=$temp;
		}
		public function setLastname($temp){
			$this->lastname=$temp;
		}
		public function setPhone($temp){
			$this->phone=$temp;
		}
		public function setEmail($temp){
			$this->email=$temp;
		}
		public function setPassword($temp){
			$this->password=Hash::make($temp);
		}
		public function setBooked($temp){
			$this->booked=$temp;
		}

// get User
		public static function getUser($email){
			if(dbuser::notNull($email)){
				$Objuser = new User();
				$Objuser->setEmail($email);
				$Objuser->setname(dbuser::getName($email));
				$Objuser->setPassword(dbuser::getPassword($email));
				return $Objuser;
			}
			else {
				return NULL;
			}
		}

	
//-----------------------------------------
// save User
		/*public function setUser(){
			if(UserRepository::isExist($this->getId())){
				UserRepository::setUsername($this->username);
				UserRepository::setPassword($this->password);
				UserRepository::setRole($this->role);
			}
			else {
			}
		}
//-----------------------------------------

// print line
		public function println(){
			echo 	"Username : ".$this->username.
					"\nPassword : ".$this->password.
					"\nRole : ".$this->role."\n";
		}
		*/
//-----------------------------------------
	}
?>