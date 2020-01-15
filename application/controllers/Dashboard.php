<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class dashboard extends CI_Controller {

    public function index()
    {
        $this->load->model('model_barang');
        $data['barang'] = $this->model_barang->show_data()->result();
        $this->load->view('dashboard',$data);
    }
    function detail_barang($id)
    {
        $data['barang'] = $this->model_barang->detail_barang($id);
        $this->load->view('detail_barang',$data);
    }
    function add_to_cart($id)
    {
        $barang = $this->model_barang->find($id);
        $data = [
            'id'=>$barang->id,
            'name'=>$barang->nama,
            'qty'=>1,
            'price'=>$barang->harga
        ];
        $this->cart->insert($data);
        redirect('dashboard');
    }
    function show_cart()
    {
        $this->load->view('cart');
    }
    function delete_cart()
    {
        $this->cart->destroy();
        redirect('dashboard');
    }
        
}
        
    /* End of file  dashboard.php */
        
                            