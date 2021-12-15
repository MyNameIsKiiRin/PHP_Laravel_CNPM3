<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table="LoaiSanPham";

    public function sanpham()
    {
        return $this->hasMany(SanPham::class, 'MaLoaiSP', 'MaLoaiSP');
    }
    protected $fillable = [
        'MaLoaiSP',
        'TenLoaiSP',
    ];
}
