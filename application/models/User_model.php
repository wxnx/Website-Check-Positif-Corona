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
        $this->db->where('user_email', $email);
        $query = $this->db->get('tbl_users');
        $query->row();
    }

    public function getPasien()
    {
        return $this->db->get('pasien')->result();
    }

    public function viewDataPenyebaran()
    {
        return $this->db->get('data_penyebaran')->result_array();
    }

    public function addDataPenyebaran()
    {
        $data = [
            "kecamatan" => $this->input->post('kecamatan', true),
            "jumlah" => $this->input->post('jumlah', true),
        ];
        $this->db->insert('data_penyebaran', $data);
    }

    public function sendData()
    {
        $data = [
            "nama" => $this->session->userdata('nama'),
            "email" => $this->session->userdata('email'),
            "kecamatan" => $this->session->userdata('kecamatan'),
            "status" => $this->session->userdata('status'),
            "jadwal" => $this->session->userdata('jadwal'),
        ];
        $this->db->insert('pasien', $data);
    }

    public function inputJadwal($email, $data)
    {
        $this->db->where('email', $email);
        $this->db->update('pasien', $data);
        $this->db->update('tbl_users', $data);
        return TRUE;
    }

    public function inputStatus($email, $data)
    {
        $this->db->where('email', $email);
        $this->db->update('pasien', $data);
        $this->db->update('tbl_users', $data);
        return TRUE;
    }

    public function del_pasien($email)
    {
        $this->db->delete('pasien', array('email' => $email));
        return;
    }

    public function del_datapenyebaran($kecamatan)
    {
        $this->db->delete('data_penyebaran', array('kecamatan' => $kecamatan));
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
