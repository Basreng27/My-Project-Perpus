<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign extends CI_Controller
{
	public function index()
	{
		if (!isset($_SESSION['login'])) {
			$this->load->view('login');
		} else {
			// $this->data['idbo'] = $this->session->userdata('ses_id');
			// $this->data['title_web'] = 'Dashboard ';
			$this->data['count_pengguna'] = $this->db->query("SELECT * FROM anggota")->num_rows();
			$this->data['count_buku'] = $this->db->query("SELECT * FROM buku")->num_rows();
			$this->data['count_pinjam'] = $this->db->query("SELECT * FROM transaksi WHERE status = 'dipinjam'")->num_rows();
			$this->data['count_kembali'] = $this->db->query("SELECT * FROM transaksi WHERE status = 'dikembalikan'")->num_rows();
			$this->load->view('c_general', $this->data);
			// $this->load->view('sidebar_view',$this->data);
			// $this->load->view('dashboard_view',$this->data);
			// $this->load->view('footer_view',$this->data);

		}
	}

	public function action_login()
	{
		$this->load->view('action_login');
	}

	public function home()
	{
		$this->load->view('c_general');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function verif()
	{
		$this->load->view('captcha');
	}

	public function logout()
	{
		$this->load->view('logout');
	}
}
