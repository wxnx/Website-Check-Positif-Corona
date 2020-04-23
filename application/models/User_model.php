<?php

class User_model extends CI_Model
{
    public function hapusPassword($id)
    {
        //use query builder to delete data based on id 
        $this->db->where('user_id', $id);
        $this->db->delete('user_password');
    }

    public function viewDataUser($user_id)
    {
        //get data mahasiswa based on id 
        return $this->db->get_where('tbl_users', array('user_id' => $user_id))->result_array();
    }

    public function ubahDataPassword()
    {
        $data = [
            "password" => $this->input->post('user_password', true)
        ];
        //use query builder class to update data mahasiswa based on id
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_users', $data);
    }

    public function ubahDataStatus()
    {
        $data = [
            "status" => $this->input->post('status_user', true)
        ];
        //use query builder class to update data mahasiswa based on id
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_users', $data);
    }

    public function ubahDataAlamat()
    {
        $data = [
            "alamat" => $this->input->post('alamat', true)
        ];
        //use query builder class to update data mahasiswa based on id
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_users', $data);
    }
}
