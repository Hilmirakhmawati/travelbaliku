<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_travelbaliku extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }

# ======== registrasi  ==========

     public function registrasiAkun()
    {
        $register = array (
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'level' => "turis",
         );
        $q1 = $this->db->insert('tb_pengguna', $register);
        return $q1;
    }
# ======== end registrasi  ==========



# ======== login  ==========

    public function klogin()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $cek  = $this->db->get_where('tb_pengguna',['username' => $username]);
       
        // die(var_dump($cek));
        if($cek->num_rows() > 0)
        {
            
            $hasil = $cek->row();
            
            if(password_verify($password, $hasil->password))
            {   
                //$thisnama = $cek['nama'];
                $data_session = array(
                    'name' => $username,
                    'status' => "login",
                );
                // die(var_dump($data_session));
                $this->session->set_userdata($data_session);
                if($hasil->level == 'admin'){
                    //$this->session->set_userdata($data_session);
                    redirect('c_travelbaliku/dhadmin');
                }
                else{
                    //$this->session->set_userdata($data_session);
                    redirect('c_travelbaliku/beranda'); 
                }
                
            }
            else{
                $this->session->set_flashdata('msg', 'Wrong');
                redirect('c_travelbaliku/logintravel');
            }
        }
       
    }

# ======== end login  ==========
    public function getdatalogin()
    {
        $result = $this->db->get('tb_pengguna');
        return $result;
    }

    public function selectself($nama)
    {
        
        $result = $this->db->get_where('tb_pengguna',['nama'=> $nama]);
        return $result;
    }

# ======== v user , admin tambah paket  ==========

    public function getvuser_perkategori()
    {
        $id_kategori = $this->session->userdata('id_kategori');
        $this->db->where('id_kategori', $id_kategori); 
        $result = $this->db->get('tb_paketwisata');
        return $result;
    }

    public function getvuser_perkategoriID($id_kategori)
    {
        $this->db->select('id_kategori');
        $this->db->where('id_kategori', $id_kategori);
        $result = $this->db->get('tb_paketwisata');
        return $result;
    }

    public function getdatakategori()
    {

        $result = $this->db->get('tb_kategori');
        return $result;
    }
# ======== end  v user , admin tambah paket  ==========



# ======== kelola user  ==========

    public function getUser()
    {
        $result = $this->db->get('tb_pengguna');
        return $result;
    }

    public function deletepengguna($id_user)
    {
        $this->db->where('id_user', $id_user);
        $result = $this->db->delete('tb_pengguna');
        return $result;

    }

    public function insertuser()
    {
        $adduser = array (
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'username' => $this->input->post('username'),
            'password' =>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'level' => "turis",
            
        );
        $result = $this->db->insert('tb_pengguna', $adduser);
        return $result;
    }

    public function medituser()
    {
        $edit = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level')
        );
        $this->db->where('id_user', $this->input->post('id_user'));
        $result = $this->db->update('tb_pengguna', $edit);
        return $result;
    }

    public function getdetailuser($id_user)
    {
        $this->db->where('id_user',$id_user);
        $result = $this->db->get('tb_pengguna');
        return $result;
    }
# ======== end kelola user  ==========

# ======== kelola paket  ==========
    public function getPaket()
    {
     $result = $this->db->get('tb_paketwisata');
        return $result;
    }
    public function deletepaket($kode_paket)
    {
        $this->db->where('kode_paket', $kode_paket);
        $result = $this->db->delete('tb_paketwisata');
        return $result;

    }

    public function insertpaket()
    {
        $addpaket = array (
            'nama_paket' => $this->input->post('nama_paket'),
            'kategori' => $this->input->post('kategori'),
            'harga_paket' => $this->input->post('harga_paket'),
            'deskripsi' => $this->input->post('deskripsi'),
            'hotel' => $this->input->post('hotel'),
            'fasilitas' => $this->input->post('fasilitas'),
            'tempat_wisata' =>$this->input->post('tempat_wisata'),
            'tempat_makan' =>$this->input->post('tempat_makan'),
            
        );
        $result = $this->db->insert('tb_paketwisata', $addpaket);
        return $result;
    }

    public function meditpaket()
    {
        $edit = array(
            'nama_paket' => $this->input->post('nama_paket'),
            'kategori' => $this->input->post('kategori'),
            'harga_paket' => $this->input->post('harga_paket'),
            'deskripsi' => $this->input->post('deskripsi'),
            'hotel' => $this->input->post('hotel'),
            'fasilitas' => $this->input->post('fasilitas'),
            'tempat_wisata' =>$this->input->post('tempat_wisata'),
            'tempat_makan' =>$this->input->post('tempat_makan')
        );
        $this->db->where('kode_paket', $this->input->post('kode_paket'));
        $result = $this->db->update('tb_paketwisata', $edit);
        return $result;
    }

    public function getdetaipaket($kode_paket)
    {
        $this->db->where('kode_paket',$kode_paket);
        $result = $this->db->get('tb_paketwisata');
        return $result;
    }



