<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Dashboard extends CI_Controller {
   var $gallerypath;

  public function __construct()
  {
    parent::__construct();
  $this->load->model('m_berita');
  $this->load->model('m_login');
    $this->load->model('m_regulasi');
    $this->load->model('m_bantuan');
    $this->load->helper(array('url','html','file','form','file'));

    $this->load->library('pagination');

    if ($this->session->userdata('id_pengguna') == null) 
  {
    redirect('web/Login/logout');
  }
  }



  public function index()
  {
    
    $data['content'] = $this->m_bantuan->tampilbantuan();

    $this->load->view('dashboard',$data);
  }

  function kontak_aduan(){
    $data['data_aduan'] = $this->m_bantuan->dtaduan();

    $this->load->view('kontak_aduan',$data);
  
}
function artikel(){
  $data['berita'] = $this->m_berita->dtberita();

  $this->load->view('artikel_berita',$data);
  
}

function simpan_berita() {
  
    $judul_berita = $this->input->post('judul_berita', TRUE);
    $isi_berita = $this->input->post('isi_berita', TRUE);
    $gambar = $this->input->post('gambar', TRUE);
    $berita = $this->input->post('isi', TRUE);
    $user = '2';
     
    $newfile = $this->input->post('image-data', TRUE);
    

      $file_size = 5500; //5 MB
              $this->upload->initialize(array(
                "upload_path" => "uploads/",
                "allowed_types" => "jpg|jpeg|png|gif",
                "max_size" => "$file_size"
              ));

     if ( ! $this->upload->do_upload('gambar'))
              {
                  $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times; &nbsp;</span>
                        </button>
                        <strong>Gagal!</strong>
                     </div>'
                   );
                  redirect('dashboard/artikel');
              }else{

    $gbr = $this->upload->data();

    define('UPLOAD_DIR', 'uploads/');
   
    $filename = UPLOAD_DIR .$gbr['file_name']. $namaFile;
          
          $image     = preg_replace('/ /', '_',$filename);

                $data = array(
        'id_pengguna' => $user,
        'isi_berita'=>$isi_berita,
        'gambar' => $image,
        'judul_berita' => $judul_berita
      );
      
  $this->db->insert('tbl_berita', $data);
                    $this->session->set_flashdata('msg',
                       '
                       <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times; &nbsp;</span>
                          </button>
                          <strong>Sukses!</strong> Berita berhasil ditambahkan.
                       </div>'
                     );
      redirect('dashboard/artikel','refresh');
        }
    }

  public function verifikasi()
    {

        $id_penduduk= $this->input->post('id_penduduk');
        $status ='Y';


          $data= array("status"=>$_POST['status']);

          $this->db->where('id_penduduk', $_POST['id_penduduk']);
            $this->db->update('tbl_penduduk',$data);
            $this->session->set_flashdata('msg', 'Data Penduduk Berhasil Di verifikasi');
            redirect("dashboard");
        
    }
    public function tolak()
    {
      $id_penduduk= $this->input->post('id_penduduk');
        $status ='N';


          $data= array("status"=>$_POST['status']);

          $this->db->where('id_penduduk', $_POST['id_penduduk']);
            $this->db->update('tbl_penduduk',$data);
            $this->session->set_flashdata('msg', 'Data Penduduk Berhasil Di Tolak');
            redirect("dashboard");
    }
      public function edit_penduduk()
    
    {
        $this->form_validation->set_rules('id_penduduk', 'id_penduduk', 'required');
        $this->form_validation->set_rules('nik', 'nik', 'required');
         $this->form_validation->set_rules('nama', 'nama', 'required');
$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');

$this->form_validation->set_rules('no_telp', 'no_telp', 'required');


       if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('msg',"Data Gagal Di Edit");
            redirect('dashboard');
        }else{
          $data=array(
                "nik"=>$_POST['nik'],
                "nama"=>$_POST['nama'],
                "tempat_lahir"=>$_POST['tempat_lahir'],
                "tanggal_lahir"=>$_POST['tanggal_lahir'],
                "no_telp"=>$_POST['no_telp'],
            );

          $this->db->where('id_penduduk', $_POST['id_penduduk']);
            $this->db->update('tbl_penduduk',$data);
            $this->session->set_flashdata('msg', 'Data Penduduk Berhasil Di Edit');
    
            redirect('dashboard');
        }
    }

    function tambah_penduduk(){

              $nik          = htmlentities(strip_tags($_POST['nik']));
              $nama          = htmlentities(strip_tags($_POST['nama']));
              $tempat_lahir          = htmlentities(strip_tags($_POST['tempat_lahir']));
              $tanggal_lahir          = htmlentities(strip_tags($_POST['tanggal_lahir']));
              $no_telp          = htmlentities(strip_tags($_POST['no_telp']));
              $jenis_kelamin          = htmlentities(strip_tags($_POST['jenis_kelamin']));
              $pekerjaan          = htmlentities(strip_tags($_POST['pekerjaan']));
$status ='N';
//var_dump($nik, $nama, $tempat_lahir, $tanggal_lahir, $no_telp, $jenis_kelamin, $pekerjaan ,$image);         
              $file_size = 5500; //5 MB
              $this->upload->initialize(array(
                "upload_path" => "uploads/",
                "allowed_types" => "jpg|jpeg|png|gif",
                "max_size" => "$file_size"
              ));




              if ( ! $this->upload->do_upload('image'))
              {
                  $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times; &nbsp;</span>
                        </button>
                        <strong>Gagal!</strong>
                     </div>'
                   );
                  redirect('dashboard');
              }     else{


          $gbr = $this->upload->data();

    define('UPLOAD_DIR', 'uploads/');
    $filename = UPLOAD_DIR .$gbr['file_name']. $namaFile;
          
          $image     = preg_replace('/ /', '_',$filename);
          
   $data=array(
                "nik"=>$nik,
                "nama"=>$nama,
                "tempat_lahir"=>$tempat_lahir,
                "tanggal_lahir"=>$tanggal_lahir,
                "no_telp"=>$no_telp,
                "image"=>$image,
                "jenis_kelamin"=>$jenis_kelamin,
                "pekerjaan"=>$pekerjaan,
                 "status"=>$status,
            );
$this->db->insert('tbl_penduduk', $data);
                    $this->session->set_flashdata('msg',
                       '
                       <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times; &nbsp;</span>
                          </button>
                          <strong>Sukses!</strong> Penduduk berhasil ditambahkan.
                       </div>'
                     );
                    redirect('dashboard');

    }
}

function hapus_penduduk($id=''){


$this->m_bantuan->delete_data_by_pk('tbl_penduduk', 'id_penduduk', $id);


            $this->session->set_flashdata('msg', 'Data Penduduk Berhasil Di Hapus');
    
            redirect('dashboard');
}

function hapus_berita($id_berita=''){


$this->m_bantuan->delete_data_by_pk('tbl_berita', 'id_berita', $id_berita);

            $this->session->set_flashdata('msg', 'Data Berita Berhasil Di Hapus');
    
            redirect('dashboard/artikel');
}
function hapus_aduan($id=''){


$this->m_bantuan->delete_data_by_pk('tbl_aduan', 'id', $id);

            $this->session->set_flashdata('msg', 'Data Aduan Berhasil Di Hapus');
    
            redirect('dashboard/kontak_aduan');
}

}


/* AJ3 */
/* ColorlIb*/