<?php

namespace App\Models;

use CodeIgniter\Model;

class UserM extends Model
{
    protected $table            = 'tb_user';
    protected $allowedFields    = ['kode_user', 'kode_upline', 'nama', 'email', 'password', 'provinsi', 'alamat', 'tempatlahir', 'tgllahir', 'jk', 'pekerjaan', 'hp', 'wa', 'baju', 'celana', 'sepatu', 'vaksin', 'universitas', 'fakultas', 'level', 'aktif', 'kredit',  'status_kandidat'];

    // Dates
    protected $useTimestamps = true;

    // ubah data koordinator / kandidat
    public function editData($data)
    {
        $this->db->table('tb_user')
            ->where('id', $data['id'])
            ->update($data);
    }

    // public function data_kandidat($kode_user)
    // {
    //     return $this->db->table('tb_user')
    //         ->select('kode_user,kode_upline,nama,wa,jk,universitas,fakultas,provinsi,status_kandidat')
    //         ->where(['kode_upline' => $kode_user, 'aktif !=' => '2'])
    //         ->get();
    // }

    // menampilkan data kandidat berdasarkan kode usernya
    public function dataKandidat($kode_user)
    {
        $query = $this->db->table('tb_user')
            ->select('kode_user,kode_upline,nama,wa,jk,universitas,fakultas,provinsi,status_kandidat')
            ->where(['kode_upline' => $kode_user, 'aktif !=' => '2'])
            ->get();

        return $query->getResult();
    }
    // public function data_koord()
    // {
    //     return $this->db->table('tb_user')
    //         ->where(['aktif' => 0, 'level' => 0])
    //         ->get();
    // }

    // //menampilkan data koordinator dari data aktif dan level
    public function data_koord()
    {
        return $this->db->table('tb_user')
            ->where('level', 0)
            ->get();
    }

    // mengambil jumlah kandidat yang memiliki level 1 dari tabel tb_user
    public function totalSemuaKandidat()
    {
        $query = $this->db->table('tb_user')
            ->selectCount('id')
            ->where('kode_upline IS NOT NULL')
            ->where('level', 1)
            ->get()
            ->getRow();

        return $query->id;
    }

    // mengambil jumlah koordinator yang memiliki level 1 dari tabel tb_user
    public function totalSemuaKoordinator()
    {
        $query = $this->db->table('tb_user')
            ->selectCount('id')
            ->where('kode_user IS NOT NULL')
            ->where('level', 0)
            ->get()
            ->getRow();

        return $query->id;
    }

    public function total_uang($kode_user)
    {
        return $this->db->table('tb_user')
            ->select('kode_upline, kredit')
            ->selectSum('kredit')
            ->where('kode_upline', $kode_user)->get();
    }
    public function saldo_koord($kode_user)
    {
        return $this->db->table('tb_user')
            ->select('kode_upline, kredit')
            ->selectSum('kredit')
            ->groupBy('kode_upline')
            ->where(['level' => 1, 'kode_upline' => $kode_user])->get();
    }

    // saldo koordinator tampil di admin
    public function saldo($kode_user)
    {
        return $this->db->table('tb_saldo')
            ->select('kode_koord, saldo')
            ->selectSum('saldo')
            ->groupBy('kode_koord')
            ->where('kode_koord', $kode_user);
    }

    public function deleteData($data)
    {
        $this->db->table('tb_user')
            ->where('id', $data['id'])
            ->delete($data);
    }
}