# ======== end kelola paket  ==========

# ======== kelola pesanan  ==========
     public function getpesanan()
    {
        $result = $this->db->get('tb_pesanan');
        return $result;
    }
    public function deletepesanan($id_pesanan)
    {
        $this->db->where('id_pesanan', $id_pesanan);
        $result = $this->db->delete('tb_pesanan');
        return $result;

    }

    public function insertpesanan()
    {
        $addpesanan = array (
            'tanggal_pesanan' => $this->input->post('tanggal_pesanan'),
            'pembayaran' => $this->input->post('pembayaran'),
            'id_user' => $this->input->post('id_user'),
            'username' => $this->input->post('username'),
            'kode_paket' => $this->input->post('kode_paket'),
        );
        $result = $this->db->insert('tb_pesanan', $addpesanan);
        return $result;
    }

    public function meditpesanan()
    {
        $edit = array(
            'tanggal_pesanan' => $this->input->post('tanggal_pesanan'),
            'pembayaran' => $this->input->post('pembayaran'),
            'id_user' => $this->input->post('id_user'),
            'username' => $this->input->post('username'),
            'kode_paket' => $this->input->post('kode_paket')
        );
        $this->db->where('id_pesanan', $this->input->post('id_pesanan'));
        $result = $this->db->update('tb_pesanan', $edit);
        return $result;
    }

    public function getdetailpesanan($id_pesanan)
    {
        $this->db->where('id_pesanan',$id_pesanan);
        $result = $this->db->get('tb_pesanan');
        return $result;
    }

# ======== end kelola pesanan  ==========


# ======== kelola Kategori  ==========
     public function getKategori()
    {
     $result = $this->db->get('tb_kategori');
        return $result;
    }

       public function deletekategori($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $result = $this->db->delete('tb_kategori');
        return $result;

    }

    public function insertkategori()
    {
        $addkategori = array (
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_kategori' => $this->input->post('nama_kategori'),
        );
        $result = $this->db->insert('tb_kategori', $addkategori);
        return $result;
    }
     public function meditkategori()
    {
        $edit = array(
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_kategori' => $this->input->post('nama_kategori'),
        );
        $this->db->where('id_kategori', $this->input->post('id_kategori'));
        $result = $this->db->update('tb_kategori', $edit);
        return $result;
    }

    public function getDetailAdminKategori($id_kategori)
    {
        $this->db->where('id_kategori',$id_kategori);
        $result = $this->db->get('tb_kategori');
        return $result;
    }

# ======== booking  ==========
public function getBooking()
{
 $result = $this->db->get('tb_pesanan');
    return $result;
}

# ======== end booking  ==========

# ======== Detail Paket  ==========
public function getDetailPaket()
{
 $result = $this->db->get('tb_paketwisata');
    return $result;
}

# ======== end detailpaket  ==========


# ======== Paket Per Kategori  ==========
public function getDetailKategori()
{
 $result = $this->db->get('tb_paketwisata');
    return $result;
}

# ======== end detailpaket  ==========


# -------------------------

    public function getdatakeluarga()
    {
       
        $result = $this->db->get('tb-keluarga');
        return $result;
    }

    public function getdatagrup()
    {
       
        $result = $this->db->get('tb-grup');
        return $result;
    }

    public function getdatahoneymoon()
    {
       
        $result = $this->db->get('tb-honeymoon');
        return $result;
    }
# ---------------------------------
    public function getadmdatakeluarga()
    {
     $result = $this->db->get('tb-keluarga');
        return $result;
    }

    public function getadmdatahoneymoon()
    {
     $result = $this->db->get('tb-honeymoon');
        return $result;
    }

    public function getadmdatagrup()
    {
     $result = $this->db->get('tb-grup');
        return $result;
    }
