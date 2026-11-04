<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selesai extends CI_Controller {

  public function index()
  {
    // Ambil semua pesanan yang ada tanpa id_pembeli
    $data['belum_bayar'] = $this->db->query("SELECT * FROM transaksi WHERE status='Belum Bayar' ORDER BY transaction_time DESC")->result();
    $data['dikemas'] = $this->db->query("SELECT * FROM transaksi WHERE status='Dikemas'")->result();
    $data['dikirim'] = $this->db->query("SELECT * FROM transaksi WHERE status='Dikirim'")->result();
    $data['selesai'] = $this->db->query("SELECT * FROM transaksi WHERE status='Selesai'")->result();

    $data['title'] = 'Pesanan Saya - (Nama Toko) Office Stationery Store';
    $this->load->view('templates_user/header', $data);
    $this->load->view('templates_user/topbar', $data);
    $this->load->view('selesai', $data);
    $this->load->view('templates_user/footer');
  }

  public function ubah_ke_selesai()
  {
    $order_id = $this->input->post('order_id', true); // Ambil order_id dari input form atau URL
    if (!$order_id) {
        redirect('selesai');
        exit();
    }

    // Update status transaksi menjadi 'Selesai'
    $this->db->update('transaksi', ['status' => 'Selesai'], ['order_id' => $order_id]);

    // Update status pengiriman jika ada
    $this->db->update('pengiriman', ['status' => '1', 'tgl_diterima' => date('Y-m-d H:i:s')], ['order_id' => $order_id]);

    // Redirect ke halaman pesanan selesai
    redirect('selesai?status=selesai');
  }
}
