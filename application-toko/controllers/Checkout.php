<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

  function index()
  {
      if($this->cart->total_items() <= 0){
        redirect('homepage');
      }
      $data['ekspedisi'] = $this->db->query("SELECT * FROM ekspedisi")->result();
      $data['title'] = 'Checkout - (Nama Toko) Office Stationery Store';
      $this->load->view('templates_user/header', $data);
      $this->load->view('templates_user/topbar',$data);
      $this->load->view('checkout', $data);
      $this->load->view('templates_user/footer');
  }

	function placeOrder()
	{
			// Insert order data
			$ordData = array(
				'id_pembeli' => $this->session->userdata('id') ? $this->session->userdata('id') : NULL,
				'nama_pembeli' => $this->input->post('nama_pembeli'),
				'alamat' => $this->input->post('alamat'),
				'catatan' => $this->input->post('catatan'),
				'grand_total' => $this->cart->total()
			);			
			$insertOrder = $this->ModelOrder->insertOrder($ordData);
	
			if ($insertOrder) {
					// Retrieve cart data from the session
					$cartItems = $this->cart->contents();
	
					// Cart items
					$ordItemData = array();
					$i = 0;
					foreach ($cartItems as $items) {
							$ordItemData[$i]['order_id'] = $insertOrder;
							$ordItemData[$i]['id_produk'] = $items['id'];
							$ordItemData[$i]['quantity'] = $items['qty'];
							$ordItemData[$i]['sub_total'] = $items["subtotal"];
							$i++;
					}
	
					// Update stok produk
					$i = 0;
					foreach ($cartItems as $data) {
							$produk = $this->ModelOrder->getProdukID($data['id']);
							$produkData[$i] = array(
									'id' => $data['id'],
									'stok' => $produk->stok - $data['qty']
							);
							$i++;
					}
	
					if (!empty($ordItemData)) {
							// Insert order items
							$insertOrderItems = $this->ModelOrder->insertOrderItems($ordItemData);
							$this->db->update_batch('produk', $produkData, 'id');
	
							if ($insertOrderItems) {
									// Hapus data keranjang
									$this->cart->destroy();
	
									// Set flashdata sukses
									$this->session->set_flashdata('sukses',
											'<div class="alert alert-info alert-dismissible" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong>Pesanan berhasil dibuat!</strong> Silahkan cek di menu "Pesanan Saya".
											</div>'
									);
	
									// Redirect ke halaman "Pesanan Saya"
									redirect('selesai');
							}
					}
			}
			return false;
	}
	

  function pembayaran($ordID)
  {
      // Fetch order data from the database
      $data['order'] = $this->ModelOrder->getOrder($ordID);

      // Load order details view
      $data['title'] = 'Pembayaran - (Nama Toko) Stationery Store';
      $this->load->view('templates_user/header', $data);
      $this->load->view('pembayaran', $data);
  }

}

?>
