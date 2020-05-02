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

    public function getPasien()
    {
        return $this->db->get('pasien')->result();
    }

    public function viewDataPenyebaran()
    {
        return $this->db->get('data_penyebaran')->result();
    }

    public function addDataPenyebaran($data)
    {
        $this->db->insert('data_penyebaran', $data);
    }

    public function editDataPenyebaran($kecamatan, $data)
    {
        $this->db->where('kecamatan', $kecamatan);
        $this->db->update('data_penyebaran', $data);
        return TRUE;
    }

    public function hapusDataPenyebaran($kecamatan)
    {
        $this->db->delete('data_penyebaran', array('kecamatan' => $kecamatan));
        return;
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

    public function inputJadwalPasien($nama, $data)
    {
        $this->db->where('nama', $nama);
        $this->db->update('pasien', $data);
        return TRUE;
    }

    public function inputJadwalUser($nama, $data)
    {
        $this->db->where('nama', $nama);
        $this->db->update('tbl_users', $data);
        return TRUE;
    }

    public function inputStatusPasien($nama, $data)
    {
        $this->db->where('nama', $nama);
        $this->db->update('pasien', $data);
        return TRUE;
    }

    public function inputStatusUser($nama, $data)
    {
        $this->db->where('nama', $nama);
        $this->db->update('tbl_users', $data);
        return TRUE;
    }

    public function del_pasien($email)
    {
        $this->db->delete('pasien', array('email' => $email));
        return;
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
