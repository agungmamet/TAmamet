<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Daerah_model extends CI_Model
{
	public function daerah()
    {
        $data=$this->db->query("SELECT id_daerah, nama_daerah, nama_admin from daerah, administrator where daerah.editby = administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM daerah");
        return $data->row(); 
    }

    public function tambah_daerah($data)
    {
        $this->db->insert('daerah',$data);
    }

    public function edit_daerah($id)
    {       
        $data = $this->db->query("SELECT * FROM daerah where id_daerah = $id");
        return $data->result();
    }
    public function update_daerah($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

        public function hapus_daerah($id)
    {
        $this->db->where('id_daerah',$id);
        $this->db->delete('daerah');
    }
}