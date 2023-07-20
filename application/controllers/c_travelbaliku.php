<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class c_travelbaliku extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('m_travelbaliku');
    }


    
    # ======== login, regis, logout  ==========

        public function logintravel()
        {
            $this->load->view('login');
        }

        public function login()
        {
            $this->m_travelbaliku->klogin();
        }


        public function registertravel()
        {
            $this->load->view('register');
        }

        public function register()
        {
            $this->m_travelbaliku->registrasiAkun();
            redirect('c_travelbaliku/logintravel','refresh');
        }


        public function logout()
        {
            $this->session->sess_destroy();
            redirect('c_travelbaliku/logintravel','refresh');
        }
    # ======== end login, regis, logout  ==========

# =========  user ==========
# ==========================

    public function beranda()
    {
        $this->load->view('view_nav');
        $this->load->view('view_beranda');
        $this->load->view('view_footer');
    }
    public function about()
    {
        $this->load->view('view_nav');
        $this->load->view('view_about');
        $this->load->view('view_footer');
    }

    public function vpaket()
    {
       $this->load->view('view_nav');
        $this->load->view('vuser_paketperkategori');
        $this->load->view('view_footer'); 
    }


    public function vpaketwisata()
    {
        $data['vdpaketwisata'] = $this->m_travelbaliku->getdatakategori();
        $this->load->view('view_nav');
        $this->load->view('paketwisata', $data);
         $this->load->view('view_footer'); 
    }

    public function kvpaket_perkategori()
    {
        
        $this->load->view('view_nav');
        $data['vpaket_perkategori'] = $this->m_travelbaliku->getvuser_perkategori();
        $this->load->view('vuser_paketperkategori', $data);
        $this->load->view('view_footer'); 
    }

# ==== end user =====
# ===================


