<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_barang extends CI_Model{
    public function show_data()
    {
        return $this->db->get('tb_barang');
    }
    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit_barang($where,$table)
    {
        return $this->db->get_where($table,$where);
    }
    function update_barang($where, $data, $table)
    {
        $this->db->where($where)->update($table,$data);
    }
    function hapus_barang($where, $table)
    {
        $this->db->where($where)->delete($table);
    }
    function detail_barang($id)
    {
        return $this->db->where('id', $id)->get('tb_barang')->result();
    }
    function find($id)
    {
        return $this->db->where('id', $id)->limit(1)->get('tb_barang')->row();
    }
} 