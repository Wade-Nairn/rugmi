<?php
require_once '../libs/model.lib.php';
class User extends Model{
	
	# Tell the page model what table it belongs to
	protected $table = 'users';
	public function authenticate(){
		// $this->username is the username that was typed into the form
		// $this->password is the password that was typed into the form
		# Get user from the database
		$user = $this->db
			->select('id, password')
			->from('users')
			->where('username', $this->username)
			->get_one();
		if($user){
			if(password_verify($this->password, $user['password'])){
				$this->id = $user['id'];
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}