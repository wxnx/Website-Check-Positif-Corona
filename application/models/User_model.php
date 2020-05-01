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

    public function del_datapenyebaran($kecamatan)
    {
        $this->db->delete('data_penyebaran', array('kecamatan' => $kecamatan));
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
