<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function index()
    {
		   // Jika tidak ada nomor halaman di URL, redirect ke halaman 1
		   if ($this->uri->segment(3) == null) {
			redirect('shop/index/1');
		}
		
        $this->load->library('pagination'); // Load library pagination
        $this->load->model('ModelKategori'); // Load model kategori
		
        // Ambil jumlah total produk
        $total_produk = $this->db->count_all('produk');

        // Konfigurasi pagination
        $config['base_url'] = site_url('shop/index');
        $config['total_rows'] = $total_produk; // Jumlah total produk
        $config['per_page'] = 16; // Produk per halaman
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;

        // Tambahkan konfigurasi tambahan agar pagination berfungsi dengan baik
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['prev_link'] = '← Prev';
        $config['next_link'] = 'Next →';

        // Style pagination agar terlihat lebih bagus
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center mb-0">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		
        $this->pagination->initialize($config); // Inisialisasi pagination
		
        // Ambil data kategori
        $data['kategori'] = $this->ModelKategori->get_kategori()->result();

        // Ambil data produk berdasarkan pagination
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
        $offset = ($page - 1) * $config['per_page'];

		$this->db->select('pd.*, kategori as kategori'); 
		$this->db->from('produk pd');
		$this->db->join('kategori kt', 'kt.id_kategori = pd.kategori_id', 'left');
		$this->db->order_by('pd.id', 'DESC');
		$this->db->limit($config['per_page'], $offset); // Menggunakan pagination
		$data['produk'] = $this->db->get()->result();
		
		
        // Kirim total produk ke view
        $data['total_produk'] = $total_produk;

        // Buat pagination link
        $data['pagination'] = $this->pagination->create_links();

        // Set title halaman
        $data['title'] = ' (Nama Toko) - Toko Online untuk kebutuhan Alat Tulis Kantor';

        // Load view
        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/topbar', $data);
        $this->load->view('shop', $data);
        $this->load->view('templates_user/footer');
    }
}
?>

