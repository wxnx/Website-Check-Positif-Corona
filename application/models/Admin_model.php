<?php

class Admin_model extends CI_Model
{
    public function getPasien()
    {
        return $this->db->get('pasien')->result();
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

    public function del_pasien($id)
    {
        $this->db->delete('pasien', array('id' => $id));
        return;
    }

    public function inputStatusUser($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_users', $data);
        return TRUE;
    }

    public function viewDataPenyebaran()
    {
        return $this->db->get('data_penyebaran')->result();
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
}
