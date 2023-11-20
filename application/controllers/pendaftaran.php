<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('pendaftaran', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();
        $this->load->view("auth/formPendaftaran", $data);
    }
    public function register()
    {
        $data['user'] = $this->db->get_where('pendaftaran', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', ['required' => 'Nama Lengkap Wajib diisi']);
        $this->form_validation->set_rules('no_telp', 'No Telpon', 'required', ['required' => 'No Telpon Wajib diisi']);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required' => 'Tempat Lahir Wajib diisi']);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal Lahir Wajib diisi' ]);
        $this->form_validation->set_rules('no_akta_lahir', 'No Akta', 'required', ['required' => 'No Akta Wajib diisi' , 'integer' => 'No Akta harus Angka']);
        $this->form_validation->set_rules('nik', 'NIK', 'required', ['required' => 'NIK Wajib diisi' ,'integer' => 'NIK harus Angka']);
        $this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required|integer', ['required' => 'Ini Wajib diisi']);
        $this->form_validation->set_rules('jml_saudara', 'Jumlah Saudara', 'required', ['required' => 'Jumlah Saudara Mahasiswa Wajib diisi']);
        $this->form_validation->set_rules('agama', 'Agama', 'required', ['required' => 'Agama Wajib diisi']);
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', ['required' => 'Nama Ayah Wajib diisi']);
        $this->form_validation->set_rules('nik_ayah', 'NIK Ayah', 'required', ['required' => 'NIK Ayah Mahasiswa Wajib diisi']);
        $this->form_validation->set_rules('no_telp_ayah', 'No Telpon Ayah', 'required', ['required' => 'No Telpon Ayah Wajib diisi']);
        $this->form_validation->set_rules('kerja_ayah', 'Pekerjaan Ayah', 'required', ['required' => 'Pekerjaan Ayah Wajib diisi']);
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', ['required' => 'Nama Ibu Wajib diisi']);
        $this->form_validation->set_rules('nik_ibu', 'NIK Ibu', 'required|integer', ['required' => 'NIK Ibu Wajib diisi', 'integer' => 'No HP harus Angka']);
        $this->form_validation->set_rules('no_telp_ibu', 'No Telpon Ibu', 'required', ['required' => 'No Telpon Ibu Wajib diisi']);
        $this->form_validation->set_rules('kerja_ibu', 'Pekerjaan Ibu', 'required', ['required' => 'Pekerjaan Ibu Wajib diisi']);
        $this->form_validation->set_rules('foto_kk', 'Foto KK', 'required', ['required' => 'Foto KK Wajib diisi']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Wajib diisi']);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', ['required' => 'Kecamatan Wajib diisi']);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', ['required' => 'Kelurahan Wajib diisi']);
        $this->form_validation->set_rules('kota', 'Kota', 'required', ['required' => 'Kota Wajib diisi']);
        $this->form_validation->set_rules('kodePos', 'Kode Pos', 'required|integer', ['required' => 'Kode Pos Wajib diisi', 'integer' => 'Kode Pos harus Angka']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Wajib diisi']);

        if ($this->form_validation->run() == false) {
            $this->load->view("auth/formPendaftaran", $data);
        } else {
            $data = [
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'no_telp' => $this->input->post('no_telp'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'no_akta_lahir' => $this->input->post('no_akta_lahir'),
                'nik' => $this->input->post('nik'),
                'anak_ke' => $this->input->post('anak_ke'),
                'jml_saudara' => $this->input->post('jml_saudara'),
                'agama' => $this->input->post('agama'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nik_ayah' => $this->input->post('nik_ayah'),
                'no_telp_ayah' => $this->input->post('no_telp_ayah'),
                'kerja_ayah' => $this->input->post('kerja_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'nik_ibu' => $this->input->post('nik_ibu'),
                'no_telp_ibu' => $this->input->post('no_telp_ibu'),
                'kerja_ibu' => $this->input->post('kerja_ibu'),
                'foto_kk' => $this->input->post('foto_kk'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kota' => $this->input->post('kota'),
                'kodePos' => $this->input->post('kodePos'),
                'alamat' => $this->input->post('alamat'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types']='gif|jpg|png';
                $config['max_size']='2048';
                $config['upload_path']= './assets/img/pendaftaran/';
                $this->load->library('upload',$config);
                if ($this->upload->do_upload('gambar')){
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                }
                else {
                    echo $this->upload->display_errors();
                }
            }
            $this->pendaftaran_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
            role="alert">Data Prodi berhasil ditambahkan</div>');
            redirect('Prodi');
            }
        }
}