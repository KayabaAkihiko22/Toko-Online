<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


        class Main extends CI_Controller {


         public function __construct()

         {

          parent::__construct();
          $this->load->database();
          $this->load->library('session');
          $this->load->library('cart');

         }

         public function index()

         {
            $limit = 6;
            $this->load->model('m_brg');
            $data = $this->m_brg->getall();
            $data = $this->m_brg->getdata($start = $this->uri->segment(3),$limit);
            $total = $this->m_brg->getcount();
            $prm['data'] = $data;

            $this->load->library('pagination');
            $config['base_url'] = site_url('main/index');
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['total_rows'] = $total;

            //Pagination Bootstrap//

            $config['full_tag_open'] = "";
            $config['full_tag_close'] = "";
            $config['num_tag_open'] = "";
            $config['num_tag_close'] = "";
            $config['cur_tag_open'] = "";
            $config['cur_tag_close'] = "";
            $config['next_tag_open'] = "";
            $config['next_tag_close'] = "";
            $config['prev_tag_open'] = "";
            $config['prev_tag_close'] = "";
            $config['first_tag_open'] = "";
            $config['firts_tag_close'] = "";
            $config['last_tag_open'] = "";
            $config['last_tag_close'] = "";

            //end//

            $this->pagination->initialize($config);
            $link = $this->pagination->create_links();
            $prm['hal'] = $link;

          	$this->load->view('main/header',$prm);

          	$this->load->view('main/home',$prm);

			   $this->load->view('main/footer',$prm);

         }
         public function payment()

         {

            $this->load->view('main/header');

            $this->load->view('main/payment');

            $this->load->view('main/footer');

         }
         public function compair()

         {

            $this->load->view('main/header');

            $this->load->view('main/compair');

            $this->load->view('main/footer');

         }
         public function tambah()

         {

            $this->load->view('main/header');

            $this->load->view('main/additem');

            $this->load->view('main/footer');

         } 
         public function baru() {
            $this->load->model('m_brg');
         if ($this->input->post('nama')) {
            $nama = $this->input->post('nama');
            $keterangan = $this->input->post('keterangan');
            $harga = $this->input->post('harga');
            $kategori = $this->input->post('kategori');
            $gambar = $this->input->post('foto');
            $lihat = $this->input->post('lihat');
            $this->load->library('upload');
            $config = array(
                  'upload_path' => "E:\\Tugas PKL\\Project1\\gambar",
                  'allowed_types' => "img|mpeg|mpg|jpg|jpeg|gif|png|bmp|tiff",
                  'max_size' => "2048",
                  'max_width' => "1024",
                  'max_height' => "768",
                  'encrypt_name' => TRUE
               );
            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto')) {
               $data_g = $this->upload->data();
               print_r($data_g);
               $gambar = 'gambar/' . $data_g['file_name'];
               $config_img = array(
                  'new_image' => $data_g['file_path'] . '/thumbs/' . $data_g['file_name'],
                  'image_library' => 'gd2',
                  'source_image' => $data_g['full_path'],
                  #'create_thumb' => TRUE,
                  'maintain_ratio' => TRUE,
                  'width' => 100,
                  'height' => 75
                  );
               $this->load->library('image_lib', $config_img);
               if ($this->image_lib->resize()) {
               }
               else {
                  echo $this->image_lib->display_errors();
               }
            }
               else {
                  echo $this->upload->display_errors();
               }
            $data = array(
               'nama' => $nama,
               'ket' => $keterangan,
               'harga' => $harga,
               'kategori' => $kategori,
               'gambar' => $gambar,
               'lihat' => $lihat
               );
            $this->m_brg->input_data($data,'barang');
            if ($this->m_barang->input_data == FALSE){
                   echo $this->session->set_flashdata('message', 'Anda Berhasil Input Data');
                        redirect('main/index');
               }
               else {
                  echo $this->session->set_flashdata('message', 'Anda Gagal Input Data');
                        redirect('main/index');
               }
            redirect('main/index');
         }

         }
         public function userpage()
         {
            $this->load->model('m_pengguna');
            $data =  $this->uri->segment(3);
            $cari = $this->m_pengguna->search('username',$data);
            /*print_r($cari);
            exit();*/
            $prm['data'] = $cari;

            $this->load->view('main/header',$prm);

            $this->load->view('main/user',$prm);

            $this->load->view('main/footer',$prm);
         }
         public function user()
         {
            $this->load->model('m_pengguna');
            $this->load->helper('date');
            if ($this->input->post('username')) {
               $username = $this->input->post('username');
               $pass = $this->input->post('password');
               $userakun = $this->input->post('userakun');
               $lastlogin = date('Y-m-d H:i:s');
    
            $data = array(
               'username' => $username,
               'password' => $pass,
               'userakun' => $userakun,
               'lastlogin' => $lastlogin
               );
            $this->m_pengguna->input_data($data,'akun');
            redirect('main/userpage/'.$username); 
            //$data = $this->m_pengguna->getall();
            //$data = $this->m_pengguna->getdata($start = $this->uri->segment(3),$limit);
            //$total = $this->m_pengguna->getcount();
            //$cari = $this->m_pengguna->search('usr',$usr);
            //$prm['data'] = $cari;
            //$prm['data'] = $data;
            //}

            /*$this->load->view('main/header');

            $this->load->view('main/user');

            $this->load->view('main/footer');*/
         }
           
         }
         public function userlogin()
         {
            //getdata

            $username = $this->input->post('username');
            $pass = $this->input->post('password');
            $this->load->model('m_pengguna');

            //verify

            if($dat = $this->m_pengguna->cek_login($username,$pass)) {
               $data =array(
                  'login_ok' => TRUE,
                  'userakun' => $dat->userakun,
                  'username' => $dat->username
                  );
               $this->session->set_userdata($data);
               $this->session->set_flashdata('message', 'Anda Berhasil Login');
               redirect('main/index');
            }
               else {
                  $this->session->set_userdata('login_ok', FALSE);
                  $this->session->set_flashdata('message', 'Anda Gagal Login');
                  redirect('main/login');
               }
         }
         public function userlogout() 
         {
            $this->session->unset_userdata('login_ok');
            redirect('main/index');
         }
          public function checkout()
         {
            $this->load->view('main/header');

            $this->load->view('main/checkout');

            $this->load->view('main/footer');
         }
         public function confirmbuy()
         {
            $this->load->view('main/header');

            $this->load->view('main/confirmbuy');

            $this->load->view('main/footer');
         }
         public function transaksi()
         {
            $this->load->model('m_pengguna');
            $this->load->helper('date');
            $tgl = date('Y-m-d H:i:s');
            $userid = $this->session->userdata('username');
            $total = $this->cart->total_items();
            $ekspedisi = $this->input->post('ekspedisi');
            $tujuan = $this->input->post('tujuan');
            if ($ekspedisi == "JNE") {
               $ongkir = "Rp.8000/km";
            }
            if ($ekspedisi == "MEX_Berlin") {
               $ongkir = "Rp.7000/km";
            }
            if ($ekspedisi == "POS_Indonesia") {
               $ongkir = "Rp.6000/km";
            }
            if ($ekspedisi == "BRE") {
               $ongkir = "Rp.5000/km";
            }
            if ($ekspedisi == "Indah_Cargo") {
               $ongkir = "Rp.4000/km";
            }
            $data = array(
               'tanggal' => $tgl,
               'userid' => $userid,
               'total' => $total,
               'ekspedisi' => $ekspedisi,
               'tujuan' => $tujuan,
               'ongkir' => $ongkir
               );
            $id = $this->m_pengguna->input_data($data,'transaksi');
             if ($id !== FALSE){
                 $cart = $this->cart->contents();
                 foreach ($cart as $item) {
                  $data = array(
                     'trxid' => $id,
                     'itemid' => $item['id'],
                     'qty' => $item['qty'],
                     'harga' => $item['price'] 
                     );
                     $this->m_pengguna->input_data($data,'t_detail');  
                 }
                  $this->cart->destroy();
                   echo $this->session->set_flashdata('message', 'Anda berhasil input data');
                        redirect('main/index');
               }
               else {
                  echo $this->session->set_flashdata('message', 'Anda gagal input data');
                        redirect('main/index');
               }
            redirect('main/index');

         }
         public function pending()
         {
            $this->load->model('m_pengguna');
            $data = $this->m_pengguna->innerjoin_trxstatus('transaksi','t_detail',0,$this->uri->segment(3)); 
            $prm['pending'] = $data;
            $cari = $this->m_pengguna->search('username',$this->uri->segment(3));
            $prm['data'] = $cari;

            $this->load->view('main/header');
            $this->load->view('main/user',$prm);
            $this->load->view('main/footer');

         }
         public function components()

         {

            $this->load->view('main/header');

            $this->load->view('main/components');

            $this->load->view('main/footer');

         }
         public function contact()

         {

            $this->load->view('main/header');

            $this->load->view('main/contact');

            $this->load->view('main/footer');

         }
         public function faq()

         {

            $this->load->view('main/header');

            $this->load->view('main/faq');

            $this->load->view('main/footer');

         }
         public function forgetpass()

         {

            $this->load->view('main/header');

            $this->load->view('main/forgetpass');

            $this->load->view('main/footer');

         }
         public function legal_notice()

         {

            $this->load->view('main/header');

            $this->load->view('main/legal_notice');

            $this->load->view('main/footer');

         }
         public function login()

         {

            $this->load->view('main/header');

            $this->load->view('main/login');

            $this->load->view('main/footer');

         }
          public function normal()

         {

            $this->load->view('main/header');

            $this->load->view('main/normal');

            $this->load->view('main/footer');

         }
         public function product_details()

         {
            $this->load->model('m_brg');
            $this->m_brg->getitem($this->uri->segment(3));

            $this->load->view('main/header');

            $this->load->view('main/product_details');

            $this->load->view('main/footer');

         }
         public function product_summary()

         {

            $this->load->view('main/header');

            $this->load->view('main/product_summary');

            $this->load->view('main/footer');

         }
         public function products()

         {

            $this->load->view('main/header');

            $this->load->view('main/products');

            $this->load->view('main/footer');

         }
         public function register()

         {

            $this->load->view('main/header');

            $this->load->view('main/register');

            $this->load->view('main/footer');

         }
          public function special_offer()

         {

            $this->load->view('main/header');

            $this->load->view('main/special_offer');

            $this->load->view('main/footer');

         }
         public function tac()

         {

            $this->load->view('main/header');

            $this->load->view('main/tac');

            $this->load->view('main/footer');

         }

    }