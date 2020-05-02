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

    public function viewDataPenyebaranOnUser()
    {
        return $this->db->get('data_penyebaran')->result_array();
    }

    public function addDataPenyebaran($data)
    {
        $this->db->insert('data_penyebaran', $data);
    }

    public function editDataPenyebaran($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('data_penyebaran', $data);
        return TRUE;
    }

    public function hapusDataPenyebaran($id)
    {
        $this->db->delete('data_penyebaran', array('id' => $id));
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
            "id" => $this->session->userdata('id'),
        ];
        $this->db->insert('pasien', $data);
    }

    public function inputJadwalPasien($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pasien', $data);
        return TRUE;
    }

    public function inputJadwalUser($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_users', $data);
        return TRUE;
    }

    public function inputStatusPasien($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pasien', $data);
        return TRUE;
    }

    public function inputStatusUser($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_users', $data);
        return TRUE;
    }

    public function del_pasien($id)
    {
        $this->db->delete('pasien', array('id' => $id));
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
