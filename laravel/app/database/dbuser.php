<?php 
/**
* 
*/
class dbuser
{
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// check if exsit this user by search from DB
	public static function notNull($email){
		$data = userdatabase::find($email);
		if($data==NULL){
			return false;
		}
		else {
			return true;
		}
	} 
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// new user
	public static function newUser(){
		$usernew = new userdatabase();
		$usernew->save();
		return $usernew->email;
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get ID of Object by username
	public static function getNames($email){
		$dataname = userdatabase::where('name','=',$name)->get();
		if(count($tmp)==0){
			return NULL;
		}
		else {
			return $tmp->id;
		}
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get data from database
	public static function getName($email){
		$data = userdatabase::where('name','=',$name)->get();
		if($data==NULL){
			return NULL;
		}
		else {
			return $data->name;
		}
	}
	
	public static function getPassword($email){
		$data = userdatabase::where('password','=',$password)->get();
		if($data==NULL){
			return NULL;
		}
		else {
			return $data->password;
		}
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// Seve data to database
	/*
	public static function setName($email,$data){
		$datas = userdatabase::where('name','=',$name)->get();
		if($datas==NULL){

		}
		else {
			$datas->name=$data;
			$datas->save();
		}
	}
	public static function setPassword($email,$data){
		$datas = userdatabase::where('password','=',$password)->get();
		if($datas==NULL){

		}
		else {
			$datas->username=$data;
			$datas->save();
		}
	}
	*/
}
 ?>