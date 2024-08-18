<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProyekModel extends CI_Model {

    private $api_base_url = 'http://localhost:8080'; // Ganti dengan URL API Anda

    public function get_all_proyek() {
        // Ambil seluruh data proyek
        $response = file_get_contents($this->api_base_url . '/proyek');
        $proyek_data = json_decode($response, true);
    
        // Ambil seluruh data lokasi
        $lokasi_response = file_get_contents($this->api_base_url . '/lokasi');
        $lokasi_data = json_decode($lokasi_response, true);
    
        // Membuat peta lokasi berdasarkan ID
        $lokasi_map = [];
        foreach ($lokasi_data as $lokasi) {
            $lokasi_map[$lokasi['id']] = $lokasi['namaLokasi'];
        }
    
        // Menambahkan nama lokasi ke dalam data proyek
        foreach ($proyek_data as &$proyek) {
            $lokasi_names = [];
            // Asumsikan lokasiList adalah array dari ID lokasi
            foreach ($proyek['lokasiList'] as $lokasi) {
                $lokasi_id = $lokasi['id'];  // Pastikan mengambil ID lokasi yang benar
                if (isset($lokasi_map[$lokasi_id])) {
                    $lokasi_names[] = $lokasi_map[$lokasi_id];
                }
            }
            $proyek['lokasi'] = implode(', ', $lokasi_names);
        }
    
        return $proyek_data;
    }
    

    public function get_all_lokasi() {
        $response = file_get_contents($this->api_base_url . '/lokasi');
        return json_decode($response, true);
    }

    public function get_proyek_by_id($id) {
        // Ambil seluruh data proyek
        $response = file_get_contents($this->api_base_url . '/proyek');
        $proyek_data = json_decode($response, true);
    
        // Cari proyek yang sesuai dengan ID
        foreach ($proyek_data as $proyek) {
            if ($proyek['id'] == $id) {
                return $proyek;
            }
        }
    
        return null; // Jika proyek tidak ditemukan
    }
    

    public function create_proyek($data) {
        $options = [
            'http' => [
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
            ],
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($this->api_base_url . '/proyek', false, $context);
    
        // // Debugging output untuk status HTTP
        // $http_response_header = isset($http_response_header) ? $http_response_header : [];
        // echo "<pre>";
        // print_r($http_response_header);
        // echo "</pre>";
        // exit; // Berhenti di sini untuk melihat status HTTP
    }
    
    

    public function update_proyek($id, $data) {
        $options = [
            'http' => [
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'PUT',
                'content' => json_encode($data),
            ],
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($this->api_base_url . '/proyek/' . $id, false, $context);
    
        // // Debugging response (optional)
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        // exit; // Uncomment to stop execution and see response
    }
    

    public function delete_proyek($id) {
        $options = [
            'http' => [
                'method'  => 'DELETE',
            ],
        ];
        $context = stream_context_create($options);
        file_get_contents($this->api_base_url . '/proyek/' . $id, false, $context);
    }
}
