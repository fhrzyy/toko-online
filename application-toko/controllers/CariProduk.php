<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CariProduk extends CI_Controller {

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['produk'] = $this->ModelProduk->get_keyword($keyword);
		
		 // Validasi jika produk kosong
		if (empty($data['produk'])) {
			$data['pesan'] = "Produk dengan kata kunci '$keyword' tidak ditemukan.";
		}
	
	
		// Tambahkan variabel yang hilang
		$data['total_produk'] = count($data['produk']); // Hitung jumlah produk hasil pencarian
		$data['pagination'] = ''; // Supaya tidak error karena pagination tidak digunakan dalam pencarian
		
		$data['title'] = '(Nama Toko) - Toko Online untuk kebutuhan Alat Tulis Kantor';
		// Load view dengan data yang benar
		$this->load->view('templates_user/headerhome', $data);
		$this->load->view('templates_user/topbarhome', $data);
		$this->load->view('cariproduk', $data);
		$this->load->view('templates_user/footerhome');
	}
	

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
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['num_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
        $config['num_tag_close'] = '</a></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '</span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
        $config['prev_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
        $config['next_tag_close'] = '</a></li>';
        $config['first_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
        $config['first_tag_close'] = '</a></li>';
        $config['last_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
        $config['last_tag_close'] = '</a></li>';

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
        $data['title'] = '(Nama Toko) - Toko Online untuk kebutuhan Alat Tulis Kantor';

        // Load view
        $this->load->view('templates_user/headerhome', $data);
        $this->load->view('templates_user/topbarhome', $data);
        $this->load->view('cariproduk', $data);
        $this->load->view('templates_user/footerhome');
    }
}
?>
