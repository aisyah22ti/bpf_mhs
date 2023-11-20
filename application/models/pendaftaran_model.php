<?php
defined("BASEPATH") or exit("No direct script acces allowed");

class pendaftaran_model extends CI_Model
{
    public $table = 'pendaftaran';
    public $id = 'id_pendaftaran.id';

    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data, $upload_image)
    {
        $this->db->insert($this->table, $data);
        $insert_id = $this->db->insert_id();

        if ($upload_image) {
            $this->db->where('id', $insert_id);
            $this->db->update($this->table, ['gambar' => $upload_image]);
        }

        return $insert_id;
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
?>