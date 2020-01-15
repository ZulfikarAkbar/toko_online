<?php

class data_barang extends CI_Controller{
    function index()
    {
        $this->load->model('model_barang');
        $data['barang'] = $this->model_barang->show_data()->result();
        $this->load->view('admin/data_barang', $data);
    }
    function detail_barang($id)
    {
        $data['barang'] = $this->model_barang->detail_barang($id);
        $this->load->view('admin/detail_barang',$data);
    }
    function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $img = $_FILES['img']['name'];

        if($img = ''){

        }else{
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg';
            $this->load->library('upload', $config);
            $upload_img = $this->upload->do_upload('img');
            if(!$upload_img) echo "Gambar gagal diupload";
            $img = $this->upload->data('file_name');
        }
        $arr_data = [
            'nama' => $nama,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'img' => $img
        ];
        $this->model_barang->tambah_barang($arr_data, 'tb_barang');
        redirect('Admin/Data_barang/index'); 
    }
    function edit($id)
    {
        $data['barang'] = $this->model_barang->edit_barang(['id' => $id],'tb_barang')->result();
        $this->load->view('admin/edit_barang', $data);
    }
    function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $img = $_FILES['img']['name'];

        if($img = ''){

        }else{
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg';
            $this->load->library('upload', $config);
            $upload_img = $this->upload->do_upload('img');
            if(!$upload_img) echo "Gambar gagal diupload";
            $img = $this->upload->data('file_name');
        }
        
        $arr_data = [
            'nama' => $nama,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'img' => $img
        ];
        $this->model_barang->update_barang(['id' => $id], $arr_data, 'tb_barang');
        redirect('Admin/data_barang/index');
    }
    function delete($id)
    {
        $this->model_barang->hapus_barang(['id' =>$id], 'tb_barang');
        redirect('Admin/data_barang/index');
    }
}