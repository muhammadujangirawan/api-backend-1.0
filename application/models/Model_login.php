<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function authentication($username,$password)
	{
		$password = sha1($password);
		$sql = "SELECT * FROM tb_user WHERE username = ? and password = ?";
		$query = $this->db->query($sql,array($username,$password));
		return $query->row_array();
	}
}