# ---------------------------------------
    public function insertpaketkeluarga()
    {
        $addpaketkeluarga = array (
            'nama-paket' => $this->input->post('nama-paket'),
            'harga-paket' => $this->input->post('harga-paket'),
            'deskripsi' => $this->input->post('deskripsi'),
            'hotel' => $this->input->post('hotel'),
            'fasilitas' => $this->input->post('fasilitas'),
            'tempat-wisata' =>$this->input->post('tempat-wisata'),
            'tempat-makan' =>$this->input->post('tempat-makan'),
            
        );
        $result = $this->db->insert('tb-keluarga', $addpaketkeluarga);
        return $result;
    }

    public function meditpaketkeluarga()
    {
        $edit = array(
            'nama-paket' => $this->input->post('nama-paket'),
            'harga-paket' => $this->input->post('harga-paket'),
            'deskripsi' => $this->input->post('deskripsi'),
            'hotel' => $this->input->post('hotel'),
            'fasilitas' => $this->input->post('fasilitas'),
            'tempat-wisata' =>$this->input->post('tempat-wisata'),
            'tempat-makan' =>$this->input->post('tempat-makan')
        );
        $this->db->where('id-keluarga', $this->input->post('id-keluarga'));
        $result = $this->db->update('tb-keluarga', $edit);
        return $result;
    }

    public function getdetaipaketkeluarga($idkeluarga)
    {
        $this->db->where('id-keluarga',$idkeluarga);
        $result = $this->db->get('tb-keluarga');
        return $result;
    }

    public function deletekeluarga($id_keluarga)
    {
        $this->db->where('id-keluarga', $id_keluarga);
        $result = $this->db->delete('tb-keluarga');
        return $result;

    }

# ---------------------------------------
    public function insertpakethoneymoon()
    {
        $addpakethoneymoon = array (
            'nama-paket' => $this->input->post('nama-paket'),
            'harga-paket' => $this->input->post('harga-paket'),
            'deskripsi' => $this->input->post('deskripsi'),
            'hotel' => $this->input->post('hotel'),
            'fasilitas' => $this->input->post('fasilitas'),
            'tempat-wisata' =>$this->input->post('tempat-wisata'),
            'tempat-makan' =>$this->input->post('tempat-makan'),
            
        );
        $result = $this->db->insert('tb-honeymoon', $addpakethoneymoon);
        return $result;
    }

    public function meditpakethoneymoon()
    {
        $edit = array(
            'nama-paket' => $this->input->post('nama-paket'),
            'harga-paket' => $this->input->post('harga-paket'),
            'deskripsi' => $this->input->post('deskripsi'),
            'hotel' => $this->input->post('hotel'),
            'fasilitas' => $this->input->post('fasilitas'),
            'tempat-wisata' =>$this->input->post('tempat-wisata'),
            'tempat-makan' =>$this->input->post('tempat-makan')
        );
        $this->db->where('id-honeymoon', $this->input->post('id-honeymoon'));
        $result = $this->db->update('tb-honeymoon', $edit);
        return $result;
    }

    public function getdetaipakethoneymoon($idhoneymoon)
    {
        $this->db->where('id-honeymoon',$idhoneymoon);
        $result = $this->db->get('tb-honeymoon');
        return $result;
    }

    public function deletehoneymoon($id_honeymoon)
    {
        $this->db->where('id-honeymoon', $id_honeymoon);
        $result = $this->db->delete('tb-honeymoon');
        return $result;

    }

# ---------------------------------------
    public function insertpaketgrup()
    {
        $addpaketgrup = array (
            'nama-paket' => $this->input->post('nama-paket'),
            'harga-paket' => $this->input->post('harga-paket'),
            'deskripsi' => $this->input->post('deskripsi'),
            'hotel' => $this->input->post('hotel'),
            'fasilitas' => $this->input->post('fasilitas'),
            'tempat-wisata' =>$this->input->post('tempat-wisata'),
            'tempat-makan' =>$this->input->post('tempat-makan'),
            
        );
        $result = $this->db->insert('tb-grup', $addpaketgrup);
        return $result;
    }

    public function meditpaketgrup()
    {
        $edit = array(
            'nama-paket' => $this->input->post('nama-paket'),
            'harga-paket' => $this->input->post('harga-paket'),
            'deskripsi' => $this->input->post('deskripsi'),
            'hotel' => $this->input->post('hotel'),
            'fasilitas' => $this->input->post('fasilitas'),
            'tempat-wisata' =>$this->input->post('tempat-wisata'),
            'tempat-makan' =>$this->input->post('tempat-makan')
        );
        $this->db->where('id-grup', $this->input->post('id-grup'));
        $result = $this->db->update('tb-grup', $edit);
        return $result;
    }

    public function getdetaipaketgrup($idgrup)
    {
        $this->db->where('id-grup',$idgrup);
        $result = $this->db->get('tb-grup');
        return $result;
    }

    public function deletegrup($id_grup)
    {
        $this->db->where('id-grup', $id_grup);
        $result = $this->db->delete('tb-grup');
        return $result;

    }

#--------------------------------------------------
    public function insertdatabooking()
    {
        $addbooking = array (
            'tanggal_pesanan' => $this->input->post('tanggal_pesanan'),
            'nama_paket' => $this->input->post('nama_paket'),
            'username' => $this->input->post('username'),
            'metode_bayar' => $this->input->post('metode_bayar'),
            'bukti' => $this->input->post('bukti'),
            
        );
        $result = $this->db->insert('tb_pesanan', $addbooking);
        return $result;
    }

}
?>