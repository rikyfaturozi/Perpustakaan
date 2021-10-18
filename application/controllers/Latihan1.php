<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat datang..<br> Selamat belajar Web Programming";
    }
    public function penjumlah($n1, $n2)
    {
        $this->load->Model('Model_latihan1');
        
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
    
        $this->load->view('View-latihan1', $data);
    }
}
