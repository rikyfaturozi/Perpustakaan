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
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo"<h1>Hasilnya <br></h1>". "<b>$n1" ." + ". "<b>$n2" ." <b>= "
        .$hasil;
    }
}
