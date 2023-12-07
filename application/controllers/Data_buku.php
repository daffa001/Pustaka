<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_buku extends CI_Controller
{
    public function index()
    {
        $this->load->view('buku/index.php')
    }
}