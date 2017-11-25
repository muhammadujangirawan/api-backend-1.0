<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_setting extends CI_Model {

	public function get_user()
	{
		$sql = "select * from tb_user order by fullname asc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}