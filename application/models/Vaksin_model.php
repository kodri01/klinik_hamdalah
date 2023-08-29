<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Vaksin_model extends CI_Model
{

    public function getAll()
    {
        return $this->db->get('registrasi')->result();
    }

    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function update_data($data, $table)
    {
        $this->db->update($table, $data);
    }

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function data_register()
    {
        return $this->db->get('registrasi')->row();
    }

    public function data_skrining()
    {

        return $this->db->get('skrining')->row();
    }

    public function data_admin()
    {

        return $this->db->get('admin')->row();
    }

    public function data_transaksi()
    {

        return $this->db->get('transaksi')->row();
    }

    public function data_vaksin()
    {
        return $this->db->get('vaksin')->row();
    }

    public function vaksin_anak()
    {

        return $this->db->get('imunisasi')->row();
    }

    public function delete($no_nik)
    {
        return $this->db->delete('registrasi', array('no_nik' => $no_nik));
    }

    function total_row_registrasi()
    {
        return $this->db->get('registrasi')->num_rows();
    }

    function total_row_imunisasi()
    {
        return $this->db->get('imunisasi')->num_rows();
    }

    function total_row_vaksin()
    {
        return $this->db->get('vaksin')->num_rows();
    }

    public function hasil_skrining()
    {
        $this->db->select('*');
        $this->db->from('registrasi');
        $this->db->join('skrining', 'skrining.no_nik=registrasi.no_nik');
        return $this->db->get()->result();
    }

    public function hasil_vaksin()
    {
        $this->db->select('*');
        $this->db->from('registrasi');
        $this->db->join('vaksin', 'vaksin.no_nik=registrasi.no_nik');
        return $this->db->get()->result();
    }

    public function hasil_imun()
    {
        $this->db->select('*');
        $this->db->from('registrasi');
        $this->db->join('imunisasi', 'imunisasi.no_nik=registrasi.no_nik');
        return $this->db->get()->result();
    }

    public function cetak_skrining($no_nik)
    {
        $this->db->order_by('registrasi.no_nik', $no_nik);
        return $this->db->from('registrasi')
            ->join('skrining', 'skrining.no_nik=registrasi.no_nik')
            ->get()
            ->result();
    }









    //proses yang belum berhasil


    // public function cetak_skrining($no_nik)
    // {
    //     $this->db->select('*');
    //     $this->db->from('registrasi');
    //     $this->db->join('skrining', 'skrining.no_nik = registrasi.no_nik');
    //     $this->db->join('vaksin', 'vaksin.no_nik = registrasi.no_nik');
    //     $this->db->where('skrining', $no_nik);
    //     return $this->db->get('no_nik')->row();
    // }







    // public function Update($table, $data, $where)
    // {
    //     $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
    // }


    // public function update($data, $id)
    // {
    //     return $this->db->update('registrasi', $data, array('no_nik' => $id));
    // }



    // public function row_registrasi($no_nik)
    // {
    //     $this->db->where('no_nik', $no_nik);

    //     return $this->db->get('registrasi')->row();
    // }






    // }

    // public function data_skrining($no_nik)
    // {
    //     $this->db->join('registrasi', 'registrasi.no_nik = skrining.no_nik');
    //     $this->db->where('skrining', $no_nik);
    //     return $this->db->get('no_nik')->result();
    // }

    // public function search($no_nik)
    // {

    //     $this->db->select('*');
    //     $this->db->from('registrasi');
    //     $this->db->where('no_nik', $no_nik);
    //     $this->db->join('skrining', 'skrining.no_nik=registrasi.no_nik');
    //     $this->db->join('transaksi', 'transaksi.no_nik=registrasi.no_nik');
    //     $this->db->join('vaksin', 'vaksin.no_nik=registrasi.no_nik');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    // public function search($cari)
    // {
    //     if (!$cari) {
    //         return null;
    //     }
    //     $this->db->like('no_nik', $cari);
    //     $query = $this->db->get($this->_table);
    //     return $query->result();
    // }

    // public function cetak_skrining($no_nik)
    // {
    //     $this->db->select('*');
    //     $this->db->from('registrasi');
    //     $this->db->join('skrining', 'skrining.no_nik = registrasi.no_nik', 'left');
    //     $this->db->where('skrining.no_nik', $no_nik);
    //     return $this->db->get()->result();
    // }






    public function get_skrining()
    {
        return $this->db->get('skrining')->result();
    }

    public function get_registrasi()
    {
        return $this->db->get('registrasi')->result();
    }

    public function get_transaksi()
    {
        return $this->db->get('transaksi')->result();
    }

    public function get_vaksin()
    {
        return $this->db->get('vaksin')->result();
    }

    // public function getById($id)
    // {
    //     return $this->db->get_where($this->table, ["kd_siswa" => $id])->row();
    // }
}