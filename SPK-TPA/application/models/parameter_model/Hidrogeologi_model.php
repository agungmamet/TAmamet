<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hidrogeologi_model extends CI_Model {

    public function joinhidro()
    {
        $data=$this->db->query("SELECT id_klasifikasi, hidrogeologi, nilai_klasifikasi.editby, nama_daerah, nama_admin from nilai_klasifikasi, daerah, administrator where daerah.id_daerah = nilai_klasifikasi.id_daerah and administrator.id_admin = nilai_klasifikasi.editby");
        return $data->result();
    }

    public function bobot()
    {
		$data= $this->db->query("SELECT hidrogeologi from bobot");
        return $data->row(); 
    }

    public function tambah_hidro($data)
    {
        $this->db->insert('nilai_klasifikasi',$data);
    }

    public function idbobot()
    {
        return $this->db->get('bobot')->result();
    }

    public function tampilkecamatan()
    {
        return $this->db->get('daerah')->result(); 
    }

    public function edit_hidro($id)
    {       
        $data = $this->db->query("SELECT id_klasifikasi, hidrogeologi, nama_daerah from nilai_klasifikasi, daerah where daerah.id_daerah = nilai_klasifikasi.id_daerah and id_klasifikasi=$id");
        return $data->result();
    }

    public function update_hidro($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_hidro($id)
    {
        $this->db->where('id_klasifikasi',$id);
        $this->db->delete('nilai_klasifikasi');
    }

}