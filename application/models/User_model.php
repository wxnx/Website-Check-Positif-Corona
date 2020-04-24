<?php

class User_model extends CI_Model
{
    public function hapusPassword($id)
    {
        //use query builder to delete data based on id 
        $this->db->where('user_id', $id);
        $this->db->delete('user_password');
    }

    public function viewDataUser($email)
    {
        //get data mahasiswa based on id 
        $this->db->where('user_email',$email);
        $query = $this->db->get('tbl_users');
        $query->row();
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
