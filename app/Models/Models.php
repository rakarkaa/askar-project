<?php

namespace App\Models;

use CodeIgniter\Model;

class Models extends Model
{
    protected $tabel = 'media';

    public function savedata($simpan)
    {
        $this->db->table($this->tabel)->insert($simpan);
    }
    public function updatedata($update, $filter)
    {
        $this->db->table($this->tabel)->update($update, $filter);
    }
    public function getdata($data = false)
    {
        if ($data === false) {
            return $this->db->table($this->tabel)->get()->getResult();
        } else {
            return $this->db->table($this->tabel)->getWhere($data)->getResult();
        }
    }

    public function getnama($data = false)
    {
        if ($data === false) {
            return $this->db->table('media')->join('user', 'media.kd_user = user.kd_user')->get()->getResult();
        } else {
            return $this->db->table('media')->join('user', 'media.kd_user = user.kd_user')->join('user', 'user.kd_user = sewa.kd_user')->getWhere($data)->getResult();
        }
    }
    public function sch($sch)
    {
        return $this->db->table($this->tabel)->like('kode_user', $sch, 'both')->orlike('username', $sch, 'both')->orlike('nama_lengkap', $sch, 'both')->get()->getResult();
        //$builder->like('kode_user',$sch,'both');
        //$builder->orlike('nama_lengkap',$sch,'both');
    }

    public function deletedata($dt_f)
    {
        $this->db->table($this->tabel)->delete($dt_f);
    }

    public function reg($s){
        $this->db->table('user')->insert($s);
    }

    public function vis($s){
        $this->db->table('visitor')->insert($s);
    }
}
