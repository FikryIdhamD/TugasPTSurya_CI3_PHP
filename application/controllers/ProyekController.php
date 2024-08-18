<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property ProyekModel $ProyekModel
 * @property CI_Input $input
 * @property CI_Loader $load
 * @property CI_Uri $uri
 */
class ProyekController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ProyekModel');
        $this->load->helper('url');
    }

    public function index() {
        $data['proyek'] = $this->ProyekModel->get_all_proyek();
        $this->load->view('proyek_list', $data);
    }

    public function create() {
        $data['lokasi'] = $this->ProyekModel->get_all_lokasi();
        $this->load->view('proyek_create', $data);
    }

    public function store() {
        $postData = $this->input->post();
    
        // Konversi lokasi_id ke lokasiList
        $postData['lokasiList'] = [];
        if (isset($postData['lokasi_id'])) {
            foreach ($postData['lokasi_id'] as $lokasi_id) {
                $postData['lokasiList'][] = ['id' => $lokasi_id];
            }
        }
        unset($postData['lokasi_id']); // Remove the old lokasi_id field
    
        // Format tglMulai dan tglSelesai ke format yang diharapkan API
        $postData['tglMulai'] = date('Y-m-d\TH:i:s', strtotime($postData['tglMulai']));
        $postData['tglSelesai'] = date('Y-m-d\TH:i:s', strtotime($postData['tglSelesai']));
    
        // Kirim data ke model untuk penyimpanan
        $this->ProyekModel->create_proyek($postData);
        redirect(base_url('index.php/ProyekController'));
    }    

    public function edit($id) {
        $data['proyek'] = $this->ProyekModel->get_proyek_by_id($id);
        
        // Tambahkan pengecekan jika data proyek tidak ditemukan
        if ($data['proyek'] === null) {
            // Anda bisa menampilkan pesan error atau mengarahkan kembali ke halaman lain
            show_error('Proyek tidak ditemukan.', 404);
            return;
        }
    
        $data['lokasi'] = $this->ProyekModel->get_all_lokasi();
        $this->load->view('proyek_edit', $data);
    }
    

    public function update($id) {
        $postData = $this->input->post();
    
        // Konversi lokasi_id ke lokasiList
        $postData['lokasiList'] = [];
        if (isset($postData['lokasi_id'])) {
            foreach ($postData['lokasi_id'] as $lokasi_id) {
                $postData['lokasiList'][] = ['id' => $lokasi_id];
            }
        }
        unset($postData['lokasi_id']); // Remove the old lokasi_id field
    
        // Format tglMulai dan tglSelesai ke format yang diharapkan API
        $postData['tglMulai'] = date('Y-m-d\TH:i:s', strtotime($postData['tglMulai']));
        $postData['tglSelesai'] = date('Y-m-d\TH:i:s', strtotime($postData['tglSelesai']));
    
        // Kirim data ke model untuk update menggunakan PUT
        $this->ProyekModel->update_proyek($id, $postData);
        redirect(base_url('index.php/ProyekController'));
    }
    

    public function delete($id) {
        $this->ProyekModel->delete_proyek($id);
        redirect(base_url('index.php/ProyekController'));
    }
}