# ===== admin ======
# ==================
    public function dhadmin()
    {   
        $data['datalogin'] = $this->m_travelbaliku->getdatalogin();
        $nama = $this->session->userdata('nama');
        $data['nama']= $this->m_travelbaliku->selectself($nama);
        $this->load->view('dashboard');
        $this->load->view('view_dhadmin', $data);
    }
    
    # ==== kelola user =====
    public function kelolauser()
    {
        $data['pengguna'] = $this->m_travelbaliku->getUser();
        $this->load->view('dashboard');
        $this->load->view('view_user', $data);
    }

    public function tambahuser()
    {
        $this->load->view('dashboard');
        $this->load->view('form_tambah_user');
    }
    
    public function adduser()
    {
        $this->m_travelbaliku->insertuser();
        redirect('c_travelbaliku/kelolauser','refresh');
    }

    public function deleteuser($id_user)
    {
        $this->m_travelbaliku->deletepengguna($id_user);
        redirect('c_travelbaliku/kelolauser');
    }

    public function ubahuser($id_user)
    {
        $data['datauser']=$this->m_travelbaliku->getdetailuser($id_user);
        $this->load->view('dashboard');
        $this->load->view('form_edit_user',$data);  
    }
        
    public function edituser($id_user)    
    {   
            
        $this->m_travelbaliku->medituser();
        redirect('c_travelbaliku/kelolauser');
    }

    # ==== end kelola user ==== 

    # ===== kelola paket ======
    public function kelolapaket()
    {
        $data['paket'] = $this->m_travelbaliku->getPaket();
        $this->load->view('dashboard');
        $this->load->view('view_paket', $data);
    }

    public function tambahpaket()
    {
        $this->load->view('dashboard');
        $this->load->view('form_tambah_paket');
    }

    public function addpaket()
    {
        $this->m_travelbaliku->insertpaket();
        redirect('c_travelbaliku/kelolapaket','refresh');
    }

    public function deletepaket($kode_paket)
    {
        $this->m_travelbaliku->deletepaket($kode_paket);
        redirect('c_travelbaliku/kelolapaket');
    }
    
     public function ubahpaket($kode_paket)
    {
        $data['datapaket']=$this->m_travelbaliku->getdetailpaket($kode_paket);
        $this->load->view('dashboard');
        $this->load->view('form_edit_paket',$data);  
    }
        
    public function editpaket($kode_paket)    
    {   
            
        $this->m_travelbaliku->meditpaket();
        redirect('c_travelbaliku/kelolapaket');
    }
    # ==== end kelola paket ===== 

    # ====  kelola pesanan ===== 
    public function kelolapesanan()
    {
        $data['booking'] = $this->m_travelbaliku->getpesanan();
        $this->load->view('dashboard');
        $this->load->view('view_pesanan', $data);
    }
    public function tambahpesanan()
    {
        $this->load->view('dashboard');
        $this->load->view('form_tambah_pesanan');
    }

    public function addpesanan()
    {
        $this->m_travelbaliku->insertpesanan();
        redirect('c_travelbaliku/kelolapesanan','refresh');
    }

    public function deletepesanan($id_pesanan)
    {
        $this->m_travelbaliku->deletepesanan($id_pesanan);
        redirect('c_travelbaliku/kelolapesanan');
    }

     public function ubahpesanan($id_pesanan)
    {
        $data['datapesanan']=$this->m_travelbaliku->getdetailpesanan($id_pesanan);
        $this->load->view('dashboard');
        $this->load->view('form_edit_pesanan',$data);  
    }
        
    public function editpesanan($id_pesanan)    
    {   
            
        $this->m_travelbaliku->meditpesanan();
        redirect('c_travelbaliku/kelolapesanan');
    }
    # ==== end kelola pesanan ===== 


    # ====  kelola kategori ===== 
     public function kelolakategori()
    {
        $data['kategori'] = $this->m_travelbaliku->getKategori();
        $this->load->view('dashboard');
        $this->load->view('view_adminkategori', $data);
    }
     public function tambahkategori()
    {
        $this->load->view('dashboard');
        $this->load->view('form_tambah_kategori');
    }

    public function addkategori()
    {
        $this->m_travelbaliku->insertkategori();
        redirect('c_travelbaliku/kelolakategori','refresh');
    }
      public function deletekategori($id_kategori)
    {
        $this->m_travelbaliku->deletekategori($id_kategori);
        redirect('c_travelbaliku/kelolakategori');
    }

     public function ubahkategori($id_kategori)
    {
        $data['datakategori']=$this->m_travelbaliku->getDetailAdminKategori($id_kategori);
        $this->load->view('dashboard');
        $this->load->view('form_edit_kategori',$data);  
    }
        
    public function editkategori($id_kategori)    
    {   
            
        $this->m_travelbaliku->meditkategori();
        redirect('c_travelbaliku/kelolakategori');
    }

# ===== end admin ======
# ==================



# ====  Booking ===== 
    public function booking()
    {
        $this->load->view('form_booking');
    }
    public function addpesananbooking()
    {
        $this->m_travelbaliku->insertbooking();
        redirect('c_travelbaliku/booking','refresh');
    }


# ====  Detail Paket ===== 
public function detailpaket()
    {
        $data['detpaket'] = $this->m_travelbaliku->getDetailPaket();
        
        $this->load->view('view_detailpaket', $data);

    }
# ==== End Detail Paket ===== 


# ====  Paket Perkategori ===== 
public function paketperkategori()
    {
        $data['paketkategori'] = $this->m_travelbaliku->getDetailKategori();
        
        $this->load->view('view_paketperkategori', $data);

    }
# ==== End Detail Paket ===== 





# --------------------------------------

    public function kvdatakeluarga()
    {
        
        $this->load->view('view_nav');
        $data['vdatakeluarga'] = $this->m_travelbaliku->getdatakeluarga();
        $this->load->view('data-keluarga', $data);
        $this->load->view('view_footer'); 
    }

    public function kvdatahoneymoon()
    {
        
        $this->load->view('view_nav');
        $data['vdatahoneymoon'] = $this->m_travelbaliku->getdatahoneymoon();
        $this->load->view('data-honeymoon', $data);
        $this->load->view('view_footer'); 
    }

    public function kvdatagrup()
    {
        
        $this->load->view('view_nav');
        $data['vdatagrup'] = $this->m_travelbaliku->getdatagrup();
        $this->load->view('data-grup', $data);
        $this->load->view('view_footer'); 
    }

