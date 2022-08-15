<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdf extends CI_Controller
{
    public function index()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $data['title_pdf'] = 'Laporan Pengembalian Buku';
        $data['content']   = $this->db->get_where('transaksi', ['status' => 'dikembalikan']);
        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_pengemalian_Buku';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

        $html = $this->load->view('cetak_denda', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function buku()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $data['title_pdf'] = 'Laporan Daftar Buku';
        $data['content']   = $this->db->get_where('buku', ['isbn']);
        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_Daftar_Buku';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

        $html = $this->load->view('cetak_buku', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function anggota()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $data['title_pdf'] = 'Laporan Daftar Anggota';
        $data['content']   = $this->db->get_where('anggota', ['id']);
        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_Daftar_Anggota';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

        $html = $this->load->view('cetak_anggota', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
