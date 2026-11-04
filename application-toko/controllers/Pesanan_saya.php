<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_saya extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      if (!$this->session->userdata('id')) {
          redirect('Auth/login');
          exit();
      }
  }

  public function index()
  {
    $pembeli = $this->session->userdata('id');
    if (!$pembeli) {
        redirect('Auth/login');
        exit();
    }

    $this->db->where('id_pembeli', $pembeli);
    $this->db->order_by('transaction_time', 'DESC');
		$data['belum_bayar'] = $this->db->query("SELECT * FROM transaksi tr
		WHERE tr.status='Belum Bayar' AND tr.id_pembeli='$pembeli' ORDER BY tr.transaction_time DESC")->result();
$data['dikemas'] = $this->db->query("SELECT * FROM transaksi tr
		WHERE tr.status='Dikemas' AND tr.id_pembeli='$pembeli'")->result();
$data['dikirim'] = $this->db->query("SELECT * FROM transaksi tr
		JOIN pengiriman pg ON pg.order_id=tr.order_id
		WHERE tr.status='Dikirim' AND tr.id_pembeli='$pembeli'")->result();
$data['selesai'] = $this->db->query("SELECT * FROM transaksi tr
		JOIN pengiriman pg ON pg.order_id=tr.order_id
		WHERE tr.status='Selesai' AND tr.id_pembeli='$pembeli'")->result();
$data['pengiriman'] = $this->db->query("SELECT * FROM pengiriman pn
		JOIN transaksi tr ON pn.order_id=tr.order_id
		WHERE tr.id_pembeli='$pembeli'")->result();

    $data['title'] = 'Pesanan Saya - (Nama Toko) Office Stationery Store';
    $this->load->view('templates_user/header', $data);
    $this->load->view('templates_user/topbar', $data);
    $this->load->view('pesanan_saya', $data);
    $this->load->view('templates_user/footer');
  }

	public function detail($id)
{
    if (!$id) {
        show_404();
    }

    $this->db->update('notifikasi', ['read' => 1], ['order_id' => $id, 'role' => 2]);

    $this->db->join('ekspedisi ep', 'tr.id_ekspedisi = ep.id_ekspedisi');
    $this->db->join('user us', 'tr.id_pembeli = us.id');
    $data['transaksi'] = $this->db->get_where('transaksi tr', ['order_id' => $id])->result();

    $this->db->join('produk pd', 'ip.id_produk = pd.id');
    $data['item_pesanan'] = $this->db->get_where('item_pesanan ip', ['order_id' => $id])->result();

    // **Tambahkan ini untuk mengambil data pengiriman**
    $data['pengiriman'] = $this->db->get_where('pengiriman', ['order_id' => $id])->row();

    // **Tambahkan ini untuk menghindari error pada notifikasi**
    $data['notif'] = $this->db->get_where('notifikasi', ['order_id' => $id])->result();

    $data['title'] = 'Detail Pesanan - (Nama Toko) Office Stationery Store';

    $this->load->view('templates_user/header', $data);
    $this->load->view('templates_user/topbar', $data);
    $this->load->view('detail_pesanan', $data);
    $this->load->view('templates_user/footer');
}

	

  public function trial_bayar()
  {
    $order_id = $this->input->post('order_id', true);
    if (!$order_id) {
        redirect('pesanan_saya');
        exit();
    }
    
    $data = [
      'settlement_time' => date('Y-m-d H:i:s'),
      'status_code' => '200',
      'status' => 'Dikemas'
    ];
    $this->db->update('transaksi', $data, ['order_id' => $order_id]);
    
    $notif = [
      ['order_id' => $order_id, 'id_user' => $this->session->userdata('id'), 'role' => 1, 'created' => date('Y-m-d H:i:s')],
      ['order_id' => $order_id, 'id_user' => $this->session->userdata('id'), 'role' => 2, 'created' => date('Y-m-d H:i:s')]
    ];
    
    $this->db->insert_batch('notifikasi', $notif);
    redirect('pesanan_saya');
  }

  public function selesaikan_pesanan()
  {
    $order_id = $this->input->post('order_id', true);
    if (!$order_id) {
        redirect('pesanan_saya');
        exit();
    }
    
    $this->db->update('pengiriman', ['tgl_diterima' => date('Y-m-d H:i:s'), 'status' => '1'], ['order_id' => $order_id]);
    $this->db->update('transaksi', ['status' => 'Selesai'], ['order_id' => $order_id]);
    $this->db->update('notifikasi', ['read' => 0, 'created' => date('Y-m-d H:i:s')], ['order_id' => $order_id]);
    
    redirect('pesanan_saya/penilaian/'.$order_id);
  }

  public function beri_nilai()
  {
    $id_produk = $this->input->post('id_produk', true);
    $bintang = $this->input->post('bintang', true);
    $komentar = $this->input->post('komentar', true);
    $order_id = $this->input->post('order_id', true);
    $id_user = $this->input->post('id_user', true);

    if (!$id_produk || !$order_id || !$id_user) {
        redirect('pesanan_saya');
        exit();
    }

    $data = [];
    for ($i = 0; $i < count($id_produk); $i++) {
        $data[] = [
          'order_id' => $order_id,
          'id_produk'  => $id_produk[$i],
          'id_user' => $id_user,
          'bintang' => $bintang[$i],
          'komentar' => $komentar[$i],
          'date_posted' => date('Y-m-d')
        ];
    }

    $this->db->insert_batch('ulasan', $data);
    redirect('pesanan_saya');
  }
}
