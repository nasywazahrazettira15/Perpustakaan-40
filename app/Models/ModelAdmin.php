<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function TotalAnggota()
    {
        return $this->db->table('tbl_anggota')->countAll();
    }

    public function TotalBuku()
    {
        return $this->db->table('tbl_buku')->countAll();
    }

    public function TotalEbook()
    {
        return $this->db->table('tbl_ebook')->countAll();
    }
}