# ---------------------------------------
    public function kelolakeluarga()
    {
        $data['admvkeluarga'] = $this->m_travelbaliku->getadmdatakeluarga();
        $this->load->view('dashboard');
        $this->load->view('adm-data-keluarga', $data);
    }

    public function kelolahoneymoon()
    {
        $data['admvhoneymoon'] = $this->m_travelbaliku->getadmdatahoneymoon();
        $this->load->view('dashboard');
        $this->load->view('adm-data-honeymoon', $data);
    }

    public function kelolagrup()
    {
        $data['admvgrup'] = $this->m_travelbaliku->getadmdatagrup();
        $this->load->view('dashboard');
        $this->load->view('adm-data-grup', $data);
    }

# -----------------------------------------
    public function tambahpaketkeluarga()
    {
        $this->load->view('dashboard');
        $this->load->view('adm-tambah-keluarga');
    }

    public function addpaketkeluarga()
    {
        $this->m_travelbaliku->insertpaketkeluarga();
        redirect('c_travelbaliku/kelolakeluarga','refresh');
    }

     public function ubahpaketkeluarga($idkeluarga)
    {
        $data['datapaketkeluarga']=$this->m_travelbaliku->getdetaipaketkeluarga($idkeluarga);
        $this->load->view('dashboard');
        $this->load->view('adm-edit-keluarga',$data);  
    }
        
    public function editpaketkeluarga($idkeluarga)    
    {   
            
        $this->m_travelbaliku->meditpaketkeluarga();
        redirect('c_travelbaliku/kelolakeluarga');
    }

    public function deletepaketkeluarga($id_user)
    {
        $this->m_travelbaliku->deletekeluarga($id_user);
        redirect('c_travelbaliku/kelolakeluarga');
    }
# -------------------------------------------------

    public function tambahpakethoneymoon()
    {
        $this->load->view('dashboard');
        $this->load->view('adm-tambah-honeymoon');
    }

    public function addpakethoneymoon()
    {
        $this->m_travelbaliku->insertpakethoneymoon();
        redirect('c_travelbaliku/kelolahoneymoon','refresh');
    }

     public function ubahpakethoneymoon($idhoneymoon)
    {
        $data['datapakethoneymoon']=$this->m_travelbaliku->getdetaipakethoneymoon($idhoneymoon);
        $this->load->view('dashboard');
        $this->load->view('adm-edit-honeymoon',$data);  
    }
        
    public function editpakethoneymoon($idhoneymoon)    
    {   
            
        $this->m_travelbaliku->meditpakethoneymoon();
        redirect('c_travelbaliku/kelolahoneymoon');
    }

    public function deletepakethoneymoon($id_user)
    {
        $this->m_travelbaliku->deletehoneymoon($id_user);
        redirect('c_travelbaliku/kelolahoneymoon');
    }

# -------------------------------------------------

    public function tambahpaketgrup()
    {
        $this->load->view('dashboard');
        $this->load->view('adm-tambah-grup');
    }

    public function addpaketgrup()
    {
        $this->m_travelbaliku->insertpaketgrup();
        redirect('c_travelbaliku/kelolagrup','refresh');
    }

     public function ubahpaketgrup($idgrup)
    {
        $data['datapaketgrup']=$this->m_travelbaliku->getdetaipaketgrup($idgrup);
        $this->load->view('dashboard');
        $this->load->view('adm-edit-grup',$data);  
    }
        
    public function editpaketgrup($idgrup)    
    {   
            
        $this->m_travelbaliku->meditpaketgrup();
        redirect('c_travelbaliku/kelolagrup');
    }

    public function deletepaketgrup($id_user)
    {
        $this->m_travelbaliku->deletegrup($id_user);
        redirect('c_travelbaliku/kelolagrup');
    }

# -------------------------------------------------
    public function kbooking()
    {
        
        $this->load->view('view_nav');
        $this->load->view('booking');
        $this->load->view('view_footer');

    }

    public function addbooking()
    {
        $this->m_travelbaliku->insertdatabooking();
        redirect('c_travelbaliku/kvbooking','refresh');
    }

    public function kvbooking()
    {
        
        $this->load->view('view_nav');
        $data['vriwayat'] = $this->m_travelbaliku->getpesanan();
        $this->load->view('riwayat', $data);
        $this->load->view('view_footer'); 
    }
}
 ?>