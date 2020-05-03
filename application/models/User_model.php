<?php

class User_model extends CI_Model
{
    public function viewDataUser($email)
    {
        //get data mahasiswa based on id 
        $this->db->where('user_email', $email);
        $query = $this->db->get('tbl_users');
        $query->row();
    }

    public function viewDataPenyebaranOnUser()
    {
        return $this->db->get('data_penyebaran')->result_array();
    }

    public function sendData()
    {
        $data = [
            "nama" => $this->session->userdata('nama'),
            "email" => $this->session->userdata('email'),
            "kecamatan" => $this->session->userdata('kecamatan'),
            "status" => $this->session->userdata('status'),
            "jadwal" => $this->session->userdata('jadwal'),
            "id" => $this->session->userdata('id'),
        ];
        $this->db->insert('pasien', $data);
    }

    public function gantiPass($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_users', $data);
        return TRUE;
    }

    public function gantiKecamatan($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_users', $data);
        return TRUE;
    }
}
