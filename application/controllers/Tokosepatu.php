<?php
class Tokosepatu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('view-form-sepatu');
    }
    public function cetak()
    {
        $this->load->model(['Modelsepatu']);
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merk' => $this->input->post('merk'),
                'harga' => $this->Modelsepatu->getHarga($this->input->post('merk')),
                'ukuran' => $this->input->post('ukuran')
            ];
            $this->load->view('view-data-sepatu', $data);
    }
   
}
