<?php 

class Home extends CI_Controller
{
    public function index()
    {
        $data['identitas']= $this->identitas_model->tampil_data('identitas')->result();
        $data['tentang']= $this->tentang_model->tampil_data('tentang_kampus')->result();
        $data['informasi']= $this->informasi_model->tampil_data('informasi')->result();
        $data['hubungi']= $this->hubungi_model->tampil_data('hubungi')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('home',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function kirim_pesan()
    {
        $this->_rules();// untuk memanggil tabel form validation
        if ($this->form_validation->run() == FALSE)
        {
            $this->index();

        }else{
            $id                  = $this->input->post('id_hubungi');
            $nama                = $this->input->post('nama');
            $email               = $this->input->post('email');
            $pesan               = $this->input->post('pesan');
        
          $data = array (
            'nama'                  =>  $nama,
            'email'                 =>  $email,
            'pesan'                  =>  $pesan,
           
            );
            // $where = array(
            //   'id_hubungi' => $id
            // );

            $this->hubungi_model->update_data($data,'hubungi');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Dikirim!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');

            redirect('home/index');
        }
    }
   
    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required',['required'=> 'nama wajib di isi!']);
        $this->form_validation->set_rules('email','Email','required',['required'=> 'email di isi!']);
        $this->form_validation->set_rules('pesan','Pesan','required',['required'=> 'pesan wajib di isi!']);  
       
    }
}