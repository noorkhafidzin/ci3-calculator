<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjumlahan extends CI_Controller
{
    public function index()
    {
        $this->load->view('penjumlahan');
    }

    public function jumlah()
    {
        $angka1 = $this->input->post('angka1');
        $angka2 = $this->input->post('angka2');
        $hasil = $angka1 + $angka2;
        $data['hasil'] = $hasil;
        $this->load->view('penjumlahan', $data);
    }
}
