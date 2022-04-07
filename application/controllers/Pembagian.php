<?php

class Pembagian extends CI_Controller
{
    public function index()
    {
        $this->load->view('pembagian');
    }

    public function jBagi()
    {
        $bilangan1 = $this->input->post('bilangan1');
        $bilangan2 = $this->input->post('bilangan2');
        $hasil = $bilangan1 / $bilangan2;
        $data['hasil'] = $hasil;
        $this->load->view('pembagian', $data);
    }
}
