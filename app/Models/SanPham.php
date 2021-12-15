<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table="SanPham";
    protected $primaryKey = 'MaSP';
    public $timestamps = false;
    protected $attributes = [
        'TrangThai' => true,
    ];
    protected $fillable = [
        'MaSP',
        'TenSP',
        'TenTat',
        'DonGia',
        'MoTa',
        'SoLuongTon',
        'MaNCC',
        'MaNSX',
        'MaLoaiSP',
        'TrangThai',
        'NgayCapNhat',
        'Moi',
    ];
    public function loaisanpham()
    {
        return $this->belongsTo(LoaiSanPham::class, 'MaLoaiSP', 'MaLoaiSP');
    }
    public function nhasanxuat()
    {
        return $this->belongsTo(NhaSanXuat::class, 'MaNSX', 'MaNSX');
    }
    public function NhaCungCap()
    {
        return $this->belongsTo(NhaCungCap::class, 'MaNCC', 'MaNCC');
    }

}
