<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Crud extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	//daftar buku
	public function daftar_buku()
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$data['content'] = $this->db->get('buku');
			$this->load->view('daftar_buku', $data);
		}
	}

	//tambah buku
	public function tambah_buku()
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->load->view('tambah_buku');
		}
	}

	public function action_tambah_buku()
	{

		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$data = array(
				$GLOBALS = $this->input->post('cancel')
			);
			if ($GLOBALS == "cancel") {
				redirect('daftar_buku', 'refresh');
			} else {
				$data = array(
					'isbn' => $this->input->post('isbn_number'),
					'judul' => $this->input->post('judul'),
					'pengarang' => $this->input->post('pengarang'),
					'penerbit' => $this->input->post('penerbit'),
					'kategori' => $this->input->post('kategori'),
					'kelas' => $this->input->post('kelas'),
					'tahun' => $this->input->post('tahun'),
					'stok' => $this->input->post('stok'),
					'jumlah' => $this->input->post('jumlah')
				);

				$this->db->insert('buku', $data);

				redirect('daftar_buku', 'refresh');
			}
		}
	}
	//update buku
	public function update_buku($id = '')
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->db->where('id', $id);
			$data['content'] = $this->db->get('buku');
			$this->load->view('update_buku', $data);
		}
	}

	public function action_update_buku($id = '')
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$data = array(
				$GLOBALS = $this->input->post('cancel')
			);
			if ($GLOBALS == "cancel") {
				redirect('daftar_buku', 'refresh');
			} else {
				$data = array(
					'isbn' => $this->input->post('isbn_number'),
					'judul' => $this->input->post('judul'),
					'pengarang' => $this->input->post('pengarang'),
					'penerbit' => $this->input->post('penerbit'),
					'kategori' => $this->input->post('kategori'),
					'kelas' => $this->input->post('kelas'),
					'tahun' => $this->input->post('tahun'),
					'stok' => $this->input->post('stok'),
					'jumlah' => $this->input->post('jumlah')
				);

				$this->db->where('id', $id);
				$this->db->update('buku', $data);
				redirect('daftar_buku', 'refresh');
			}
		}
	}
	//hapus buku
	public function hapus_buku($id = NULL)
	{

		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->db->where('id', $id);
			$this->db->delete('buku');

			redirect("daftar_buku", "refresh");
		}
	}

	//peminjaman buku
	public function peminjaman_buku()
	{

		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$data['content'] = $this->db->get('buku');
			$this->load->view('peminjaman_buku', $data);
		}
	}

	// pinjam buku
	public function pinjam_buku($id = '')
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			// $this->db->where('id', $id2);
			$data['anggota'] = $this->db->get('anggota');

			$this->db->where('id', $id);
			$data['content'] = $this->db->get('buku');
			$this->load->view('pinjam_buku', $data);
		}
	}

	public function action_peminjaman_buku($id = '')
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$data = array(
				$GLOBALS = $this->input->post('cancel')
			);
			if ($GLOBALS == "cancel") {
				redirect('peminjaman_buku', 'refresh');
			} else {
				// $this->library->printr($_POST);
				$id_peminjam = $_POST['id_peminjam'];
				$nama = $_POST['nama'];
				$this->db->where('id', $id_peminjam);
				$this->db->where('nama', $nama);
				$this->db->from('anggota');

				$query = $this->db->count_all_results();
				if ($query == 1) {
					$id_peminjam = $this->input->post('id_peminjam');
					$anggota = $this->db->get_where('anggota', ['id' => $id_peminjam])->row();

					// cek batas peminjaman
					if ($anggota->batas <= 0) {
						echo "<script>alert('Batas peminjaman habis');</script>";
						redirect('peminjaman_buku', 'refresh');
						return false;
					}

					// cek stok buku
					$isbn_buku = $this->input->post('isbn_buku');
					$buku = $this->db->get_where('buku', ['isbn' => $isbn_buku])->row();
					if ($buku->stok <= 0) {
						echo "<script>alert('Stok Buku habis');</script>";
						redirect('peminjaman_buku', 'refresh');
						return false;
					}


					$data = array(
						'id_peminjam' => $this->input->post('id_peminjam'),
						'nama_peminjam' => $this->input->post('nama'),
						'isbn_buku' => $this->input->post('isbn_buku'),
						'judul' => $this->input->post('judul'),
						'date_pinjam' => $this->input->post('date_pinjam'),
						'date_kembali' => $this->input->post('date_kembali'),
						'status' => $this->input->post('status')
					);

					$query = $this->db->insert('transaksi', $data);

					if ($query) {
						$stok = $_POST['stok'] - 1;
						$isbn = $_POST['isbn_buku'];
						$data1 = array(
							'stok' => $stok
						);
						$this->db->where('isbn', $isbn);
						$this->db->update('buku', $data1);


						$pengurangan_batas = $anggota->batas - 1;
						$this->db->where('id', $id_peminjam);
						$this->db->update('anggota', ['batas' => $pengurangan_batas]);

						redirect('peminjaman_buku', 'refresh');
					}
				} else {
					// echo "oke3";
					echo "<script>alert('Nomor ID atau Nama Tidak Terdaftar!');</script>";
					redirect('peminjaman_buku', 'refresh');
				}
			}
		}
	}
	//pengembalian buku
	public function pengembalian_buku()
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->db->where('status', 'dipinjam');
			$data['content'] = $this->db->get('transaksi');
			$this->load->view('pengembalian_buku', $data);
		}
	}

	public function pengembalian_buku_dikembalikan()
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->db->where('status', 'dikembalikan');
			$data['content'] = $this->db->get('transaksi');
			$this->load->view('denda_buku', $data);
		}
	}

	// kembali buku
	public function kembali_buku($id = '')
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->db->where('id', $id);
			$data['content'] = $this->db->get('transaksi');
			$this->load->view('kembali_buku', $data);
		}
	}

	public function action_pengembalian_buku($id = '')
	{

		// $this->library->printr($_POST);
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$data = array(
				$GLOBALS = $this->input->post('cancel')
			);
			if ($GLOBALS == "cancel") {
				redirect('pengembalian_buku', 'refresh');
			} else {
				$data = array(
					'lama_keterlambatan' => $this->input->post('telat'),
					'denda' => $this->input->post('total'),
					'status' => $this->input->post('status'),
				);

				$this->db->where('id', $id);
				$this->db->update('transaksi', $data);

				// update stok barang
				$isbn_buku = $this->input->post('isbn_buku');
				$buku = $this->db->get_where('buku', ['isbn' => $isbn_buku])->row();
				$pengurangan_stok = $buku->stok + 1;

				$this->db->where('isbn', $isbn_buku);
				$this->db->update('buku', ['stok' => $pengurangan_stok]);

				// batas peminjaman siswa di kurangi
				$id_peminjam = $this->input->post('id_peminjam');
				$anggota = $this->db->get_where('anggota', ['id' => $id_peminjam])->row();

				$this->db->where('id', $id_peminjam);
				$this->db->update('anggota', ['batas' => $anggota->batas + 1]);
				redirect('pengembalian_buku', 'refresh');
			}
		}
	}


	//daftar anggota
	public function daftar_anggota()
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$data['content'] = $this->db->get('anggota');
			$this->load->view('daftar_anggota', $data);
		}
	}

	//tambah anggota
	public function tambah_anggota()
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->load->view('tambah_anggota');
		}
	}

	public function action_tambah_anggota()
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$data = array(
				$GLOBALS = $this->input->post('cancel')
			);
			if ($GLOBALS == "cancel") {
				redirect('daftar_anggota', 'refresh');
			} else {
				$data = array(
					'id' => $this->input->post('id'),
					'nama' => $this->input->post('nama'),
					'kelas' => $this->input->post('kelas'),
					'alamat' => $this->input->post('alamat'),
					'tempat_lahir' => $this->input->post('tempat_lahir'),
					'tanggal_lahir' => $this->input->post('tanggal_lahir'),
					'batas' => $this->input->post('batas')
				);

				$this->db->insert('anggota', $data);

				redirect('daftar_anggota', 'refresh');
			}
		}
	}
	//update anggota
	public function update_anggota($id = '')
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->db->where('id', $id);
			$data['content'] = $this->db->get('anggota');
			$this->load->view('update_anggota', $data);
		}
	}

	public function action_update_anggota($id = '')
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$data = array(
				$GLOBALS = $this->input->post('cancel')
			);
			if ($GLOBALS == "cancel") {
				redirect('daftar_anggota', 'refresh');
			} else {
				$data = array(
					'id' => $this->input->post('id'),
					'nama' => $this->input->post('nama'),
					'kelas' => $this->input->post('kelas'),
					'alamat' => $this->input->post('alamat'),
					'tempat_lahir' => $this->input->post('tempat_lahir'),
					'tanggal_lahir' => $this->input->post('tanggal_lahir'),
					'batas' => $this->input->post('batas')
				);

				$this->db->where('id', $id);
				$this->db->update('anggota', $data);
				redirect('daftar_anggota', 'refresh');
			}
		}
	}

	public function hapus_anggota($id = NULL)
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->db->where('id', $id);
			$this->db->delete('anggota');

			redirect("daftar_anggota", "refresh");
		}
	}

	//denda buku
	public function denda_buku()
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->db->where('denda >=', 0);
			$data['content'] = $this->db->get_where('transaksi', ['status' => 'dikembalikan']);
			$this->load->view('denda_buku', $data);
		}
	}

	//ganti password
	public function ganti_password()
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$this->load->view('ganti_password');
		}
	}

	public function action_ganti_password()
	{
		if (!isset($_SESSION['login'])) {
			redirect('sign', 'refresh');
		} else {
			$cancel = $this->input->post('cancel');
			if ($cancel == "cancel") {
				// echo "<script type='text/javascript'>alert('aaa');</script>";
				redirect('home', 'refresh');
			} else if ($_POST['konfirmasi_password_baru'] != $_POST['password_baru']) {
				echo "<script type='text/javascript'>alert('Password Tidak Sama!');</script>";
				redirect('ganti_password', 'refresh');
			} else {
				$username = $_SESSION['username'];
				$password = md5($_POST['password_lama']);
				$password_baru = md5($_POST['password_baru']);

				$this->db->where('username', $username);
				$this->db->where('password', $password);
				$this->db->from('admin');

				$query = $this->db->count_all_results();
				if ($query == 1) {
					$data['password'] = $password_baru;
					$this->db->where('username', $username);
					$this->db->update('admin', $data);

					echo "<script type='text/javascript'>alert('Ganti Password Berhasil!');</script>";
					redirect('ganti_password', 'refresh');
				} else {
					echo "<script type='text/javascript'>alert('Password Salah!');</script>";
					redirect('ganti_password', 'refresh');
				}
			}
		}
	}
}
