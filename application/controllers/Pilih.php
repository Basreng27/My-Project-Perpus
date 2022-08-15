<?php
class Pilih extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pilih');
    }
    function index()
    {
        $x['data'] = $this->M_pilih->get_pilih();
        $this->load->view('v_kategori', $x);
    }
}
