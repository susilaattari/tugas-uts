<?php
class Karyawan_model extends CI_model{
    public function getAllKaryawan(){
        return $this->db->get('datakaryawan')->result_array();
    }
    public function tambahDataKaryawan(){
        $data = [
            "nama_lengkap" => $this -> input -> post('nama',true),
            "tempat_lahir" => $this -> input -> post('tempat',true),
            "tanggal_lahir" => $this -> input -> post('tanggal',true),
            "jenis_kelamin" => $this -> input -> post('jenisKelamin',true),
            "lulusan" => $this -> input -> post('lulusan',true),
            "agama" => $this -> input -> post('agama',true),
            "alamat" => $this -> input -> post('alamat',true),
            "no_hp" => $this -> input -> post('hp',true),
            "foto" => $this -> input -> post('foto',true),
            "jabatan" => $this -> input -> post('jabatan',true),
            "email" => $this -> input -> post('email',true)
        ];
        $this->db->insert('datakaryawan',$data);
    }
    public function hapusData($id){
        $this->db->where('id',$id);
        $this->db->Delete('dataKaryawan');
    }
    public function getKaryawanById($id){
       return $this->db->get_where('dataKaryawan',['id'=>$id])->row_array();
    }
    public function ubahdata($id){
        $data = [
            "nama_lengkap" => $this -> input -> post('nama',true),
            "tempat_lahir" => $this -> input -> post('tempat',true),
            "tanggal_lahir" => $this -> input -> post('tanggal',true),
            "jenis_kelamin" => $this -> input -> post('jenisKelamin',true),
            "lulusan" => $this -> input -> post('lulusan',true),
            "agama" => $this -> input -> post('agama',true),
            "alamat" => $this -> input -> post('alamat',true),
            "no_hp" => $this -> input -> post('hp',true),
            "foto" => $this -> input -> post('foto',true),
            "jabatan" => $this -> input -> post('jabatan',true),
            "email" => $this -> input -> post('email',true)
        ];
        $this->db->where('id',$id);
        $this->db->update('datakaryawan',$data);
    }
    public function cariData(){
        $caridata = $this->input->post('cari',true);
        $this->db->like('nama_lengkap',$caridata);
        $this->db->or_like('jabatan',$caridata);
        return $this->db->get('dataKaryawan')->result_array();
    }
}
?>