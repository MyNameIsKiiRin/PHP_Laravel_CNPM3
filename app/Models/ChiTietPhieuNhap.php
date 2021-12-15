<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietPhieuNhap extends Model
{
    protected $table="ChiTietPhieuNhap";
    protected $primaryKey = 'MaCTPN';
    protected $fillable = [
        'MaCTPN',
        'MaPN',
        'MaSP',
        'SoLuongNhap',
        'DonGiaNhap',
        
    ];
    public function sanpham()
    {
        return $this->hasMany(SanPham::class, 'MaSP', 'MaSP');
    }
}
