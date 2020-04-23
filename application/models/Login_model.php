<?php
class Login_model extends CI_Model{

  function validate($email,$password){
    $this->db->where('user_email',$email);
    $this->db->where('user_password',$password);
    $result = $this->db->get('tbl_users',1);
    return $result;
  }
  public function check_email($email){
		$condition = "user_email =" . "'" . $email . "'";
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	public function insert_new_profle($data){
		$this->db->insert('tbl_users', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

}
